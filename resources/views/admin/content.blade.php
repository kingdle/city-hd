@extends('admin::index')

@section('content')
    <section class="content-header">
        @if($description!="详情")
            <h1>
                {{ $header or trans('admin.title') }}
                <small>{{ $description or trans('admin.description') }}</small>
            </h1>
        @else
            @include('admin::charts.dateline-header')

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