@component('mail::message')

<h3>Hi {{$full_name}}</h3>

<p>Link Here <a href='{{route('reset-password',$forgettoken)}}'>Reset Password</a></p>


@endcomponent
