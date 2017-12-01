
<?include "top.php";


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Geocoding service</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">

  <body>
    

<?

$getlocation="SELECT Location FROM ApprovedReport";
$setloc=mysqli_query($connect,$getlocation);
$count=mysqli_num_rows($setloc);
$loc[]='';
$x=0;
while($array=mysqli_fetch_array($setloc)){



?>
<script type="text/javascript">
  
var x="jdfjldfk";
var y="kdjdiofdoidifpoi";
var z="jkadjskslajdljasdijsiodj";

var set=[];
var q=0;
while(q<5){


set.push(q);
console.log(set);
q++;

}



</script>


<?echo $array["Location"];?>

<?}?>


  </body>


</html>