@layout('templates.default')

<!-- Page Title -->
@section('title')
	{{ Lang::line('dashboard::dashboard.title') }}
@endsection

<!-- Styles -->
@section ('styles')
	@parent
@endsection

<!-- Scripts -->
@section ('scripts')
	@parent
@endsection

<!-- Page Content -->
@section ('content')
@endsection
