@component('mail::message')
    <div>
        Full Name : {{$userNew->name}},<br>
        Email : {{$userNew->email}},<br>
        Password : {{$userNew->actual_password}},<br>
        Phone : {{$userNew->phone}},<br>
{{--        Role : {{$userNew->role->name}},<br>--}}
        Status : @if($userNew->status == 1) Active @else Inactive @endif<br>
        Note : {{$userNew->remarks}},<br>
    </div>
@endcomponent
