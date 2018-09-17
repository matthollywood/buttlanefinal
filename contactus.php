<!doctype html>
<html lang="en">
<?php include 'head.php'?>
<?php include 'headtonavbar.php' ?>

  <div class ="row margin-md top-buffer">
  <div class="card col-lg-5 side-buffer" style="height: 100%;">
    <div class="dent-title">
      <h1>Contact us</h1>
    </div>
    <p>You can contact the practice by calling in, post or phone.</p>
      <dl>
        <div class=dent-title>
          <h2>Address:</h2>
        </div>
        <dd>Butt Lane Dental Practice</dd>
        <dd>136 Congleton Road</dd>
        <dd>Talke</dd>
        <dd>Stoke-On-Trent</dd>
        <dd>ST7 1LX</dd>
        <div class=dent-title>
          <h2>Telephone</h2>
        </div>
        <dd>01782 774396</dd>
      </dl>
      <!--The div element for the map -->
      <style>
   /* Set the size of the div element that contains the map */
  #map {
    height: 436px;  /* The height is 400 pixels */
    width: 100%;  /* The width is the width of the web page */
   }
</style>
      <div id="map"></div>
      <script>
  // Initialize and add the map
  function initMap() {
    // The location of Uluru
    var uluru = {lat: 53.086331, lng: -2.259066};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 15, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
  } </script>
  <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAopenwQhlB5-kQ3qE--bnUQyq3YNaGieM&callback=initMap">
      </script>
      <a href ="https://www.google.co.uk/maps/place/Butt+Lane+Dental+Surgery/@53.0863059,-2.2613241,17z/data=!3m1!4b1!4m5!3m4!1s0x487a5cea87fa317f:0xa1b3510332000628!8m2!3d53.0863027!4d-2.2591354?hl=en">Click here to view in a larger map</a>
    </div>
    <div class = "card col-lg-5 mobile-spacing" style="height: 100%">
<div class="dent-title">
    <h1>  Compliments</h1>
      </div>
We are always very happy to hear about something you think we have done really well.
      <div class="dent-title">
        <h1>Complaints</h1>
      </div>
    <p>We are very sorry if you are unhappy with the service you have received from us. Please click <a href="documents/complaints.pdf">HERE</a> if you would like to know more about our complaints process. We will try to sort it out for you as quickly as possible.</p>
    <br>
    <br>
    </div>
  </div>






<?php include 'bodytobottom.php' ?>
</html>
