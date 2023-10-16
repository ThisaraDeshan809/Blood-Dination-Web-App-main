@extends('layouts.my')

@section('content')

<div class="container" style="border-radius: 30px;">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4" >
            <a style="width: 100%;" href="{{route('dashboard')}}" class="btn btn11">Add New Doner Post</a>
        </div>
        <div class="col-4">

        </div>
    </div>
</div>

<div class="container" style="border-radius: 30px; width:auto;">
    <div class="row">
        @foreach ($posts as $post)
                    <div class="card m-3"  style="width: 17.7rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$post->donerposttitle}}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">{{$post->donerbloodtype}}</h6>
                          <p class="card-text">{{$post->donerpostdescription}}</p>
                          <h6 class="card-subtitle mb-2">{{$post->donername}}</h6>
                          <h6 class="card-subtitle mb-2 text-muted">{{$post->doneraddress}}</h6>
                        </div>
                    </div>
                    @endforeach
    </div>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANnMyu3xUZrGeN_RAQFTqApGqdQ0RrRpE&callback=myMap"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


@endsection
