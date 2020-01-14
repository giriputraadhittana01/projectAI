<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home-{{Session::get('user_id')}}</title>
  
  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background:#584b4f;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">GOLDY</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" onclick='dashBoard()' style="cursor:pointer;">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" onclick='setProfile()'>Profile</a>
            <a class="collapse-item" onclick='setHistory()'>History</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Divider -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>    

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{$data[0]->username}}</span>
                <img class="img-profile rounded-circle" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" onclick='setProfile()'>
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">100% TO IDEAL</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Food Recomendation</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i>&nbsp;<span id='foodName0'></span>
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i>&nbsp;<span id='foodName1'></span>
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i>&nbsp;<span id='foodName2'></span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4" style="width:600px;">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Weight Bar</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Your Progress<span id='progress' class="float-right"></span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" id='progressBar'aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; GOLDY 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <a class="btn btn-primary" href="{{ route('operator') }}">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="inputWeightModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">INPUT YOUR WEIGHT & HEIGHT</h5>
        </div>
        <div class="modal-body"><input type="text" id="weight" class="form-control mb-4" placeholder="Weight" style='width:30%;margina-right:'><input type="text" id="height" class="form-control mb-4" placeholder="Height" style='width:30%;'>
          &nbsp;your food will be made based on your weight & height, And your record will be taken every monday.
        </div>
        <div class="modal-footer">
          <a class="btn btn-primary" href="#" onclick='saveRecord()'>GO</a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="historyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">History</h5>
        </div>
        <div class="modal-body">
          <table id='fixedTable' class='table'>
          </table>
        </div>
        <div class="modal-footer">
          <a class="btn btn-primary" href="#" data-dismiss="modal">OK</a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
        </div>
        <div class="modal-body">
            <div class="profile-header-container" style='text-align:center;'>   
              <div class="profile-header-img">
                    <img class="img-circle" style='border-radius: 100px;'src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120"/>
                    <!-- badge -->
                    <div class="rank-label-container">
                        <span class="label label-default rank-label"></span>
                    </div>
                </div>
            </div> 
            <br>
          <table id='fixedTableModal' class='table'>
            <tr>
              <td>Name</td>
              <td>:</td>
              <td><span id='profileName'></td>
            </tr>
            <tr>
              <td>Age</td>
              <td>:</td>
              <td><span id='profileAge'></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td><span id='profileEmail'></td>
            </tr>
            <tr>
              <td>Weight</td>
              <td>:</td>
              <td><span id='profileWeight'></td>
            </tr>
            <tr>
              <td>Height</td>
              <td>:</td>
              <td><span id='profileHeight'></td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <a class="btn btn-primary" href="#" data-dismiss="modal">OK</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.mask.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/chart-area-demo.js"></script>
  <script src="assets/js/demo/chart-pie-demo.js"></script>
  <script src="assets/js/sweetalert2.min.js"></script>
  <script src="assets/GlobalFunc/script.js"></script>

</body>
<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</html>
<script type='text/javascript'>
chartData=[];
pieData=[];
foodName=[];
base="";
dateNow=new Date();
dateNow=dateNow.getDate();
dateLast="";
$(document).ready(function(){ 
  $('#weight').mask('000');
  getDate();
});
function getDate()
{
  // console.log("Hello buddys");
  $.ajax({
		type  : "GET",
    url   : "{{route('getDate-10')}}",
    dataType: "json",
    success : function(response){
      if(response[0]!='N')
      {
        dateLast=new Date(response.date);
        dateLast=dateLast.getDate();
      }
      inputWeight();
      setChart();
    }       
	});
}
function showPie(datacall)
{
  var ctx = document.getElementById("myPieChart");
  var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: foodName,
      datasets: [{
        data: datacall,
        backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
        hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
      }],
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
      },
      legend: {
        display: false
      },
      cutoutPercentage: 80,
    },
  });
}
function showChart(datacall)
{
  var ctx = document.getElementById("myAreaChart");
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Week 1", "Week 2", "Week 3", "Week 4", "Week 5", "Week 6", "Week 7", "Week 8", "Week 9", "Week 10", "Week 11", "Week 12"],
      datasets: [{
        label: "Progress",  
        lineTension: 0.3,
        backgroundColor: "rgba(78, 115, 223, 0.05)",
        borderColor: "rgba(78, 115, 223, 1)",
        pointRadius: 3,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 3,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        pointBorderWidth: 2,
        data: datacall,
      }],
    },
    options: {
      maintainAspectRatio: false,
      layout: {
        padding: {
          left: 10,
          right: 25,
          top: 25,
          bottom: 0
        }
      },
      scales: {
        xAxes: [{
          time: {
            unit: 'date'
          },
          gridLines: {
            display: false,
            drawBorder: true
          },
          ticks: {
            maxTicksLimit: 7
          }
        }],
        yAxes: [{
          ticks: {
            maxTicksLimit: 5,
            padding: 10,
            // Include a dollar sign in the ticks
            callback: function(value, index, values) {
              return number_format(value);
            }
          },
          gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        titleMarginBottom: 10,
        titleFontColor: '#6e707e',
        titleFontSize: 14,
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        intersect: false,
        mode: 'index',
        caretPadding: 10,
        callbacks: {
          label: function(tooltipItem, chart) {
            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
            return datasetLabel + ' : ' + number_format(tooltipItem.yLabel)+'/100';
          }
        }
      }
    }
  });
}
function saveRecord()
{
  if($('#weight').val()==''||$('#weight').val()<54||$('#weight').val()>86)
  {
    customError('Weight Invalid');
    return false;
  }
  if($('#height').val()==''||$('#height').val()<157||$('#height').val()>195)
  {
    customError('Height Invalid');
    return false;
  }
  $.ajax({
		type  : "GET",
    url   : "{{route('saveRecord-05')}}",
    dataType: "json",
    data :{
      weight    : $('#weight').val(),
      height    : $('#height').val()
    },
    success : function(response){
      if(response[0].disp_error==1)
      {
        customError(response[0].msg);
        return false;
      }
      $('#inputWeightModal').modal('hide');
      customSuccess(response[0].msg);
      setChart();
    }       
	});
}

function setChart()
{
  $.ajax({
		type  : "GET",
    url   : "{{route('getRecord-06')}}",
    dataType: "json",
    success : function(response){
      if(response[0].disp_error==1)
      {
        customError(response[0].msg);
        return false;
      }
      for(i=0;i<response[0].data.length;i++)
      {
        chartData[i]=response[0].data[i].result;
      }
      base=response[0].base;
      showChart(chartData);
      setProgressBar();
      setRecomendation();
    }  
  });     
}
weightTemp="";
heightTemp="";
function setProgressBar()
{
  $.ajax({
		type  : "GET",
    url   : "{{route('getProgress-08')}}",
    dataType: "json",
    success : function(response){
      weightTemp=response.weight;
      heightTemp=response.height;
      $('#progressBar').width(response.weight + "%").attr('aria-valuenow', response.weight);
      $('#progressBar').width(base + "%").attr('aria-valuemax', base);
      $('#progressBar').width((response.weight/base)*100+'%');
      $('#progress').html('Weight '+response.weight+'/'+base);
    }  
  });     
}
function setRecomendation(datacall)
{
  var times=new Date().getHours();
  times=times>=1&&times<12?24:times>=12&&times<18?12:18;
  $.ajax({
		type  : "GET",
    url   : "{{route('getRecommendation-07')}}",
    dataType: "json",
    data :{
      time : times
    },
    success : function(response){
      
      for(var i=0;i<response[0].suggest.length;i++)
      {
        temp=(response[0].suggest[i].foodCalory/response[0].max)*100;
        pieData[i]=temp;
        foodName[i]=response[0].suggest[i].foodName+' '+response[0].suggest[i].foodDesc;
        $('#foodName'+i).html(response[0].suggest[i].foodName);
      }
      showPie(pieData);
    }  
  });     
}
function inputWeight()
{
  if(({!! json_encode($data[0]->weight) !!}==0&&{!! json_encode($data[0]->height) !!}==0)||dateNow-dateLast==7)
  {
    $('#inputWeightModal').modal({backdrop: 'static', keyboard: false});
  }  
}

function dashBoard()
{ 
  window.location.href="{{ route('login-04') }}?id="+"{{Session::get('user_id')}}";
}
function setHistory()
{
  $.ajax({
		type  : "GET",
    url   : "{{route('setTable-11')}}",
    dataType: "json",
    success : function(response){
      $('#historyModal').modal({backdrop: 'static', keyboard: false});
      setTable(response);
    }       
	});
}
function setTable(datacall)
{
  strDatatableHtml="";
  strDatatableHtml+="<tr>"+
                      "<td>"+"Weight"+"</td>"+
                      "<td>"+"Height"+"</td>"+
                      "<td>"+"Date"+"</td>"+
                    "<tr>";
  for(var i=0;i<datacall.length;i++)
  {
    strDatatableHtml+="<tr id='row"+i+"' onclick='highlight("+i+")'>"+
                        "<td>"+datacall[i].weight+"</td>"+
                        "<td>"+datacall[i].height+"</td>"+
                        "<td>"+datacall[i].date+"</td>"+
                      "<tr>";
  }
  $('#fixedTable').html(strDatatableHtml);
}   
prevRow=-1;
function highlight(idx)
{
  $("#row"+prevRow).removeClass("bg-warning");
  $("#row"+idx).addClass("bg-warning");
  prevRow = idx;
}
function setProfile()
{
  $.ajax({
		type  : "GET",
    url   : "{{route('setProfile-12')}}",
    dataType: "json",
    success : function(response){
      $('#profileName').html(response[0].username);
      $('#profileAge').html(response[0].age);
      $('#profileEmail').html(response[0].email);
      $('#profileWeight').html(weightTemp);
      $('#profileHeight').html(heightTemp);
      $('#profileModal').modal({backdrop: 'static', keyboard: false});(response);
    }       
	});
}
</script>
