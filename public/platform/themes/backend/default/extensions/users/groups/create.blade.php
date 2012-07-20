@layout('templates.default')

<!-- Page Title -->
@section('title')
	{{ Lang::line('users::groups.title_create') }}
@endsection

<!-- Styles -->
@section('styles')
	@parent
@endsection

<!-- Scripts -->
@section ('scripts')
	@parent
@endsection

<!-- Page Content -->
@section('content')
<div>
	@widget('platform.users::groups.form.create')
</div>
@endsection
