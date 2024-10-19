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
                    <hr><h4 class="text-center">Hír módosítása</h4><hr>
                </div>

                @if(session('message'))
                    <div class="message text-center p-3">
                        <h6 class="p-0 m-0">{!! session('message') !!}</h6>
                        @php Session::forget('message'); @endphp
                    </div>
                @endif
                @if ($errors->any())
                    <div class="error">
                        <ul class="text-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="text-center">
                    <a href="{{route('admin_news')}}" class="text-uppercase text fw-bold">Vissza a hírekhez</a>
                </div>

                <form method="POST" id="news_modify_form" action="{{route('admin_news_modify', ['id' => $new->id])}}" enctype="multipart/form-data" autocomplete="off" novalidate>
                    @csrf
                    <div class="row p-0 m-0">
                        <label class="p-0 mt-3 mb-1">Dátum</label>
                        <input type="date" name="date" value="@isset($new->date){{$new->date}}@endisset" class="form-control d-inline-block">

                        <label class="p-0 mt-3 mb-1">Cím</label>
                        <input type="text" name="title" value="@isset($new->title){{$new->title}}@endisset" class="form-control d-inline-block">
                        
                        <label class="p-0 mt-3 mb-1">Link</label>
                        <input type="text" name="link" value="@isset($new->title){{$new->link}}@endisset" class="form-control">
                        
                        <label class="p-0 mt-3 mb-1">Szöveg</label>
                        <textarea name="text" cols="30" rows="4" class="form-control mb-3 w-100">@isset($new->text){{$new->text}}@endisset</textarea>

                        @if ($new->pictname != null && Storage::disk('newspic')->fileExists($new->pictname))
                            <div class="col-12 col-sm-4 bg-white p-1 m-0 me-2 rounded">
                                <img src="{{ Storage::disk('newspic')->url($new->pictname) }}" alt="{{ $new->title }}" class="w-100 rouned">
                            </div>
                            <a href="{{ route('admin_news_img_delete', ['id' => $new->id]) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        @else
                            <input type="file" name="image" class="form-control mb-3">
                        @endif

                        <button class="btn btn-primary">Módosítás</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection