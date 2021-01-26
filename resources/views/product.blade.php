@extends('layouts.app')

@section('content')

    <div class="container mt-5 text-center">
        <h2>Laravel Paypal</h2>

        <a href="{{ route('make.payment') }}" class="btn btn-primary mt-3">Pay &#8369;224 via Paypal</a>
    </div>

@endsection