@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel-default">
			<div class="panel-heading">
				Create Article
			</div>

			<div class="panel panel-body">
			<form action="/articles" method="POST">
			{{ csrf_field()}}

			<div class="form-group">
			<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
				<label for="content">Content</label>

				<textarea class="form-control" name="content"></textarea>
			</div>

			<div class="checkbox">
				<label>
				<input type="checkbox" name="live">live
				</label>
			</div>

			<div class="form-group">
				<label for="post_on">Post On</label>

				<input type="datetime-local" name="post_on" class="form-control">
			</div>
				<input type="submit" class="btn btn-success pull-right">
			</form>
			
			</div>
		</div>
	</div>
</div>
@endsection