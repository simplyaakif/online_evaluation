<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class CandidateEvaluation extends Model {

        protected $guarded = [];



        public function course()
        {
            return $this->belongsTo(CandidateCourse::class,'candidate_course_id');
        }
    }
