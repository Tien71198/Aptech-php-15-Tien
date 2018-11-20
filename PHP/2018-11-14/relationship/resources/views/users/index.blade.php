
{{ 
    @foreach($users as $user)
    <div>
         {{$user -> name}} - {{$user -> id}} - {{$user -> number}}
    </div>
    @endforeach 
}}

<!--
{{-- @foreach($users as $user)
<div>
  {{$user['id']}} - {{$user['name']}} - {{$user['passport']['number']}} 
</div>
@endforeach --}}-->