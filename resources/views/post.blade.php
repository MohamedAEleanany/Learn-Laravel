<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>


<a href="{{ route('posts.index') }}"> index function</a>
<a href="{{ route('posts.create') }}"> create function</a>
<a href="{{ route('posts.store') }}"> store function</a>
<a href="{{ route('posts.show' ,["post"=>1]) }}"> show function</a>
<a href="{{ route('posts.update',["post"=>1]) }}"> update function</a>
<a href="{{ route('posts.edit',["post"=>1]) }}"> edit function</a>
<a href="{{ route('posts.destroy',["post"=>1]) }}"> destroy function</a>