@layout('templates.blank')

<!-- Page Title -->
@section('title')
	Platform Reset Password
@endsection

<!-- Styles -->
@section('styles')
	@parent
	{{ Theme::queue_asset('auth', 'users::css/auth-forms.less', 'style') }}
@endsection

<!-- Scripts -->
@section ('scripts')
	@parent
	{{ Theme::queue_asset('login', 'users::js/login.js', 'jquery') }}
@endsection

<!-- Page Content -->
@section('content')

<div>
	@widget('platform.users::form.reset')
</div>

@endsection
