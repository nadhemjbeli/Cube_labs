@component('mail::message')
# hello Mr/Mrs {{Auth()->user()->first_name}}
We will Check your request for startup improvement soon
stay tuned

@component('mail::table')
| your startup idea                         | your phone number                         |
|:------------------------------------------|:------------------------------------------|
| {{Auth()->user()->startup->startup_idea}} | {{Auth()->user()->startup->phone_number}} |
@endcomponent

### We will contact you as soon as possible <br>
**go check our website here**

@component('mail::button', ['url' => 'cubeslabs.herokuapp.com'])
visit us
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
