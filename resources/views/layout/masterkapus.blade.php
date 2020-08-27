
<!DOCTYPE html>
<html lang="en">
<head>

<title>SMILE-Visual</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	
	<!-- new -->
    <link href="/assets/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables/dataTables.responsive.css" rel="stylesheet" />
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <!--independent Style (bisa di load per page bila ajax sudah dipakai)-->
	
	<!-- multiselect dropdown -->
	<link href="/assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" />
	<link href="/assets/plugins/chosen/chosen.css" rel="stylesheet" />
	<link href="/assets/plugins/chosen/chosen.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/mobile.css">


	
</head>

<body>

	<header class="navbar">
  <div class="inline-box">
	  <!-- img src="/assets/images/bareskrim.png" class="left"/> -->
	  <img src="/assets/images/bareskrim/logo_bareskrim.png" class="left"/>
	  <img src="/assets/images/logo.png" class="middle"/>
	  <img src="/assets/images/logolabfor.png" class="right"/>
  </div>
</header>

<div class="lines "></div>  
	<div class="main-content" id="ajax-content">
		    	<div class="dropdown">	
	  <button class="btn btn-warning btn-block dropdown-toggle" type="button" data-toggle="dropdown">Kapus	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
		<li><a href="/">Logout</a></li>
	  </ul>
	</div>

	<div class="btn-group btn-group-justified">
	  <a href="/kapus/tracking" class="btn btn-warning">Tracking</a>
	  <a href="/kapus/visualgrafis" class="btn btn-warning">Visual Grafis</a>
	  <a href="/kapus/feedback" class="btn btn-warning">Feedback</a>
	</div>  

		<div class="container-fluid">
		@yield('konten')

		</div> 

<br>
<br>
<br>
    <footer class="container">
<span class="footer">Copyright © 2020 Puslabfor Bareskrim Polri</span>
</footer>
</body>

<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	
	<!-- new -->

	<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatables/jquery.dataTables.bootstrap.js"></script>
	<script src="/assets/plugins/datatables/dataTables.responsive.js"></script>

	<script src="/assets/plugins/highcharts/highcharts.js"></script>
	<script src="/assets/plugins/lims/lims.js"></script>
	<script src="/assets/plugins/gritter/jquery.gritter.min.js"></script>


	<script src="/assets/plugins/jquery/bindWithDelay.js"></script>

	<!--independent Script (bisa di load per page bila ajax sudah dipakai)-->
	<script src="/assets/plugins/history/bundled/html4+html5/jquery.history.js"></script>

	<script src="/assets/plugins/jquery/jquery.validate.min.js"></script>
	<script src="/assets/plugins/printthis/printThis.js"></script>
	<!--inline scripts related to this page-->
	<script src="/assets/plugins/datatables/fnSetFilteringDelay.js"></script>
	<!--preload-->

	<!--multiselect -->
	<script src="/assets/plugins/multiselect/js/jquery.multi-select.js"></script>

	<script src="/assets/plugins/chosen/chosen.jquery.js"></script>
	<script src="/assets/plugins/chosen/chosen.jquery.min.js"></script>
	
</html>