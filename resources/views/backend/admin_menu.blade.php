<nav class="navbar navbar-expand-md navbar-light bg-light w-100">
	<div class="container justify-content-center text-center">
		<a class="navbar-brand" href="{{ route('start') }}"><i class="bi bi-broadcast-pin"></i></a>
		<button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse backend-menu-text justify-content-center pt-3" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="{{ route('start') }}" target="_blank">{{ __('messages.adminmenu.textfrontend') }}</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin_index') }}">{{ __('messages.adminmenu.textindex') }}</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin_user') }}">{{ __('messages.adminmenu.textuseroptions') }}</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin_news') }}">Hírek</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin_logout')}}">{{ __('messages.adminmenu.textlogout') }}</a>
				</li>
				@if (Auth::check())
					<li class="ms-5">
						<span class="mx-3">{{ Auth::user()->name }}</span>
					</li>
				@endif
				<li>
					@include('backend._langselector')
				</li>
			</ul>
		</div>
	</div>
</nav>