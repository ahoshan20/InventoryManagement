@extends('admin.layouts.master', ['page_slug' => "admin"])

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<form action="{{route('post.store')}}" method="POST">
					@csrf
					<div class="form-group mb-3">
						<label for="title">{{__('Title')}}</label>
						<input type="text" name="title" value="{{old('title')}}"  placeholder="Enter Your Title" class="form-control">
						@error('title'):
						<span class="text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group mb-3">
						<label for="description">{{__('Description')}}</label>
						<input type="text" name="description" value="{{old('description')}}"  placeholder="Enter Your description" class="form-control">
						@error('description'):
						<span class="text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group mb-3">
						<input type="submit" name="submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection