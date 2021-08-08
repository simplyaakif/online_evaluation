{{-- You can change this template using File > Settings > Editor > File and Code Templates > Code > Laravel Ideal Markdown Mail --}}
@component('mail::message')
# Hi {{Auth::user()->name}}

You scored {{$candidateEvaluation->candidate_evaluation_score}} for the Evaluation

@component('mail::button', ['url' => $candidateEvaluation->id])
View Result Card
@endcomponent

Thank you for trusting Ace.<br>
{{ config('app.name') }}
@endcomponent
