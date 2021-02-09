@extends('layouts.master')
@section('content')
    <div class="cod-12 col-md-12">

        <h3>Edit new user</h3>
        <form action="{{ route('edit.store', $user->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" value="{{ $user->name }}" name="name" class="form-control @error('name') is-invalid @enderror" >
{{--                @error('name')--}}
{{--                <p class="text-danger">{{ $message }}</p>--}}
{{--                @enderror--}}
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" value="{{ $user->email }}" name="email" class="form-control @error('email') is-invalid @enderror" >
{{--                @error('email')--}}
{{--                <p class="text-danger">{{ $message }}</p>--}}
{{--                @enderror--}}
            </div>

            <div class="mb-3 form-group">
                <button type="submit" class="btn btn-success">Submit</button>
                <a class="btn btn-info" href="{{ route('user.index') }}">Cancel</a>
            </div>
        </form>
    </div>
@endsection
