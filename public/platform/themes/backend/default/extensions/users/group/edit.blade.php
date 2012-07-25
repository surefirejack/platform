@layout('templates.default')

<!-- Page Title -->
@section('title')
	{{ Lang::line('users::groups.update.title') }}
@endsection

<!-- Queue Styles | e.g Theme::queue_asset('name', 'path_to_css', 'dependency')-->

<!-- Styles -->
@section ('styles')
@endsection

<!-- Queue Scripts -->
{{ Theme::queue_asset('bootstrap-tab','js/bootstrap/tab.js', 'jquery') }}

<!-- Scripts -->
@section('scripts')
@endsection

<!-- Page Content -->
@section('content')
<section id="groups">

	<header class="head row">
		<div class="span4">
			<h1>{{ Lang::line('users::groups.update.title') }}</h1>
			<p>{{ Lang::line('users::groups.update.description') }}</p>
		</div>
	</header>

	<hr>

	<div class="tabbable">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#general" data-toggle="tab">General</a></li>
			<li><a href="#permissions" data-toggle="tab">Permissions</a></li>
		</ul>
		<div class="tab-content">
		    <div class="tab-pane active" id="general">
		    	@widget('platform.users::admin.group.form.edit', $id)
		    </div>
		    <div class="tab-pane" id="permissions">
		    	@widget('platform.users::admin.group.form.permissions', $id)
		    </div>
	  	</div>
	</div>

</section>
@endsection
