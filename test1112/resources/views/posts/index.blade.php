@extends ('layouts.master')



@section('content')
	    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Bulletin Board</h1>
          <!-- <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p> -->
        </div>
      </section>



    @foreach($posts as $post)
 		@include('posts.post')
 	@endforeach
    </main>

@endsection



@section('footer')
	<script src="/js/file.js"></script>
@endsection