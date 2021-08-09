@component('mail::message')
# Hi {{Auth::user()->name}}

You scored {{$candidateEvaluation->candidate_evaluation_score}} for the Evaluation

@component('mail::button', ['url' => route('candidate.evaluation_single',$candidateEvaluation->id)])
View Result Card
@endcomponent

Thank you for trusting Ace.<br>
{{ config('app.name') }}
@endcomponent
