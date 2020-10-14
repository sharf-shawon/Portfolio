@component('mail::message')
# CV Downloaded

Hello {{setting('admin.name')}}
This email is to notify that the following person has downloaded your CV.

Name: {{$user->name}}\
Email: {{$user->email}}\
Signed In with: {{$user->provider}}

Thanks,<br>
{{ setting('site.name') }}
@endcomponent
