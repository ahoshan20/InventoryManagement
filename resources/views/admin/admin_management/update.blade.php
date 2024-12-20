@extends('admin.layouts.master', ['page_slug' => "admin"])

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4 class="card-title">{{__('Create Admin')}}</h4>
				<a href="{{route('admin.index')}}" class="btn btm-sm btn-primary">{{__('Back')}}</a>
			</div>
			<div class="card-body">
				<form action="{{route('admin.store')}}" method="POST">
					@csrf
					<div class="form-group mb-3">
						<label for="name">{{__('Name')}}</label>
						<input type="text" name="name" placeholder="Enter Your Name" class="form-control">
						@error('name'):
						<span class="text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group mb-3">
						<label for="email">{{__('Email')}}</label>
						<input type="email" name="email" placeholder="Enter Your Email" class="form-control">
						@error('email'):
						<span class="text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group mb-3">
						<label for="password">{{__('Password')}}</label>
						<input type="password" name="password" placeholder="Enter Your Password" class="form-control">
						@error('password'):
						<span class="text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group mb-3">
						<label for="cf_password">{{__('Confirm Password')}}</label>
						<input type="password" name="cf_password" placeholder="Enter Your Confirm Password" class="form-control">
					</div>
					<div class="form-group mb-3">
						<input type="submit" name="submit" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection