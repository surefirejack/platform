@layout('templates.default')

<!-- Page Title -->
@section('title')
	{{ Lang::line('users::groups.title_create') }}
@endsection

<!-- Queue Styles | e.g Theme::queue_asset('name', 'path_to_css', 'dependency')-->

<!-- Styles -->
@section ('styles')
@endsection

<!-- Queue Scripts | e.g. Theme::queue_asset('name', 'path_to_js', 'dependency')-->

<!-- Scripts -->
@section('scripts')
@endsection

<!-- Page Content -->
@section('content')
<div>
	@widget('platform.users::groups.form.create')
</div>
@endsection
