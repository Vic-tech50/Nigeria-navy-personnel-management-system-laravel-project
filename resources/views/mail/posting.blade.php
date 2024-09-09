<x-mail::message>
# Dear {{$user->name}}

You Have Been New Posting. <br>
# Details of Posting Below <br>

Unit Posted: {{$user->place_of_assignment}} <br>
Time Posted: {{ \Carbon\Carbon::parse($user->updated_at)->format('D, F jS, Y h:i:s A') }} <br>
Duration: {{$user->duration}} {{$user->time}} <br>
To Be Expired on: {{ \Carbon\Carbon::parse($user->retired_at)->format('D, F jS, Y h:i:s A') }}<br>


# Note: Your Dashboard Has Been Updated

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
