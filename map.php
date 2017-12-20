<?include "top.php";?>

  <style>
       #map {
        height:90vh;
        width:75vw;
        margin-left:50px; 
       }
    </style>
<!-- developer.google.com code refereced to this activity -->
<div id="homewrap" class="row .col-md-* .container-fluid" style="background-color:#607D8B;">
   <div id="map" class=".col-md-6 .container-fluid">
    </div>
    <div class=".col-md-6 .container-fluid" style="margin-left:20px;" ><h5 style="color: white;">Map Help</h5>
      <ul>
        <li style="text-decoration:none;list-style:none; color: white;  ">
          <img src="images/icons/fr.png">Fire
        </li>

        <li style="text-decoration:none;list-style:none; color: white;  ">
          <img src="images/icons/fl.png">Floods
        </li>
        <li style="text-decoration:none;list-style:none;  color: white; ">
          <img src="images/icons/v.png">Vehicle Accidents
        </li>
        <li style="text-decoration:none;list-style:none; color: white;  ">
          <img src="images/icons/e.png">Earthquark
        </li>
        <li style="text-decoration:none;list-style:none; color: white;  ">
          <img src="images/icons/g.png">Gas leak
        </li>
        <li style="text-decoration:none;list-style:none;  color: white; ">
          <img src="images/icons/o.png">Other
        </li>
      </ul>



    </div>

</div>


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
         
         
          while($array=mysqli_fetch_assoc($setloc)){
                $icon='';
                switch ($array['Type']) {
                  case 'Fire':
                    $icon='fr.png';
                    break;
                    case 'Floods':
                    $icon='fl.png';
                      break;
                    case 'Gas_leak':
                        $icon='g.png';
                        break;
                     case 'Earthquark':
                         $icon='e.png';
                          break; 
                      case 'Other':

                             $icon='o.png';
                              break;      
                  case 'Vehicle_Accident':
                    $icon='v.png';
                    break;
                  default:
                    $icon='icon.png';

                     break;
                }
//geocoding the address,referanced js map api from developer.google.com
    echo "var address ="."'".$array['Location']."'".";
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            icon:'images/icons/".$icon."',
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


