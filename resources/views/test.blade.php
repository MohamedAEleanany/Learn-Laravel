<div>
    Hello from view in laravel
</div>
{{-- <a href="{{ uri('/test/name/Ahmed') }}">using uri</a> --}}

<a href="{{ route('test.view','Ahmed') }}"> using route function </a>

<a href="{{ route('test.view',['name'=>'yasser']) }}"> using route function (test another way) </a>

<a href="{{ route('test.view',['name'=>'yasser' ,'age'=> 21]) }}"> using route function (test two param) </a>

<a href="{{ route('test.index') }}">Test route group </a>