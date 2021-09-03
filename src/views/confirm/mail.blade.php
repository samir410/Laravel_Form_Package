@component('mail::message')
# Introduction
There is a message{{$fname}}
Message:
{{$subject}}



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
