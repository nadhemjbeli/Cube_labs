@component('mail::message')
# new user
Name: {{Auth()->user()->first_name}}
@if(Auth()->user()->startup)
@component('mail::table')
| his/her startup idea                         | his/her phone number                         |
|:------------------------------------------|:------------------------------------------|
| {{Auth()->user()->startup->startup_idea}} | {{Auth()->user()->startup->phone_number}} |
@endcomponent
@else
@component('mail::table')
| his/her startup idea                           | his/her phone number                         |
|:--------------------------------------------|:------------------------------------------|
| {{Auth()->user()->business->business_name}} | {{Auth()->user()->business->phone_number}} |
@endcomponent
@endif
@component('mail::button', ['url' => 'cubeslabs.herokuapp.com'])
visit us
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
