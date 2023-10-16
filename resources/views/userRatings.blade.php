@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Donor Ratings</h3>
            <div class="col-md-12 mb-3 p-3" style="border:solid 2px; border-radius: 20px; background-color:rgb(33,37,41); ">
                <table class="table table-dark table-hover mb-3 p-3" >
                    <thead>
                      <tr>
                        <th scope="col">Donor Id</th>
                        <th scope="col">Donor Rating</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($rates as $rate)
                      <tr>
                        <td>{{$rate->id}}</td>
                        <td>{{$rate->rating}}</td>
                        <td>
                            <form action="{{route('updateDonorRate',$rate->id)}}" method="POST">
                                @csrf
                                <label for="user  rate">Donor Current Rate</label>
                                <input type="text" name="rate" class="form-control" value="{{$rate->rating}}" placeholder="{{$rate->rating}}"><br>
                                <label for="user  rate">Add donor review By Admin</label>
                                <input type="text" name="reviewComment" class="form-control" value="{{$rate->review}}" placeholder="{{$rate->review}}"><br>
                                <button type="submit" class="btn btn-success btn-sm mb-2">Set Rate</button>
                            </form>
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
