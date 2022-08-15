@component('mail::message')
# Hi {{Auth::user()->name}}
We have received your evaluation for the applied  course.
You scored **{{$candidateEvaluation->candidate_evaluation_score}} / {{$totalQuestion}}** for the Evaluation.  You are
requested to visit our campus for further formalities related to the reservation of seat. You can avail one free trial
class.

## Spoken English
|Score  |Level  | Timings (Morning/Evening) | Fee
|--|--|--|--|
|0-20  | I Beginner  | 9am / 6:30pm |Rs 35000
|20-26  | II Beginner  | 2pm / 2:30pm |Rs 35000
|26-32  | III Intermediate  | 11am / 4pm |Rs 35000
|32 - 45  | IV Advance| 6pm |35000

---
## IETLS
|Score  |Duration| Timings (Morning/Evening) | Fee
|--|--|--|--|
|0-25  | 03 Months | 12:30pm / 7:30pm |Rs 35,000
|25-33 | 08 Weeks  | 12:30pm / 7:30pm |Rs 30,000
|33-50  | 06 Weeks  | 12:30pm / 7:30pm |Rs 25,000


@component('mail::button', ['url' => route('candidate.evaluation_single',$candidateEvaluation->id)])
View Result Card
@endcomponent

Thank you for trusting Ace.<br>
{{ config('app.name') }}
@endcomponent
