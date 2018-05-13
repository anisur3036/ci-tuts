@extends('app')


@section('content')
	<h1 style="text-align: center;"><span class="glyphicon glyphicon-user"></span>  Welcome to CodeIgniter!</span></h1>

	<div class="col col-md-4 col-md-offset-4">
		<a href="user_guide/">User Guide</a>
		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

		@foreach($subjects as $subject)
			<li>{{ $subject->name }}</li>
		@endforeach

		{{ base_url() . 'public/css/' }}
	</div>
@endsection