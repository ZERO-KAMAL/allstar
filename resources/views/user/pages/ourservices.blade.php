@extends('master')
@section('content')

    <div class="page-title-area item-bg1">
        <div class="container">
            <div class="page-title-content">
                <h2>Our Services</h2>
                <ul>
                    <li><a href="/">Home</a><i class="fas fa-chevron-right"></i></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>

    @include('user.service')
@endsection
