@extends('admin::index')
@section('content')
<style>
    .content-wrapper {
        background: url('/uploads/login.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
.container {
    min-height: 600px;
}
</style>
<div class="container">
    <div class="row row-index-top">
        @include('admin.partials.menu-login')
    </div>
</div>
@endsection