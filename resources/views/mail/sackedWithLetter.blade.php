<x-mail::message>
# Dear {{$user->name}}

{{$user->letter}}



Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
