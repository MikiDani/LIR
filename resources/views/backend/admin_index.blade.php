@extends('backend_default')

@section('page_js')
	<script type="module" src="/js/backend.js"></script>
@endsection

@section('content')

@include('backend.admin_menu')

<div class="d-flex flex-column mx-auto col-12 col-sm-10 col-xl-8 flex-grow-1 p-3 m-3 bg-white rounded">
	@if(session('message'))
		<div class="p-3 bg-info">
			<h6>{{ session('message') }}</h6>
		</div>
	@endif

	<p class="p-3 m-0 text-center">{{ __('messages.adminindex.text01') }}</p>

</div>
@endsection