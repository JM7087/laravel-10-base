{{-- @extends('layouts.app') --}}

@section('title', 'Teste Vue')

@section('content')
    <div id="app">
        <teste-vue-componente :teste_props="{{ json_encode($teste) }}"></teste-vue-componente>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endpush
