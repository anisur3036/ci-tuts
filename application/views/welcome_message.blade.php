@extends('app')


@section('content')
	<h1 style="text-align: center;"><span class="glyphicon glyphicon-user"></span>  Welcome to CodeIgniter!</span></h1>

	<div class="col col-md-4 col-md-offset-4">

			<form action="" method="POST" role="form">

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email" value="{{ set_value('email') }}">
					<span class="help-block">{!! form_error('email') !!}</span>
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password">
					<span class="help-block">{!! form_error('password') !!}</span>
				</div>
				<div class="form-group">
					<label for="confpassword">Confirm Password</label>
					<input type="password" class="form-control" id="confpassword" name="confpassword">
					<span class="help-block">{!! form_error('confpassword') !!}</span>
				</div>



				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		<a href="user_guide/">User Guide</a>
		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

		@foreach($subjects as $subject)
			<li>{{ $subject->name }}</li>
		@endforeach

		{{ base_url() . 'public/css/' }}
	</div>
@endsection