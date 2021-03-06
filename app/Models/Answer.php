<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'answers';

    public $filterable = [
        'id',
        'title',
        'reason',
        'question.question',
    ];

    public $orderable = [
        'id',
        'title',
        'correct',
        'reason',
        'question.question',
    ];

    protected $casts = [
        'correct' => 'boolean',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'correct',
        'reason',
        'question_id',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
