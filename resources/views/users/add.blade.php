@extends('layouts.master')
@section('content')
    <div class="container">
        @include('core.navbar')
        <div class="cod-12 col-md-12">
            <form action="{{route('user.store')}}" method="post">
                <h2>Add New User</h2>

                @csrf
                <div class="mb-3">
                    <label >Name</label>
                    <input type="text" name="name" class="form-control" >
{{--                    @error('name')--}}
{{--                    <p>{{ $message }}</p>--}}
{{--                    @enderror--}}
                </div>
                <div class="mb-3">
                    <label >Email</label>
                    <input type="text" name="email" class="form-control" >
{{--                    @error('email')--}}
{{--                    <p>{{ $message }}</p>--}}
{{--                    @enderror--}}
                </div>
                <div class="mb-3">
                    <label >Password</label>
                    <input type="password" name="password" class="form-control">
{{--                    @error('password')--}}
{{--                    <p>{{ $message }}</p>--}}
{{--                    @enderror--}}
                </div>
                <div class="mb-3">
                    @foreach($roles as $role)
                        <div class="checkbox-danger">
                            <label><input type="checkbox" name="roles[{{$role->id}}]" value="{{$role->id}}">{{$role->name}}</label>
                        </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-info" href="{{route('user.index')}}">Cancel</a>
            </form>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
    </html>
@endsection
