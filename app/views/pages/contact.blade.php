
@extends('layouts.master')
<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWh9yr62zlKZtn_mCsHvqpU_ysFmK1HJQ">
</script>

@section('content')
  <section class="contact">
    <div class="contact__title big-title">
      <h2>Contact</h2>
    </div>
    <section class="contact--wrapper">
      <h3 class="contact__subtitle">Resto-Rallye </br>Addresse, rue, 4000 Liège</h3>
    </section>
  </section>
  <div id="map-canvas"></div>
  <section class="contact--wrapper">
    @include('forms.contact')
  </section>
@stop

<script>
function initialize() {
  var Latlng = new google.maps.LatLng(50.632557, 5.579666);
  var mapOptions = {
    zoom: 14,
    center: Latlng,
    scrollwheel: false,
    panControl: false,
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.LARGE,
      position: google.maps.ControlPosition.LEFT_CENTER
    },
    mapTypeControl: false,
    scaleControl: true,
    streetViewControl: false,
    overviewMapControl: false,
    styles: [{"featureType":"administrative","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"color":"#84afa3"},{"lightness":52}]},{"stylers":[{"saturation":-77}]},{"featureType":"road"}]
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
  var image = 'img/map-marker.png';
  var marker = new google.maps.Marker({
    position: Latlng,
    title:"Resto-Rallye",
    icon: image
  });
  marker.setMap(map);
}

window.onload = initialize;
</script>
