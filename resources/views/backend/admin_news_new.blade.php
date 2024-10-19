@extends('backend_default')

@section('page_js')
	<script type="module" src="/js/backend.js"></script>
@endsection

@section('content')
	
	@include('backend.admin_menu')
	
	<div class="row p-0 m-0 w-100">
		<div class="d-flex justify-content-center align-items-top">
			<div class="login-box col-12 col-sm-10 col-xl-8 p-3 my-3 bg-gray rounded">
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
                    <a href="{{route('admin_news')}}" class="text-uppercase text fw-bold">Vissza a hírekhez</a>
                </div>
               

				<form method="POST" id="news_new_form" action="{{route('admin_news_new')}}" enctype="multipart/form-data" autocomplete="off" novalidate>
					@csrf
					<div class="row p-0 m-0">						
						<label class="p-0 mt-3 mb-1">Cím</label>
						<input type="text" name="title" class="form-control d-inline-block">
						
						<label class="p-0 mt-3 mb-1">Link</label>
						<input type="text" name="link" class="form-control">
						
						<label class="p-0 mt-3 mb-1">Szöveg</label>
						<textarea name="text" cols="30" rows="4" class="form-control mb-3 w-100"></textarea>

						<input type="file" name="image" class="form-control mb-3">
	
						@if ($errors->any())
							<div class="error">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

						<button class="btn btn-primary">Hozzáadás</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection