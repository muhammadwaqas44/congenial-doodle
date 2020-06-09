@component('mail::message')
    <div>
        Company Name: {{$userCompany->title}},<br>
        Full Name : {{$userNew->name}},<br>
        Email : {{$userNew->email}},<br>
        Password : {{$userNew->actual_password}},<br>
        Phone : {{$userNew->phone}},<br>
        Access level : {{$userCompany->access_level}},<br>
        Note : {{$userCompany->notes}},<br>
    </div>
@endcomponent
