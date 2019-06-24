@component('mail::message')
# Welcome

You have successfully registerd to INTCORE

@component('mail::button', ['url' => 'https://www.behance.net/intcorecompany'])
start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Stay tuned for new Updates
@endcomponent

Thanks,<br>
{{ $user->name }}
@endcomponent
