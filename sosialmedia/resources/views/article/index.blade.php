@extends('layouts.app')

@section('content')
<div class="row">
	@forelse ($article as $articles)

	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<span>
				haha
				</span>
				<span class="pull-right">
				{{ $articles->created_at->diffForHumans()}}
				</span>
			</div>

			<div class="panel-body">
				{{ $articles->ShortContent }}
				<a href="/articles/{{ $articles->id}}">Read More</a>
			</div>

			<div class="panel-footer clearfix" style="background-color: white">
				@if ($articles->user_id == Auth::id())
				<form action="/articles/{{ $articles->id }}" method="POST" class="pull-right">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				 <button class="btn btn-danger btn-sm ">Delete</button>				
				@endif
				</form>
				<i class="fa fa-heart pull-right clear-fix"></i>
			</div>
		</div>
	</div>

	@empty
	No Article

	@endforelse
</div>

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{{ $article->links() }}
	</div>
</div>
@endsection