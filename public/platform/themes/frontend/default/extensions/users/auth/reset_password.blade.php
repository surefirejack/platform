@layout('templates.blank')

<!-- Page Title -->
@section('title')
	Platform Reset Password
@endsection

<!-- Styles -->
@section('styles')
	@parent
	{{ Theme::asset('auth', 'users::css/auth-forms.less') }}
@endsection

<!-- Scripts -->
@section ('scripts')
	@parent
	{{ Theme::asset('login', 'users::js/login.js', 'jquery') }}
@endsection

<!-- Page Content -->
@section('content')

<div>
	@widget('platform.users::form.reset')
</div>

@endsection
