@component('mail::message')
# Thank you for contacting me!

Hello {{$data->name}},\
I have received your message and will get back to you if required! Down below you can find the message that you sent me for future references!

Email: {{$data->email}}\
Phone: {{$data->phone}}\
Message: {{$data->message}}

@component('mail::button', ['url' => url("/")])
Visit My Website
@endcomponent

Thanks,<br>
{{ setting('site.name') }}
@endcomponent
