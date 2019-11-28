<?php include("header.php"); ?>
<br>

<center><span style="color:yellow;font-size:30px;"> &#10084;JS Library &#x2764;
</span></center>
<br>


<center><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.js"></script>
<a href="namwarn.jpg" rel='lightbox[namwarn]'><img src="namwarn.jpg"style="width:15%" /></a>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.js"></script>
<a href="namwarn1.jpg" rel='lightbox[namwarn1]'><img src="namwarn1.jpg"style="width:20%" /></a>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.js"></script>
<a href="namwarn2.jpg" rel='lightbox[namwarn3]'><img src="namwarn2.jpg"style="width:15%" /></a>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.js"></script>
<a href="namwarn3.jpg" rel='lightbox[namwarn4]'><img src="namwarn3.jpg"style="width:40%" /></a></center>
<br>
<br>
<center><span style="color:pink;font-size:40px;"> &#9829; &#9829;
</span></center>

<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
    async defer></script>
  </body>
</html>

<?php include("footer.php"); ?>