<?include "top.php";?>

  <style>
       #map {
        height:90vh;
        width:95vw;
       }
    </style>
<!-- developer.google.com code refereced to this activity -->
 <div id="map"></div>
    <script>

       function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom:14,
          center: {lat:6.927079, lng:79.861244}
        });
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }





      

        
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBylzrdmPVU8tXBchM3DYhuw6RwUNaSyG8&callback=initMap">
    </script>





<?include "footer.php";?>

<!-- 


<?echo $row['Location'];?>


        <?

                         $location="SELECT Location FROM ApprovedReport";
                         $querylocation=mysqli_query($connect,$location);
                         while($row=mysqli_fetch_array($querylocation)){

                             

   ?>

     <? } ?>

-->
