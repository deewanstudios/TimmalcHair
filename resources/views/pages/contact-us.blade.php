@extends('layouts.master-layout')
@section('content')
<div class="jumbotron ">

    <h1 class="display-1">
        welcome to the contact us page
    </h1>
</div>
<section class="section-98 section-md-110 text-lg-left">
    <div class="shell">
        <div class="range range-xs-center range-xs-center">
            @include('includes.business-info-section')
            @include('includes.contact-form-section')
        </div>
    </div>
</section>
@include('includes.google-maps-section')
@endsection