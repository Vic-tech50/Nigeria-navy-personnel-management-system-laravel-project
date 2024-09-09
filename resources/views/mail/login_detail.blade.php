<x-mail::message>
# Dear {{$user->name}}

Welcome to Nigeria Navy <br>

This is Your Login Details<br>

<h3><b>Email:</b> {{$user->email}}</h3><br>
<h3><b>Password:</b> {{$user->word}}</h3><br>

<p>Remember to change the password for security purpose</p>



Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
