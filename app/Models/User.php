<?php

    namespace App\Models;

    use \DateTimeInterface;
    use App\Support\HasAdvancedFilter;
    use Carbon\Carbon;
    use Hash;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;

    class User extends Authenticatable implements MustVerifyEmail {

        use HasFactory;
        use HasAdvancedFilter;
        use SoftDeletes;
        use Notifiable;

        public $table = 'users';

        public $orderable
            = [
                'id',
                'name',
                'email',
                'email_verified_at',
            ];

        public $filterable
            = [
                'id',
                'name',
                'email',
                'email_verified_at',
                'roles.title',
            ];

        protected $hidden
            = [
                'remember_token',
                'password',
            ];

        protected $fillable
            = [
                'name',
                'email',
                'password',
            ];

        protected $dates
            = [
                'email_verified_at',
                'created_at',
                'updated_at',
                'deleted_at',
            ];

        public function avatarUrl()
        {

            return 'https://avatars.dicebear.com/api/initials/' . $this->name . '.svg';
        }

        public function candidate()
        {
            return $this->belongsTo(Candidate::class,'user_account_id');
        }


        public function getIsAdminAttribute()
        {
            return $this->roles()->where('title', 'Admin')->exists();
        }

        public function getEmailVerifiedAtAttribute($value)
        {
            return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
        }

        public function setPasswordAttribute($input)
        {
            if($input) {
                $this->attributes['password'] = Hash::needsRehash($input) ? Hash::make($input) : $input;
            }
        }

        public function roles()
        {
            return $this->belongsToMany(Role::class);
        }

        protected function serializeDate(DateTimeInterface $date)
        {
            return $date->format('Y-m-d H:i:s');
        }
    }
