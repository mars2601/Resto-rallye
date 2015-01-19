@if($way == 'y')
  {{Form::model($eventuser, array('route' => 'confirm', 'class' => 'reserve reserve-first-step'))}}
@else
  {{ Form::open(['route'=>'confirm' , 'class' => 'reserve reserve-first-step']) }}
@endif

<div class="reserve-first-step__check-i" id="gift-check">
  {{Form::label('gift', 'Ceci est un cadeau: ')}}
    {{Form::checkbox('gift')}}
</div>
<fieldset class="reserve-first-step__contact-person">
  <div class="contact-person">
    <legend class="reserve-first-step__contact-legend">Désigner une personne de contact ou la personne bénéficiaire du cadeau</legend>
  </div>
  <div class="contact-person">
    <legend class="reserve-first-step__other-person-legend">Veuillez à remplir les champs suivants.</legend>
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-office'></span>
    {{Form::label('entreprise', '*Société: ')}}
      {{Form::text('entreprise' )}}
      {{$errors->first('entreprise', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-user'></span>
    {{Form::label('contactFirstName', '*Nom: ')}}
      {{Form::text('contactFirstName' )}}
      {{$errors->first('contactFirstName', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-mouse'></span>
    {{Form::label('contactLastName', '*Prénom: ')}}
      {{Form::text('contactLastName' )}}
      {{$errors->first('contactLastName', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-mail'></span>
    {{Form::label('email', '*Email: ')}}
    {{Form::text('email' )}}
    {{$errors->first('email', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-directions'></span>
    {{Form::label('street', '*Rue: ')}}
      {{Form::text('street' )}}
      {{$errors->first('street', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-compass'></span>
    {{Form::label('streetNumber', '*Numéro de maison: ')}}
      {{Form::text('streetNumber' )}}
      {{$errors->first('streetNumber', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-pin'></span>
    {{Form::label('town', '*Ville: ')}}
      {{Form::text('town' )}}
      {{$errors->first('town', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-phone'></span>
    {{Form::label('telephone', '*Numéro de téléphone: ')}}
      {{Form::text('telephone' )}}
      {{$errors->first('telephone', '<span class="error">:message</span>')}}
  </div>
</fieldset>

<div class="reserve-first-step__text-i placeReserved">
  {{Form::label('placeReserved', '*Nombre de personnes attendue: ')}}
    {{Form::number('placeReserved', '', ['min' => '0', 'max' => '10'])}}
    {{$errors->first('placeReserved', '<span class="error">:message</span>')}}
</div>


{{ Form::hidden('idRallye', $rallye->id) }}
{{ Form::hidden('way', $way) }}
<div>
  @if ($way == 'y')
    <!-- Modify reservation -->
    {{Form::submit('Modifier la réservation', ['name' => 'reserve'])}}
  @else
    <!-- New reservation -->
    {{Form::submit('Réserver le Rallye', ['name' => 'reserve'])}}
  @endif
</div>
{{ Form::close() }}

<script>
var giftCheck = 1;

$( '#gift' ).hide();
$('#gift-check').find("label").hide();
$('#gift-check').append("<button class=\"checkbutton\">Envoi de cadeau</button><button class=\"checkbutton\">Réservation personelle</button>");
$('.checkbutton')
  .attr("class", "checkbutton button")
  .css("margin-right", "0")
  .css("font-size", "0.9em")
  .css("width", "auto")
  .css("padding", "10px 30px")
  .css("outline", "none");


$("document").ready(function(){
  $('.checkbutton').on('click', function(){
    $('.checkbutton')
      .css("background", "#333333")
      .css("background", "-moz-linear-gradient(top,  #333333 0%, #000000 100%)")
      .css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(0%,#333333), color-stop(100%,#000000))")
      .css("background", "-webkit-linear-gradient(top,  #333333 0%,#000000 100%)")
      .css("background", "-o-linear-gradient(top,  #333333 0%,#000000 100%)")
      .css("background", "-ms-linear-gradient(top,  #333333 0%,#000000 100%)")
      .css("background", "linear-gradient(to bottom,  #333333 0%,#000000 100%)");
    $(this)
      .css("background", "#000000")
      .css("background", "-moz-linear-gradient(top,  #000000 0%, #333333 100%)")
      .css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(0%,#000000), color-stop(100%,#333333))")
      .css("background", "-webkit-linear-gradient(top,  #000000 0%,#333333 100%)")
      .css("background", "-o-linear-gradient(top,  #000000 0%,#333333 100%)")
      .css("background", "-ms-linear-gradient(top,  #000000 0%,#333333 100%)")
      .css("background", "linear-gradient(to bottom,  #000000 0%,#333333 100%)");
    return false;
  });


  if(giftCheck == 1){
    $(".reserve-first-step__contact-legend").text("Désigner la personne bénéficiaire du cadeau");
  }else{
    $(".reserve-first-step__contact-legend").text("Désigner une personne de contact");
  }

  $('#gift-check button:nth-child(3)').click(function(){
    giftCheck = 1;
  });
  $('#gift-check button:nth-child(4)').click(function(){
    giftCheck = 0;
  });

  $(".checkbutton").on( 'click', function(){
    $.ajax(
      $(".reserve")
        .prop('action')
    )
    .done(function(){
      if(giftCheck == 1){
        $(".reserve-first-step__contact-legend").text("Désigner la personne bénéficiaire du cadeau");
        $('#gift').prop('checked', true);
      }else{
        $(".reserve-first-step__contact-legend").text("Désigner une personne de contact");
        $('#gift').prop('checked', false);
      }
    });
  });
});
</script>
