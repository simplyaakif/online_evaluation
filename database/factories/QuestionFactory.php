<?php

    namespace Database\Factories;

    use App\Models\EvaluationTest;
    use App\Models\Question;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class QuestionFactory extends Factory {

        protected $model = Question::class;

        /**
         * Define the model's default state.
         *
         * @return array
         */
        public function definition()
        {
            return [
                'question'       => $this->faker->sentence(),
                'marks'          => 1,
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),
                'evaluation_test_id' => 1,
            ];
        }
    }
