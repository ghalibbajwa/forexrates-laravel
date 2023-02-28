@component('mail::layout')

{{-- Header --}}
@slot('header')
    @component('mail::header', ['url' => config('app.url')])
        {{ config('app.name') . ' Password Reset'}}
    @endcomponent
@endslot

@slot('slot')
<p>We have received an request for Password Reset. If you have not request than you can ignore this email otherwise your Verification code password reset is: <b>{{$code}}</b></p>

Thanks,<br>
{{ config('app.name') }}
@endslot

{{-- Footer --}}
@slot('footer')
    @component('mail::footer')
        © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
    @endcomponent
@endslot
@endcomponent
