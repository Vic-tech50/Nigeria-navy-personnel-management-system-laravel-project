<x-mail::message>
# Dear {{$newsletter->name}}


 {!! $newsletter->message !!}



Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
