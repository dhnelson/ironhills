@extends('layouts.layout')

@section('title', 'Gym')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1>The Gym</h1>
        <div class="col-sm-6">
            <h3><b>Yada Yada Yada</b></h3>
            <p>
              "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </p>
        </div>
        <div class="col-sm-6">
            <h3><b>Iron Hills Training Location:</b></h3>
                <div id="map"></div>
                    <script>
                        function initMap() {
                          var mapDiv = document.getElementById('map');
                          var map = new google.maps.Map(mapDiv, {
                              center: {lat: 40.825753, lng: -74.391679},
                              zoom: 17
                          });

                          var marker = new google.maps.Marker({
                            position: {lat: 40.825753, lng: -74.391679},
                            map: map,
                            title: 'Whippany Athletic Club & Iron Hills Training'
                          });

                        }
                    </script>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA35THhEhZgNS84CRzZu5qOgPN9iGqKjGQ&callback=initMap">
                    </script>

        </div>
</div>

@stop
