@section('alert-messages')

@if($errors->any())
@include('components.alert-section')
@yield('alert')
    @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
                {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    @endforeach
@endif

@if ($message = Session::get('success'))
@include('components.alert-section')
@yield('alert')
            <div class="alert alert-success alert-block" role="alert" id="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ $message }}
            </div>
@endif

@if ($message = Session::get('error'))
@include('components.alert-section')
@yield('alert')
            <div class="alert alert-danger alert-block"role="alert" id="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ $message }}
            </div>
@endif

@endsection

@hasSection ('alert')
        <script type="text/javascript">
            redirect('#alert');
        </script>
@endif
