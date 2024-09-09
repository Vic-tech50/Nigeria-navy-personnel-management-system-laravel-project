@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<!-- <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo"> -->

<img src = "https://imgs.search.brave.com/Wi_7TeBAT-uWjiUAO4xtodN6sj_gG36AFiIjvAMJelE/rs:fit:500:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy9l/L2U3L0JhZGdlX29m/X3RoZV9OaWdlcmlh/bl9OYXZ5LnN2Zw.svg" class="logo" alt="Logo" style="height: 70px">

@else
{{ $slot }}
@endif
</a>
</td>
</tr>
