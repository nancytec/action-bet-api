@component('mail::message')
 # Hi {{ $user->firstname }}

<p>We received a request to reset your password, please click the button bellow to reset it:</p>

@component('mail::button', ['url' => getenv('USER_FRONTEND_URL').'/Auth/ResetPassword/'.$token])
    Reset your password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
