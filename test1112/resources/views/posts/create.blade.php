@extends('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">
	<h1>Create new post</h1>

	<hr>

<form method="POST" action="/posts">

	{{ csrf_field() }}

  <div class="form-group">
		<label for="title">Ttile</label>

		<input type="text" class="form-control" id="title" name="title">

		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

  </div>
 {{$posts}}

  <div class="form-group">
    
	    <label for="body">Contents</label>
	    
	    <textarea id="body" name="body" class="form-control"></textarea>
  
  </div>

  <div class="form-group">
 
  	<button type="submit" class="btn btn-primary">Post</button>

  </div>


@include('layouts.errors')

</form>
@endsection
</div>