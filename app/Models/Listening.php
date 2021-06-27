<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Listening extends Model implements HasMedia
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use InteractsWithMedia;

    public $table = 'listenings';

    public $orderable = [
        'id',
        'question',
        'marks',
        'evaluation_test.title',
    ];

    public $filterable = [
        'id',
        'question',
        'marks',
        'evaluation_test.title',
    ];

    protected $appends = [
        'audio',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'question',
        'marks',
        'evaluation_test_id',
    ];

    public function getAudioAttribute()
    {
        return $this->getMedia('listening_audio')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();

            return $media;
        });
    }

    public function evaluationTest()
    {
        return $this->belongsTo(EvaluationTest::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
