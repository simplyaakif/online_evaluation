<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class CandidateCourse extends Model {

        protected $guarded = [];

        public function invoice()
        {
            return $this->hasOne(Bill::class,'candidate_course_id');
        }

    }
