@layout('templates.default')

<!-- Page Title -->
@section('title')
	{{ Lang::line('settings::settings.title') }}
@endsection

<!-- Queue Styles -->
@section ('styles')
@endsection

<!-- Queue Scripts -->
@section ('scripts')
	{{ Theme::queue_asset('bootstrap-tab', 'js/bootstrap/bootstrap-tab.js', 'jquery') }}
@endsection

<!-- Page Content -->
@section('content')
<section id="settings">

	<header class="row">
			<div class="span4">
				<h1>{{ Lang::line('settings::settings.title') }}</h1>
				<p>{{ Lang::line('settings::settings.description') }}</p>
			</div>
			<nav class="actions span8 pull-right">
			</nav>
	</header>

	<hr>

	<div class="tabbable">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#general" data-toggle="tab">General</a></li>
			<li><a href="#extra" data-toggle="tab">Extra</a></li>
		</ul>
		<div class="tab-content">
		    <div class="tab-pane active" id="general">
		    	@widget('platform.settings::settings.general')
		    </div>
		    <div class="tab-pane" id="extra">
		    	Add extra settings here
		    </div>
	  	</div>
	</div>

</section>

@endsection
