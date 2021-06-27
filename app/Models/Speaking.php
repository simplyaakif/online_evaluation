<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speaking extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'speakings';

    public $orderable = [
        'id',
        'speaking_question',
        'marks',
        'evaluation_test.title',
    ];

    public $filterable = [
        'id',
        'speaking_question',
        'marks',
        'evaluation_test.title',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'speaking_question',
        'marks',
        'evaluation_test_id',
    ];

    public function evaluationTest()
    {
        return $this->belongsTo(EvaluationTest::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
