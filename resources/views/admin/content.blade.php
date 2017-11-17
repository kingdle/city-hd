@extends('admin::index')

@section('content')
    <section class="content-header">
        @if($description == "详情")
            @include('admin::charts.dateline-header')
        @elseif($description == "月度详情")
            @include('admin::charts.dateline-quarter')
        @else
            <div class="col-md-11">
            <h3>
                {{ $header or trans('admin.title') }}
                <small>{{ $description or trans('admin.description') }}</small>
            </h3>
            </div>
            <div class="col-md-1 hidden-xs">
                <button class="button button-box"><i class="fa fa-reply"></i></button>
            </div>

            <script>
                $("button").click(function(){
                    history.go(-1)
                })
            </script>
        @endif

    </section>

    <section class="content">

        @include('admin::partials.error')
        @include('admin::partials.success')
        @include('admin::partials.exception')
        @include('admin::partials.toastr')

        {!! $content !!}

    </section>
@endsection