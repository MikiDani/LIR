@extends('backend_default')

@section('page_js')
    <script type="module" src="/js/backend.js"></script>
@endsection

@section('content')
    
    @include('backend.admin_menu')
    
    <div class="row p-0 m-0 w-100">
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

                <div class="text-center p-0 m-0 my-3">
                    <a href="{{ route('admin_news_new') }}" class="text-uppercase text fw-bold">Új hír hozzáadása</a>
                </div>
                
                @foreach($news as $new)
                    <div class="d-flex flex-column justify-content-center align-items-center bg-gray rounded mb-3 p-2">
                            
                        
                        <h3>{{ $new->title }}</h3>
                        <div class="w-100 bg-info p-2 m-0">
                            <img src="{{ Storage::disk('newspic')->url($new->pictname) }}" alt="{{ $new->title }}" class="w-100">
                        </div>
                        <p class="text-start">{{ $new->text }}</p>
                        <h6>{{ $new->link }}</h6>

                        <div class="d-flex flex-row justify-content-between align-items-center w-100">
                            <a href="{{ route('admin_news_modify',['id' => $new->id]) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                            <a href="{{ route('admin_news_delete',['id' => $new->id]) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </div>
                    </div>
                @endforeach

                {{-- PAGINATE --}}
                {{ $news->links('vendor.pagination.paginate') }}
            </div>
        </div>
    </div>
@endsection