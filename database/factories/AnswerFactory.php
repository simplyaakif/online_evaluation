<?php

    namespace Database\Factories;

    use App\Models\Answer;
    use App\Models\Question;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class AnswerFactory extends Factory {

        protected $model = Answer::class;

        /**
         * Define the model's default state.
         *
         * @return array
         */
        public function definition()
        {
            return [
                'title'      => $this->faker->word(),
                'correct'    => $this->faker->boolean(),
                'reason'     => $this->faker->sentence(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
    }
