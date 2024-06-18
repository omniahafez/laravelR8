<x-mail::message>
<div >
   Hello {{ $data['clientName']}},
<br><br>
</div>
 
<div >
    {{ $data ['the message']}}
</div>
 
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>