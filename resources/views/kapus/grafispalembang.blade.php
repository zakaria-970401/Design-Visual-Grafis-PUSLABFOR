<!DOCTYPE html>
<html lang="en">
<head>

<title>SMILE - Visual</title>
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

	<script src="https://code.highcharts.com/highcharts.js"></script>
	
	<!-- multiselect dropdown -->
	<link href="/assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" />
	<link href="/assets/plugins/chosen/chosen.css" rel="stylesheet" />
	<link href="/assets/plugins/chosen/chosen.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/mobile.css">
	
</head>

	<header class="navbar">
  <div class="inline-box">
	  <!-- img src="/assets/images/bareskrim.png" class="left"/> -->
	  <img src="/assets/images/bareskrim/logo_bareskrim.png" class="left"/>
	  <img src="/assets/images/logo.png" class="middle"/>
	  <img src="/assets/images/logolabfor.png" class="right"/>
  </div>
</header>

<div class="lines"></div>  
	<div class="main-content" id="ajax-content">
		<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMILE - visual</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/assets/css/highcharts.css">
  <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/js/highcharts.js"></script>
  <script src="/assets/js/highcharts-3d.js"></script>
  <script src="/assets/js/exporting.js"></script>
  <script src="/assets/js/export-data.js"></script>
  <script src="/assets/js/drilldown.js"></script>  
  <script src="/assets/js/data.js"></script>  
  <script src="/assets/js/accessibility.js"></script>  
</head>

<body>
  
    	<div class="dropdown">	
	  <button class="btn btn-warning btn-block dropdown-toggle" type="button" data-toggle="dropdown">Kapus	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
		<li><a href="/">Logout</a></li>
	  </ul>
	</div>

	<div class="btn-group btn-group-justified">
	  <a href="/kapus/tracking" class="btn btn-warning">Tracking</a>
	  <a href="/kapus/visualgrafis" class="btn btn-warning">Visual Grafis</a>
	  <a href="#" class="btn btn-warning">Feedback</a>
	</div> 
	<div class="form-group">	  
	  <ul class="breadcrumb">
  <li> 
	<i class="ace-icon fa fa-home home-icon"></i>
	  <a href="/kapus">Home</a>
  </li>
						
	<li><a href="/kapus/visualgrafis">Visual Grafis</a></li>
	<li>Palembang</li>
	
 
</ul>

<div id="container" style="width:100%; height:450px;"></div>

<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Judul'
    },
    subtitle: {
        text: 'Sub Judul'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },

    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "Forensik Palembang",
            colorByPoint: true,
            data: [
                {
                    name: "Fisikomfor",
                    y: 62.74,
                    drilldown: "Fisikomfor"
                },
                {
                    name: "Narkobafor",
                    y: 10.57,
                    drilldown: "Narkobafor"
                },
                {
                    name: "Dokupalfor",
                    y: 47.23,
                    drilldown: "Dokupalfor"
                },
                {
                    name: "Kimbiofor",
                    y: 25.58,
                    drilldown: "Kimbiofor"
                },
                {
                    name: "Balmetfor",
                    y: 14.02,
                    drilldown: "Balmetfor"
                },
            ]
        }
    ],

	
	
    drilldown: {
        series: [
            {
                name: "Fisikomfor",
                id: "Fisikomfor",
                data: [
                    [
                        "SUBBIDDETEKSUS",
                        41.02
                    ],
                    [
                        "SUBBIDLAKABAKAR",
                        21.02
                    ],
                    [
                        "SUBBIDKOMFOR",
                        30.35
                    ]
                ]
            },

			
            {
                name: "Narkobafor",
                id: "Narkobafor",
                data: [
                    [
                        "SUBBIDNARKO",
                        41.02
                    ],
                    [
                        "SUBBIDPSIKO",
                        21.02
                    ],
                    [
                        "SUBBIDBAYA",
                        30.35
                    ]
                ]
            },
            {
                name: "Dokupalfor",
                id: "Dokupalfor",
                data: [
                    [
                        "BIDDOKUPALFOR",
                        41.02
                    ],
                    [
                        "SUBBIDUPAL",
                        21.02
                    ],
                    [
                        "SUBBIDPRODCET",
                        30.35
                    ]
                ]
            },
            {
                name: "Kimbiofor",
                id: "Kimbiofor",
                data: [
                    [
                        "SUBBIDKIM",
                        41.02
                    ],
                    [
                        "SUBBIDBIOSER",
                        21.02
                    ],
                    [
                        "SUBBIDTOKLING",
                        30.35
                    ]
                ]
            },
            {
                name: "Balmetfor",
                id: "Balmetfor",
                data: [
                    [
                        "SUBBIDSENPI",
                        41.02
                    ],
                    [
                        "SUBBIDHANDAK",
                        21.02
                    ],
                    [
                        "SUBBIDMETAL",
                        30.35
                    ]
               ]
            },
        ]
    }
});
	</script>


	<footer class="container-fluid">
<span class="footer">Copyright © 2018 E-Forensik Puslabfor Bareskrim Polri</span>
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