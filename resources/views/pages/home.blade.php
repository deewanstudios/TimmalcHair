@extends('layouts.master-layout')

@section('slider')
{{-- @include('includes.slider') --}}
@endsection

@section('content')
<div class="jumbotron ">
    <h1 class="display-1">
        {{ $page
}} </h1>
</div>
{{-- @include('includes.featured-category-call-to-action') --}}
{{-- @include('includes.featured-products-call-to-action') --}}
@endsection