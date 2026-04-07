<div>
   hello from index from user file in blade Engine 
</div>
{{-- @dump($data) --}}
{{-- @foreach ($myuserdata as $data )
    {{ $data }}
@endforeach --}}
{{-- {{ $data }} --}}
{!! $data !!}


@dump($data)
@php
  echo  "From PHP in blade engine";
@endphp
<hr>
@if ($data == 'Mohamed Amr')
    {{ $data }} <span> Nice to meet you</span>
@endif

<hr>
@if ($data == 'Mohamed')
    <div style="color: green"> Authrized </div>
@else
    <div style="color: red">Not Authrized </div>
@endif

<hr>

@if ($data == 'Mohamed')
    <div>this line from blade if </div>
@elseif ($data == 'Mohamed Amr')
    <div>this line from blade else if </div>
@else
    <div>this line from blade elses </div>
@endif

<hr>
@foreach ($data2 as $names )
    {{ $names }}
@endforeach


<hr>

@for ($i = 0 ; $i < 2; $i++)
    {{$i  . $data2[$i]  }} <br>
@endfor
@dd($data)


