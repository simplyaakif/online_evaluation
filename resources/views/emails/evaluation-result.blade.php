@component('mail::message')
# Hi {{Auth::user()->name}}
We have received your evaluation for the applied  course.
You scored **{{$candidateEvaluation->candidate_evaluation_score}} / {{$totalQuestion}}** for the Evaluation.  You are
requested to visit our campus for further formalities related to the reservation of seat. You can avail one free trial
class. Either in the **Morning ( 10:30am - 12:00pm )** Or **Evening ( 05:30pm - 07:00pm )**.

~~Spoken English: 35000Rs /-
IELTS: 25000Rs /-
Online Spoken English: 26500/-~~

**Summer Package Price ( 1st June to 31st July)
10,000 / Month for any course.**


@component('mail::button', ['url' => route('candidate.evaluation_single',$candidateEvaluation->id)])
View Result Card
@endcomponent

Thank you for trusting Ace.<br>
{{ config('app.name') }}
@endcomponent
