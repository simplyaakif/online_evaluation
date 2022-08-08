<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $guarded =[];
    public const STATUS_SELECT = [
        'unpaid'  => 'Un-Paid',
        'paid'    => 'Paid',
        'blocked' => 'Blocked',
    ];

    public $table = 'bills';

    public $orderable = [
        'id',
        'candidate.name',
        'amount',
        'due_date',
        'status',
        'paid_on',
    ];

    public $filterable = [
        'id',
        'candidate.name',
        'amount',
        'due_date',
        'status',
        'paid_on',
    ];

//    protected $fillable = [
//        'candidate_id',
//        'amount',
//        'due_date',
//        'status',
//        'paid_on',
//        'candidate_course_id'
//    ];

    protected $dates = [
        'due_date',
        'paid_on',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    public function candidate_course()
    {
        return $this->belongsTo(CandidateCourse::class);
    }



    public function getDueDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setDueDateAttribute($value)
    {
        $this->attributes['due_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getStatusLabelAttribute($value)
    {
        return static::STATUS_SELECT[$this->status] ?? null;
    }

    public function getPaidOnAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setPaidOnAttribute($value)
    {
        $this->attributes['paid_on'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
