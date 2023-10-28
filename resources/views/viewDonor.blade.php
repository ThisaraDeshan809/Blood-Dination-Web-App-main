@extends('layouts.needer')

@section('content')

<div class="container p-3">
    <div class="row">
        <div class="col-12">
            <h1>Donor Details</h1>
            <div class="card p-3">
                <div class="row">
                    <div class="col-6">
                        <h4 class="" for="DonorName">Donor Name</h4>
                        <h6 class="">{{$donor->donername}}</h6>
                    </div>
                    <div class="col-6">
                        <h4 class="" for="DonorName">Donor Address</h4>
                        <h6 class="">{{$donor->doneraddress}}</h6>
                    </div>
                    <div class="col-6">
                        <h4 class="mt-4" for="DonorName">Donor Blood type</h4>
                        <h6 class="">{{$donor->donerbloodtype}}</h6>
                    </div>
                    <div class="col-6">
                        <h4 class="mt-4" for="DonorName">Donor Contact Number</h4>
                        <h6 class="">{{$donor->contactnumber}}</h6>
                    </div>
                    <div class="col-6">
                        <h4 class="mt-4" for="DonorName">Donor Age</h4>
                        <h6 class="">{{$donor->donerage}}</h6>
                    </div>
                    <div class="col-6">
                        <h4 class="mt-4" for="DonorName">Donor Ratings</h4>
                        <h6 class="">⭐ {{ number_format($ratingAvg,2) }}</h6>
                    </div>
                    <a class="btn btn-primary p-2" href="{{route('sendmessage',$donor->userid)}}">Send Message To {{$donor->donername}}</a>
                    <div class="col-12 mt-3">
                        <h1 style="color: #000000; text-shadow: 4px 4px 10px #000000; ">{{$donor->donername}}'s Location On Map</h1>
                        <button class="getCoordinates btn btn-success mb-2 col-12" data-location="{{ $donor->doneraddress }}">Show {{$donor->donername}}'s Location</button>
                        <div class="mb-4 mt-3" id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFVRMT8k_OWiqAHdWe42RdmojP6GsMv7U&libraries=places"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
  const getCoordinatesButtons = document.querySelectorAll(".getCoordinates");

  getCoordinatesButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const location = button.getAttribute("data-location");
      // Create a Geocoder object
      const geocoder = new google.maps.Geocoder();

      geocoder.geocode({ address: location }, function (results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
          const latitude = results[0].geometry.location.lat();
          const longitude = results[0].geometry.location.lng();

          var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: latitude, lng: longitude, title: 'Your Location'},
                zoom: 14,
            });

            var marker = new google.maps.Marker({
        position: {lat: latitude, lng: longitude, title:location},
        map: map,
        icon: '{{asset('img/icons8-blood-donation-48.png')}}'
    });

          // Do something with the latitude and longitude, e.g., display it on the page
          console.log(`Location: ${location}, Latitude: ${latitude}, Longitude: ${longitude}`);
        } else {
          alert("Geocoding was not successful due to: " + status);
        }
      });
    });
  });
});
</script>

@endsection
