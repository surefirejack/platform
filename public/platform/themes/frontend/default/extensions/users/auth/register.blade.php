@layout('templates.blank')

<!-- Page Title -->
@section('title')
	Platform Register
@endsection

<!-- Queue Styles -->
{{ Theme::queue_asset('auth', 'users::css/auth-forms.less', 'style') }}

<!-- Styles -->
@section ('styles')
@endsection

<!-- Queue Scripts -->
{{ Theme::queue_asset('register', 'users::js/register.js', 'jquery') }}

<!-- Scripts -->
@section('scripts')
@endsection

<!-- Page Content -->
@section('content')

<div>
	@widget('platform.users::form.register')
</div>

@endsection
