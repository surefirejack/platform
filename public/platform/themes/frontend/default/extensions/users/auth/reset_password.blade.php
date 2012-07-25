@layout('templates.blank')

<!-- Page Title -->
@section('title')
	Platform Reset Password
@endsection

<!-- Queue Styles -->
{{ Theme::queue_asset('auth', 'users::css/form.less', 'style') }}

<!-- Styles -->
@section ('styles')
@endsection

<!-- Queue Scripts -->
{{ Theme::queue_asset('login', 'users::js/login.js', 'jquery') }}

<!-- Scripts -->
@section('scripts')
@endsection

<!-- Page Content -->
@section('content')

<section id="reset">
	@widget('platform.users::form.reset')
</section>

@endsection
