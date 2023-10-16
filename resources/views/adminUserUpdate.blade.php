@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Update User Here...
            </h1>
            <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Update User Here...</h5>
                  </div>
                  <div class="card-body">
                    <form action="{{route('updateUser',$user->id)}}" method="POST">
                        @csrf
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="{{$user->name}}" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input type="text" name="email" class="form-control" value="{{$user->email}}" placeholder="{{$user->email}}"/>
                            <span class="input-group-text" id="basic-default-email2">@example.com</span>
                          </div>
                          <div class="form-text"> You can use letters, numbers & periods </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">User Role</label>
                        <div class="col-sm-10">
                            <select name="role" class="select2 form-select form-select-lg form-control" data-allow-clear="true">
                                <option value="admin">Admin</option>
                                <option value="Blood Donor">Blood Donor</option>
                                <option value="Blood Needer">Blood Needer</option>
                              </select>
                        </div>
                      </div>
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
