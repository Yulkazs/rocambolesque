<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rocambolesque ® - Contact</title>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="public/css/contact.css">
        <link rel="stylesheet" href="public/css/globals.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="../public/js/contact.js"></script>
        <script
            type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
        ></script>
        <script type="text/javascript">
            (function () {
            emailjs.init("4QVAYikppPuebHxbn");
            })();
        </script>
</head>
<body>
    <!-- Banner dat bovenaan de pagina komt te staan-->
    <div class="banner">
        <img src="../public/IMG/eten.png">
    </div>
    <!--  Pagina Titel -->
    <h2 class="title">Contact Ons</h2>
        <div id="map"></div>

<script>
    function initMap() {
        // Create the map.
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12, //This sets the zoom level of the map. (Larger is closer, smaller is further away)
          center: {lat: 36.156744, lng: -115.033651},
          mapTypeId: 'terrain' //You can change this to ROADMAP, HYBRID, etc...
        });

        
      
        // Next, construct the circle for each value in citymap.
       
        for (var city in citymap) {
          // Add the circle properties to the map.
          var cityCircle = new google.maps.Circle({
            strokeColor: '#2e6da4', //color of the outer ring
            strokeOpacity: 0.8,  //transparency of the outer ring
            strokeWeight: 2,  //thickness of the outer ring
            fillColor: '#337ab7', //fill color of the circle
            fillOpacity: 0.25,  //transparancy of the circle
            map: map,
            center: citymap[city].center,
            radius: 4680 //You can also use a math function or chart reference here to determine the diameter of the circle.
                          //Eample: Math.sqrt(citymap[city].population) * 4    
          });
        }
      }
      
       // Finally, create an object containing Lat-Lng of the location 
      // you want to center on.
       var citymap = {
        lasvegas: {
          center: {lat: 36.156744, lng: -115.033651},
          population: 2714856 //this is optional to use a math formula to set the diameter of the circle (as mentioned above)
        },
 
      };
</script>