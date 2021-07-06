<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'courses';

    public $orderable = [
        'id',
        'title',
    ];

    public $filterable = [
        'id',
        'title',
        'session_duration.session_duration',
        'session_time.time',
        'session_start_date.start_date',
    ];

    protected $fillable = [
        'title',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function sessionDurations()
    {
        return $this->belongsToMany(SessionDuration::class)->withPivot('price');
    }

    public function sessionDuration()
    {
        return $this->belongsToMany(SessionDuration::class)->withPivot('price');
    }

    public function sessionTime()
    {
        return $this->belongsToMany(SessionTime::class);
    }

    public function sessionStartDate()
    {
        return $this->belongsToMany(SessionStartDate::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
