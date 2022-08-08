<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class CandidateEvaluation extends Model {

        protected $guarded = [];



        public function course()
        {
            return $this->belongsTo(CandidateCourse::class,'candidate_course_id');
        }

        public function candidate()
        {
            return $this->hasMany(Candidate::class);
        }

        public function user()
        {
            return $this->belongsTo(User::class);
        }


    }
