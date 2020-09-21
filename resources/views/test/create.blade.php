@extends('layout.backend.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! form($form) !!}
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    {{--    Using Textarea    --}}
    <script src="{{ asset('themes/skote/assets/libs/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('themes/skote/assets/js/pages/form-editor.init.js') }}"></script>
    {{--    END Using Textarea    --}}

    <script src="{{ asset('themes/skote/assets/libs/select2/js/select2.min.js') }}"></script>

@endsection



@section('styles')
    {{--    Using Textarea    --}}
    <link href="{{ asset('themes/skote/assets/libs/summernote/summernote-bs4.min.css') }}" rel="stylesheet" type="text/css">
    {{--    END Using Textarea    --}}

{{--  Using select 2  --}}
{{--  END Using select 2  --}}
@endsection
