@extends('layouts.master-layout')
@section('content')
{{-- <div class="jumbotron ">
    <h1 class="display-1">
        {{ $page
        }}
</h1>
</div>
--}}
{{-- {{ $page
}} --}}
@include('includes.single-product-partial')
{{-- @dump($product) --}}
@endsection