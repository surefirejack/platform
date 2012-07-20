@layout('templates.default')

<!-- Page Title -->
@section('title')
	{{ Lang::line('menus::menus.title') }}
@endsection

<!-- Styles -->
@section('styles')
	@parent

	{{ Theme::asset('menus', 'menus::css/menus.less') }}
@endsection

<!-- Scripts -->
@section ('scripts')
	@parent
@endsection

<!-- Page Content -->
@section('content')
<section id ="menus">

	<header class="row">
			<div class="span4">
				<h1>{{ Lang::line('menus::menus.title') }}</h1>
				<p>{{ Lang::line('menus::menus.tagline') }}</p>
			</div>
			<nav class="actions span8 pull-right">
				{{ HTML::link_to_secure(ADMIN.'/menus/create', Lang::line('menus::menus.button.create'), array('class' => 'btn btn-large btn-primary')) }}
			</nav>
	</header>

	<hr>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Menu</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@forelse ($menus as $menu)
				<tr>
					<td>
						{{ $menu['name'] }}
					</td>
					<td>
						{{ HTML::link_to_secure(ADMIN.'/menus/edit/'.$menu['id'], 'Edit', array('class' => 'btn')) }}

						@if ($menu['user_editable'])
							{{ HTML::link_to_secure(ADMIN.'/menus/delete/'.$menu['id'], 'Delete', array('class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Are you sure you want to delete this menu? This cannot be undone.\');')) }}
						@endif
					</td>
				</tr>
			@empty
				<tr colspan="2">
					<td>
						No menus yet.
					</td>
				</tr>
			@endforelse
		</tbody>
	</table>

</section>
@endsection
