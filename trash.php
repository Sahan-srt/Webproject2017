
<?php include "top.php";?>

<div id="homewrap" class="row .col-md-* .container-fluid"  >
  


  <div id="search" class="col-sm-4 row" >

    <div  class="col-md-12">


          <form >
   

     <div class="col-md-12" >
      <label for="inputType"></label>
              <select name="ptype" >
                <option >Disaster Type</option>
                <option value="Fire">Fire</option>
                <option value="Floods">Floods</option>
                <option value="Vehicle_Accident">Vehicle Accident</option>
                <option value="Earthquark">Earthquark</option>
                <option value="Gas_leak">Gas leak</option>
                


              </select>



     </div> 
      <div id="custom-search-input col-md-12  " style="padding-bottom:40px; ">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Search Area" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>                  
  </form>




                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
              

           <canvas id="myChart" ></canvas>
           <?
          $fire="SELECT Type FROM ApprovedReport WHERE Type='Fire' ";
          $fireQuery=mysqli_query($connect,$fire);


          $flood="SELECT Type FROM ApprovedReport WHERE Type='Floods' ";
          $floodQuery=mysqli_query($connect,$flood);

          $vaccident="SELECT Type FROM ApprovedReport WHERE Type='Vehicle_Accident' ";
          $accidentQuery=mysqli_query($connect,$vaccident);

          $gasleak="SELECT Type FROM ApprovedReport WHERE Type='Gas_leak' ";
          $gasleakQuery=mysqli_query($connect,$gasleak);

          $earthquark="SELECT Type FROM ApprovedReport WHERE Type='Earthquark' ";
          $earthquarkQuery=mysqli_query($connect,$earthquark);

          $other="SELECT Type FROM ApprovedReport WHERE Type='Other' ";
          $otherQuery=mysqli_query($connect,$other);

        
              
           ?>
          <script>
          var ctx = document.getElementById("myChart").getContext('2d');
          var fire='<?php echo $count=mysqli_num_rows($fireQuery); ?>';
          var flood='<?php echo $count=mysqli_num_rows($floodQuery); ?>';
          var vaccident='<?php echo $count=mysqli_num_rows($accidentQuery); ?>';
          var gasleak='<?php echo $count=mysqli_num_rows($gasleakQuery); ?>';
          var earthquark='<?php echo $count=mysqli_num_rows($earthquarkQuery); ?>';
          var other='<?php echo $count=mysqli_num_rows($otherQuery); ?>';
          console.log(gasleak);

          var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: ["Fire","Flooding","Vehicle","Gas leak","E.quark","Other"],
                  datasets: [{
                      label: 'Number of Incidents',
                      data: [fire,flood,vaccident,gasleak,earthquark,other],
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(255, 206, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(255, 159, 64, 0.2)'
                      ],
                      borderColor: [
                          'rgba(255,99,132,1)',
                          'rgba(54, 162, 235, 1)',
                          'rgba(255, 206, 86, 1)',
                          'rgba(75, 192, 192, 1)',
                          'rgba(153, 102, 255, 1)',
                          'rgba(255, 159, 64, 1)'
                      ],
                      borderWidth: 1.5
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero:true,
                              stepSize:1


                          }
                      }]                }
              }
          });
          </script>




</div>

  
        

</div>
<?php include "footer.php";?>