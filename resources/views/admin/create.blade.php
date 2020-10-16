@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="{{ route('news.store') }}" method="post">
                        @csrf
                        <input type="text" name="title" id="" placeholder="title" style="width:100%">
                        <textarea name="value"  style="width:100%"></textarea>
                        <button type="submit">Create</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
