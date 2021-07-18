@component('mail::message')
    Dear {{$data['user_name']}}
    {{$data['text']}}

    @component('mail::button', ['url' => route('email')])
        View Post
    @endcomponent
@endcomponent
