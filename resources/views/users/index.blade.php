@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('user.create')}}" class="btn btn-success">ADD</a>
                        <form action="" class="card-tools">

                            <div  class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text"  class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key => $user)
                                <tr>
                                    <th scope="row">{{$key + 1}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @foreach($user->roles as $role)
                                            {{$role->name . ';'}}
                                        @endforeach
                                    </td>
                                    <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{route('delete.store', $user->id)}}"
                                           class="btn btn-danger">Delete</a>
                                        <a href="{{route('update.store', $user->id)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
