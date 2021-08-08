@component('mail::message')
# {{$user->name}} Registered Successfully

Welcome to ACE American Center of English!

@component('mail::button', ['url' => route('candidate.course')])
    Select Course
@endcomponent

Thanks
{{ config('app.name') }}
@endcomponent
