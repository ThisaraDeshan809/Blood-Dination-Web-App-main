@extends('layouts.admin')

@section('content')
<h1 style="text-align: center;">Users</h1>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>System Admins</h3>
            <div class="col-md-12 mb-3 p-3" style="border:solid 2px; border-radius: 20px; background-color:rgb(33,37,41); ">
                <table class="table table-dark table-hover mb-3 p-3" >
                    <thead>
                      <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User role</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($admins as $admin)
                      <tr>
                        <td>{{$admin->id}}</td>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->role}}</td>
                        <td>
                            <a href="{{route('updateUser.admin',$admin->id)}}" type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#bd-example-modal-lg">Update</a>
                            <a href="{{route('delete',$admin->id)}}" type="button" class="btn btn-danger btn-sm mb-2" data-toggle="modal" data-target="#bd-example-modal-lg">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
        </div>

        <div class="col-6 mt-5">
            <h3>Blood Donors</h3>
            <div class="col-md-12 mb-3 p-3" style="border:solid 2px; border-radius: 20px; background-color:rgb(33,37,41); ">
                <table class="table table-dark table-hover mb-3 p-3" >
                    <thead>
                      <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User role</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($donors as $donor)
                      <tr>
                        <td>{{$donor->id}}</td>
                        <td>{{$donor->name}}</td>
                        <td>{{$donor->role}}</td>
                        <td>
                            <a href="{{route('updateUser.admin',$donor->id)}}" type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#bd-example-modal-lg">Update</a>
                            <a href="{{route('delete',$donor->id)}}" type="button" class="btn btn-danger btn-sm mb-2" data-toggle="modal" data-target="#bd-example-modal-lg">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
        </div>

        <div class="col-6 mt-5">
            <h3>Blood needers</h3>
            <div class="col-md-12 mb-3 p-3" style="border:solid 2px; border-radius: 20px; background-color:rgb(33,37,41); ">
                <table class="table table-dark table-hover mb-3 p-3" >
                    <thead>
                      <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User role</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($needers as $needer)
                      <tr>
                        <td>{{$needer->id}}</td>
                        <td>{{$needer->name}}</td>
                        <td>{{$needer->role}}</td>
                        <td>
                            <a href="{{route('updateUser.admin',$needer->id)}}" type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#bd-example-modal-lg">Update</a>
                            <a href="{{route('delete',$needer->id)}}" type="button" class="btn btn-danger btn-sm mb-2" data-toggle="modal" data-target="#bd-example-modal-lg">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
        </div>
    </div>
</div>



@endsection
