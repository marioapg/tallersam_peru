@if( $post->exists )

<form action="{{ route('update_post_path', ['post' => $post->id]) }}" method="POST">
{{ method_field('PUT') }}

@else
	<form action="{{ route('store_post_path') }}" method="POST">

@endif

		{{ csrf_field() }}
		<div class="form-group">
			<label for="title">	</label>
			<input type="text" name='title' class="form-control" value="{{ $post->tile or old('title') }}">
		</div>

		<div class="form-group">
			<label for="description">	</label>
			<textarea name="description" id="" cols="30" rows="5">{{ $post->description or old('description') }}</textarea>
		</div>

		<div class="form-group">
			<label for="url">	</label>
			<input name="url" id="" cols="30" rows="" value="{{ $post->url or old('url') }}"></input>
		</div>

		<div class="form-group">
		<button type="submit" class='btn btn-primary'> 
			Save Post
		</button>
	</div>
	</form>