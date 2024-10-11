@extends('backend_default')

@section('page_js')
	<script type="module" src="/js/backend.js"></script>
@endsection

@section('content')
	
	@include('backend.admin_menu')
	
	<div class="row p-0 m-0">
		<div class="d-flex justify-content-center align-items-top">
			<div class="login-box col-12 col-sm-10 col-xl-8 p-3 my-3 bg-light rounded">
				<div class="login-box-head">
					<hr><h4 class="text-center">Hírek listája</h4><hr>
				</div>
                @if(session('message'))
				    <div class="message text-center p-3">
						<h6 class="p-0 m-0">{!! session('message') !!}</h6>
						@php Session::forget('message'); @endphp
                    </div>
				@endif
                <div class="text-center">
                    <a href="#" class="text-uppercase text fw-bold">Új hír hozzáadása</a>
                </div>
                {{-- @dump($news) --}}
                @foreach($news as $new)
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h3>{{ $new->title }}</h3>
                        <div class="w-100 bg-info p-2 m-0">{{ $new->pictname }}</div>
                        <p class="text-start">{{ $new->text }}</p>
                        <h6>{{ $new->link }}</h6>
                    </div>
                    <hr>
                @endforeach

				<form method="POST" id="profile-form" action="{{route('admin_modify_post')}}" autocomplete="off" novalidate>
					@csrf
					qwe
				</form>
			</div>
		</div>
	</div>
@endsection