<?include "top.php";?>

  <style>
       #map {
        height:90vh;
        width:95vw;
       }
    </style>
<!-- developer.google.com code refereced to this activity -->
 <div id="map"></div>

<script type="text/javascript">

     var geocoder;
  var map;


 
  function createmap() {


    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(6.927079,79.861244);
    var mapOptions = {
      zoom:12,
      center: latlng
    }
    map = new google.maps.Map(document.getElementById('map'), mapOptions);


<?               
          $getlocation="SELECT * FROM ApprovedReport";
          $setloc=mysqli_query($connect,$getlocation);
          $count=mysqli_num_rows($setloc);
          $newarray=array();
          $x=0;
          while($array=mysqli_fetch_assoc($setloc)){


//geocoding the address,referanced js map api from developer.google.com
    echo "var address ="."'".$array['Location']."'".";
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            icon:'images/icons/icon.png',
            position: results[0].geometry.location,
            title:"."'"."Type:".$array['Type'].'\n'.$array['Topic']."'"."
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });";


     }?>




}


   </script> 

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9TxZ7rc4_aDMwr0FyRMTMGulFVevWqOg&callback=createmap">
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
