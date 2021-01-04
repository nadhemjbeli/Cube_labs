@component('mail::message')
# hello Mr/Mrs {{Auth()->user()->first_name}}
We will Check your request for business improvement soon<br>
**stay tuned**<br>
your business: {{Auth()->user()->business->business_name}}

@component('mail::button', ['url' => 'cubeslabs.herokuapp.com'])
visit us
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
