<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>MakeAC : Make A Complaint</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">MakeAC</a>
    
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <?php
  include "connect.inc_sad.php";
  session_start();

  $query31 = mysqli_query($con,"SELECT * FROM complaints WHERE category=1");
  $numrows31 = mysqli_num_rows($query31);

  $query32 = mysqli_query($con,"SELECT * FROM complaints WHERE category=2");
  $numrows32 = mysqli_num_rows($query32);

  $query33 = mysqli_query($con,"SELECT * FROM complaints WHERE category=3");
  $numrows33 = mysqli_num_rows($query33);

  $query34 = mysqli_query($con,"SELECT * FROM complaints WHERE category=4");
  $numrows34 = mysqli_num_rows($query34);

  $query35 = mysqli_query($con,"SELECT * FROM complaints WHERE category=5");
  $numrows35 = mysqli_num_rows($query35);





  $query21 = mysqli_query($con,"SELECT * FROM complaints WHERE region=1");
  $numrows21 = mysqli_num_rows($query21);

  $query22 = mysqli_query($con,"SELECT * FROM complaints WHERE region=2");
  $numrows22 = mysqli_num_rows($query22);

  $query23 = mysqli_query($con,"SELECT * FROM complaints WHERE region=3");
  $numrows23 = mysqli_num_rows($query23);

  $query24 = mysqli_query($con,"SELECT * FROM complaints WHERE region=4");
  $numrows24 = mysqli_num_rows($query24);

  $query25 = mysqli_query($con,"SELECT * FROM complaints WHERE region=5");
  $numrows25 = mysqli_num_rows($query25);





  $query4 = mysqli_query($con,"SELECT * FROM complaints WHERE status=1 or status=0");
  $numrows4 = mysqli_num_rows($query4);





  $query5 = mysqli_query($con,"SELECT * FROM complaints WHERE status=0");
  $numrows5 = mysqli_num_rows($query5);





  $query6 = mysqli_query($con,"SELECT * FROM complaints WHERE date=CURDATE()");
  $numrows6 = mysqli_num_rows($query6);






  $count_total=0;
  while ($row4 = mysqli_fetch_assoc($query4))
  {
      $count_total++;
  }



  $count_remaining=0;
  while ($row5 = mysqli_fetch_assoc($query5))
  {
      $count_remaining++;
  }


  $count_today=0;
  while ($row6 = mysqli_fetch_assoc($query6))
  {
      $count_today++;
  }



  $count_category1=0;
  while ($row31 = mysqli_fetch_assoc($query31))
  {
      $count_category1++;
  }

  $count_category2=0;
  while ($row32 = mysqli_fetch_assoc($query32))
  {
      $count_category2++;
  }

  $count_category3=0;
  while ($row33 = mysqli_fetch_assoc($query33))
  {
      $count_category3++;
  }

  $count_category4=0;
  while ($row34 = mysqli_fetch_assoc($query34))
  {
      $count_category4++;
  }

  $count_category5=0;
  while ($row35 = mysqli_fetch_assoc($query35))
  {
      $count_category5++;
  }



  $count_region1=0;
  while ($row21 = mysqli_fetch_assoc($query21))
  {
      $count_region1++;
  }

  $count_region2=0;
  while ($row22 = mysqli_fetch_assoc($query22))
  {
      $count_region2++;
  }

  $count_region3=0;
  while ($row23 = mysqli_fetch_assoc($query23))
  {
      $count_region3++;
  }

  $count_region4=0;
  while ($row24 = mysqli_fetch_assoc($query24))
  {
      $count_region4++;
  }

  $count_region5=0;
  while ($row25 = mysqli_fetch_assoc($query25))
  {
      $count_region5++;
  }

  $queryy=mysqli_query($con,"SELECT * FROM workers");
  $workers_number=mysqli_num_rows($queryy);

  $completed=$count_total-$count_remaining;
  ?>
  <div>
    <div class="container-fluid">
  
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
                <div class="mr-5">Total Complaints Registered</div>
            </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left"><?php echo $count_total ?></span>

              </a>

          </div>
        </div>
          <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                  <div class="card-body">
                      <div class="card-body-icon">
                          <i class="fa fa-fw fa-list"></i>
                      </div>
                      <div class="mr-5">Total Remaining Complaints</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#">
                      <span class="float-left"><?php echo $count_remaining ?></span>

                  </a>
              </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                  <div class="card-body">
                      <div class="card-body-icon">
                          <i class="fa fa-fw fa-wrench"></i>
                      </div>
                      <div class="mr-5">Today's Complaints</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#">
                      <span class="float-left"><?php echo $count_today ?></span>
              
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-puzzle-piece"></i>
              </div>
              <div class="mr-5">Registered Workers</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"><?php echo $workers_number ?></span>
              
            </a>
          </div>
        </div>
      </div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Total Complaints Registered</div>
            <div class="card-body">
                <div id="chartContainer3" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
            </div>
            <div class="card-footer small text-muted">Updated Just Now</div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-bar-chart"></i> Status of Complaints</div>
                    <div class="card-body">

                        <div id="chartContainer1" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>

                    </div>
                    <div class="card-footer small text-muted">Updated Just Now</div>
                </div>
            </div>
            <div class="col-lg-4">
                  <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-pie-chart"></i> Regionwise Complaints in IIIT Gwalior</div>
                    <div class="card-body">
                        <div id="chartContainer2" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    </div>
                    <div class="card-footer small text-muted">Updated Just Now</div>
                </div>

            </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Complaints Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Region</th>
                  <th>For</th>
                  <th>Date</th>
                  <th>Completed</th>
                
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Region</th>
                  <th>For</th>
                  <th>Date</th>
                  <th>Completed</th>
                 
                </tr>
              </tfoot>
              <tbody>
              <?php
              $q=mysqli_query($con,"SELECT * FROM `complaints`");
              while($row=mysqli_fetch_assoc($q))
              {
                  $address=$row['address'];
                  $r=$row['region'];
                  if($r=="1")
                      $region="BH 1";
                  else if($r=="2")
                      $region="BH 2";
                  else if($r=="3")
                      $region="BH 3";
                  else if($r=="4")
                      $region="GH";
                  else
                      $region="Staff";
                  $c=$row['category'];
                  if($c=="1")
                      $worker="Carpenter";
                  else if($c=="2")
                      $worker="Electrician";
                  else if($c=="3")
                      $worker="Plumber";
                  else
                      $worker="Cleaner";
                  $date=$row['date'];
                  $s=$row['status'];
                  if($s=="0")
                      $status="Pending";
                  else
                      $status="Completed";
                  echo "<tr>
                  <td>$address</td>
                  <td>$region</td>
                  <td>$worker</td>
                  <td>$date</td>
                  <td>$status</td>
                </tr>";
              }
              ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated Just Now</div>
      </div>
    </div>
    <div class="container">
    <footer class="sticky-footer"  style="width: 100%">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Europa Developments</small>
        </div>
      </div>
    </footer>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="admin_Logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
      <script>


          var chart = new CanvasJS.Chart("chartContainer2", {
              animationEnabled: true,
              title: {
                  text: ""
              },
              data: [{
                  type: "pie",
                  startAngle: 240,
                  yValueFormatString: "##0\" complaints\"",
                  indexLabel: "{label} {y}",
                  dataPoints: [
                      {y: <?php echo $count_region1; ?>, label: "BH-1"},
                      {y: <?php echo $count_region2; ?>, label: "BH-2"},
                      {y: <?php echo $count_region3; ?>, label: "BH-3"},
                      {y: <?php echo $count_region4; ?>, label: "GH"},
                      {y: <?php echo $count_region5; ?>, label: "Faculty"}
                  ]
              }]
          });
          chart.render();





          var chart = new CanvasJS.Chart("chartContainer1", {
              animationEnabled: true,
  title:{
    text: "",
    horizontalAlign: "left"
  },
  data: [{
    type: "doughnut",
    startAngle: 60,
    //innerRadius: 60,
    indexLabelFontSize: 17,
    toolTipContent: "<b>{label}:</b> {y} (#percent%)",
    dataPoints: [
      { y: <?php echo $count_total; ?>, label: "Total" },
      { y: <?php echo $count_remaining; ?>, label: "Pending" },
      { y: <?php echo $completed; ?>, label: "Completed" }
    ]
  }]


          });
          chart.render();

          var chart = new CanvasJS.Chart("chartContainer3", {
              animationEnabled: true,

              title: {
                  text: ""
              },
              axisY: {
                  title: "No. of Complaints",

                  includeZero: false
              },
              axisX: {
                  title: "Type of Complaints"
              },
              data: [{
                  type: "column",
                  yValueFormatString: "#,###\"\"",
                  dataPoints: [
                      { label: "Electrician", y: <?php echo $count_category1; ?> },
                      { label: "Carpenter", y: <?php echo $count_category2; ?> },
                      { label: "Plumber", y: <?php echo $count_category3; ?> },
                      { label: "Cleaner", y: <?php echo $count_category4; ?> },
                      { label: "Others", y: <?php echo $count_category5; ?>},

                  ]
              }]
          });
          chart.render();



      </script>
  </div>
</body>

</html>
