@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <a href="{{ route('news.create') }}" class="btn btn-primary">Add data</a>

                </div>
            </div>
        </div>
    </div>

@endsection
