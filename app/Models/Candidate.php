<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const GENDER_RADIO = [
        'male'   => 'Male',
        'female' => 'Female',
    ];

    public $table = 'candidates';

    public $orderable = [
        'id',
        'name',
        'mobile',
        'address',
        'user_account.name',
        'gender',
        'dob',
        'cnic',
        'first_language',
        'profession',
        'city',
        'country',
        'nationality',
    ];

    public $filterable = [
        'id',
        'name',
        'mobile',
        'address',
        'user_account.name',
        'gender',
        'dob',
        'cnic',
        'first_language',
        'profession',
        'city',
        'country',
        'nationality',
    ];

    protected $dates = [
        'dob',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'mobile',
        'address',
        'user_account_id',
        'gender',
        'dob',
        'cnic',
        'first_language',
        'profession',
        'city',
        'country',
        'nationality',
    ];

    public function userAccount()
    {
        return $this->belongsTo(User::class);
    }

    public function getGenderLabelAttribute($value)
    {
        return static::GENDER_RADIO[$this->gender] ?? null;
    }

    public function getDobAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
