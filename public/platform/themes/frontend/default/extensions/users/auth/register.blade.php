@layout('templates.blank')

<!-- Page Title -->
@section('title')
	Platform Register
@endsection

<!-- Styles -->
@section('styles')
	@parent
	{{ Theme::asset('auth', 'users::css/auth-forms.less') }}
@endsection

<!-- Scripts -->
@section ('scripts')
	@parent
	{{ Theme::asset('register', 'users::js/register.js', 'jquery') }}
@endsection

<!-- Page Content -->
@section('content')

<div>
	@widget('platform.users::form.register')
</div>

@endsection
