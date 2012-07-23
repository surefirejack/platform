@layout('templates.blank')

<!-- Page Title -->
@section('title')
	Platform Register
@endsection

<!-- Styles -->
@section('styles')
	@parent
	{{ Theme::queue_asset('auth', 'users::css/auth-forms.less', 'style') }}
@endsection

<!-- Scripts -->
@section ('scripts')
	@parent
	{{ Theme::queue_asset('register', 'users::js/register.js', 'jquery') }}
@endsection

<!-- Page Content -->
@section('content')

<div>
	@widget('platform.users::form.register')
</div>

@endsection
