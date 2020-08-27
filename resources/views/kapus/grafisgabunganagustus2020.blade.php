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
	  <a href="/kapus/feedback" class="btn btn-warning">Feedback</a>
	</div> 
	<div class="form-group">	  
	  <ul class="breadcrumb">
  <li> 
	<i class="ace-icon fa fa-home home-icon"></i>
	  <a href="/kapus">Home</a>
  </li>
						
	<li><a href="/kapus/visualgrafis">Visual Grafis</a></li>
	<li><a href="/kapus/visualgrafis/gabungan">Gabungan</a></li>
	<li>2020-Agustus</li>
	
 
</ul>
<div class="container">
  <br/>
  <div class="tab-content">
  <ul class="nav nav-pills">
    <li><a href="#penerimaan_bb">Penerimaan BB</a></li>
    <li><a href="#total_takah">Total Takah</a></li>
    <li><a href="#takah_dalam_proses">Takah Dalam Proses</a></li>
    <li><a href="#takah_selesai">Takah Selesai</a></li>
  </ul>
  </div>
  <br> 
  
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#2020">2020</a></li>
        <li><a data-toggle="tab" href="#2021">2021</a></li>
        <li><a data-toggle="tab" href="#2022">2022</a></li>
        <li><a data-toggle="tab" href="#2023">2023</a></li>
        <li><a data-toggle="tab" href="#2024">2024</a></li>
        <li><a data-toggle="tab" href="#2025">2025</a></li>
    </ul>

  <div class="tab-content">
    <div id="2020" class="tab-pane fade in">
     <ul class="nav nav-tabs">
        <li><a href="/kapus/visualgrafis/gabungan/2020/januari">Januari</a></li>
        <li><a href="/kapus/visualgrafis/gabungan/2020/februari">Februari</a></li>
        <li><a href="/kapus/visualgrafis/gabungan/2020/maret">Maret</a></li>
        <li><a href="/kapus/visualgrafis/gabungan/2020/april">April</a></li>
        <li><a href="/kapus/visualgrafis/gabungan/2020/mei">Mei</a></li>
        <li><a href="/kapus/visualgrafis/gabungan/2020/juni">Juni</a></li>
        <li><a href="/kapus/visualgrafis/gabungan/2020/juli">Juli</a></li>
        <li><a href="/kapus/visualgrafis/gabungan/2020/agustus">Agustus</a></li>
        <li><a href="/kapus/visualgrafis/gabungan/2020/september">September</a></li>
        <li><a href="/kapus/visualgrafis/gabungan/2020/oktober">OKtober</a></li>
        <li><a href="/kapus/visualgrafis/gabungan/2020/november">November</a></li>
        <li><a href="/kapus/visualgrafis/gabungan/2020/desember">Desember</a></li>
      </ul>
     </div>
    <div id="2021" class="tab-pane fade">
    <ul class="nav nav-tabs">
        <li><a data-toggle="tab" href="/kapus/visualgrafis/gabungan/2021/januari">Januari</a></li>
        <li><a data-toggle="tab" href="/kapus/visualgrafis/gabungan/2021/februari">Februari</a></li>
        <li><a data-toggle="tab" href="/kapus/visualgrafis/gabungan/2021/maret">Maret</a></li>
        <li><a data-toggle="tab" href="/kapus/visualgrafis/gabungan/2021/april">April</a></li>
        <li><a data-toggle="tab" href="/kapus/visualgrafis/gabungan/2021/mei">Mei</a></li>
        <li><a data-toggle="tab" href="/kapus/visualgrafis/gabungan/2021/juni">Juni</a></li>
        <li><a data-toggle="tab" href="/kapus/visualgrafis/gabungan/2021/juli">Juli</a></li>
        <li><a data-toggle="tab" href="/kapus/visualgrafis/gabungan/2021/agustus">Agustus</a></li>
        <li><a data-toggle="tab" href="/kapus/visualgrafis/gabungan/2021/september">September</a></li>
        <li><a data-toggle="tab" href="/kapus/visualgrafis/gabungan/2021/oktober">OKtober</a></li>
        <li><a data-toggle="tab" href="/kapus/visualgrafis/gabungan/2021/november">November</a></li>
        <li><a data-toggle="tab" href="/kapus/visualgrafis/gabungan/2021/desember">Desember</a></li>
      </ul>
    </div> 
    <div id="2022" class="tab-pane fade">
    <ul class="nav nav-tabs">
        <li><a data-toggle="tab" href="#2020">Januari</a></li>
        <li><a data-toggle="tab" href="#2020">Februari</a></li>
        <li><a data-toggle="tab" href="#2020">Maret</a></li>
        <li><a data-toggle="tab" href="#2020">Mei</a></li>
        <li><a data-toggle="tab" href="#2020">Juni</a></li>
        <li><a data-toggle="tab" href="#2020">Juli</a></li>
        <li><a data-toggle="tab" href="#2020">Agustus</a></li>
        <li><a data-toggle="tab" href="#2020">September</a></li>
        <li><a data-toggle="tab" href="#2020">OKtober</a></li>
        <li><a data-toggle="tab" href="#2020">November</a></li>
        <li><a data-toggle="tab" href="#2020">Desember</a></li>
      </ul>
    </div>
    <div id="2023" class="tab-pane fade">
    <ul class="nav nav-tabs">
        <li><a data-toggle="tab" href="#2020">Januari</a></li>
        <li><a data-toggle="tab" href="#2020">Februari</a></li>
        <li><a data-toggle="tab" href="#2020">Maret</a></li>
        <li><a data-toggle="tab" href="#2020">Mei</a></li>
        <li><a data-toggle="tab" href="#2020">Juni</a></li>
        <li><a data-toggle="tab" href="#2020">Juli</a></li>
        <li><a data-toggle="tab" href="#2020">Agustus</a></li>
        <li><a data-toggle="tab" href="#2020">September</a></li>
        <li><a data-toggle="tab" href="#2020">OKtober</a></li>
        <li><a data-toggle="tab" href="#2020">November</a></li>
        <li><a data-toggle="tab" href="#2020">Desember</a></li>
      </ul>
    </div>
    <div id="2024" class="tab-pane fade">
    <ul class="nav nav-tabs">
        <li><a data-toggle="tab" href="#2020">Januari</a></li>
        <li><a data-toggle="tab" href="#2020">Februari</a></li>
        <li><a data-toggle="tab" href="#2020">Maret</a></li>
        <li><a data-toggle="tab" href="#2020">Mei</a></li>
        <li><a data-toggle="tab" href="#2020">Juni</a></li>
        <li><a data-toggle="tab" href="#2020">Juli</a></li>
        <li><a data-toggle="tab" href="#2020">Agustus</a></li>
        <li><a data-toggle="tab" href="#2020">September</a></li>
        <li><a data-toggle="tab" href="#2020">OKtober</a></li>
        <li><a data-toggle="tab" href="#2020">November</a></li>
        <li><a data-toggle="tab" href="#2020">Desember</a></li>
      </ul>
    </div>
    <div id="2025" class="tab-pane fade">
    <ul class="nav nav-tabs">
        <li><a data-toggle="tab" href="#2020">Januari</a></li>
        <li><a data-toggle="tab" href="#2020">Februari</a></li>
        <li><a data-toggle="tab" href="#2020">Maret</a></li>
        <li><a data-toggle="tab" href="#2020">Mei</a></li>
        <li><a data-toggle="tab" href="#2020">Juni</a></li>
        <li><a data-toggle="tab" href="#2020">Juli</a></li>
        <li><a data-toggle="tab" href="#2020">Agustus</a></li>
        <li><a data-toggle="tab" href="#2020">September</a></li>
        <li><a data-toggle="tab" href="#2020">OKtober</a></li>
        <li><a data-toggle="tab" href="#2020">November</a></li>
        <li><a data-toggle="tab" href="#2020">Desember</a></li>
      </ul>
    </div>
  </div>

</div>

<div id="container" style="width:100%; height:450px;"></div>

<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total Penerimaan Barang Bukti'
    },
    subtitle: {
        text: 'Bulan Januari, Tahun 2020'
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
                format: '{point.y}'
            }
        }
    },


    
    series: [
        {
            name: "Forensik Gabungan",
            colorByPoint: true,
            data: [
                {
                    name: "Jakarta",
                    y: 100,
                    drilldown: "Jakarta"
                },
                {
                    name: "Riau",
                    y: 70,
                    drilldown: "Riau"
                },
                {
                    name: "Papua",
                    y: 60,
                    drilldown: "Papua"
                },
                {
                    name: "Medan",
                    y: 98,
                    drilldown: "Medan"
                },
                {
                    name: "Palembang",
                    y: 80,
                    drilldown: "Palembang"
                },
                {
                    name: "Semarang",
                    y: 90,
                    drilldown: "Semarang"
                },
                {
                    name: "Surabaya",
                    y: 20,
                    drilldown: "Surabaya"
                },
                {
                    name: "Denpasar",
                    y: 70,
                    drilldown: "Denpasar"
                },
                {
                    name: "Makassar",
                    y: 95,
                    drilldown: "Makassar"
                },
            ]
        }
    ],

	
	
    drilldown: {
        series: [
            {
                name: "Jakarta",
                id: "Jakarta",
                data: [
                    [
                        "FISIKOMFOR",
                        2000
                    ],
                    [
                        "NARKOBAFOR",
                        5000
                    ],
                    [
                        "DOKUPALFOR",
                        1500
                    ],
                    [
                        "KIMBIOBOR",
                        500
                    ],
                    [
                        "BALMETFOR",
                        1000
                    ]
                ]
            },

			
            {
                name: "Riau",
                id: "Riau",
                data: [
                    [
                        "FISIKOMFOR",
                        500
                    ],
                    [
                        "NARKOBAFOR",
                        900
                    ],
                    [
                        "DOKUPALFOR",
                        300
                    ],
                    [
                        "KIMBIOBOR",
                        150
                    ],
                    [
                        "BALMETFOR",
                        150
                    ]
                ]
            },
            {
                name: "Papua",
                id: "Papua",
                data: [
                    [
                        "FISIKOMFOR",
                        41.02
                    ],
                    [
                        "NARKOBAFOR",
                        21.02
                    ],
                    [
                        "DOKUPALFOR",
                        30.35
                    ],
                    [
                        "KIMBIOBOR",
                        17.36
                    ],
                    [
                        "BALMETFOR",
                        32.11
                    ]
                ]
            },
            {
                name: "Medan",
                id: "Medan",
                data: [
                    [
                        "FISIKOMFOR",
                        41.02
                    ],
                    [
                        "NARKOBAFOR",
                        21.02
                    ],
                    [
                        "DOKUPALFOR",
                        30.35
                    ],
                    [
                        "KIMBIOBOR",
                        17.36
                    ],
                    [
                        "BALMETFOR",
                        32.11
                    ]
                ]
            },
            {
                name: "Palembang",
                id: "Palembang",
                data: [
                    [
                        "FISIKOMFOR",
                        41.02
                    ],
                    [
                        "NARKOBAFOR",
                        21.02
                    ],
                    [
                        "DOKUPALFOR",
                        30.35
                    ],
                    [
                        "KIMBIOBOR",
                        17.36
                    ],
                    [
                        "BALMETFOR",
                        32.11
                    ]
                ]
            },
            {
                name: "Semarang",
                id: "Semarang",
                data: [
                    [
                        "FISIKOMFOR",
                        41.02
                    ],
                    [
                        "NARKOBAFOR",
                        21.02
                    ],
                    [
                        "DOKUPALFOR",
                        30.35
                    ],
                    [
                        "KIMBIOBOR",
                        17.36
                    ],
                    [
                        "BALMETFOR",
                        32.11
                    ]
                ]
            },
            {
                name: "Surabaya",
                id: "Surabaya",
                data: [
                    [
                        "FISIKOMFOR",
                        41.02
                    ],
                    [
                        "NARKOBAFOR",
                        21.02
                    ],
                    [
                        "DOKUPALFOR",
                        30.35
                    ],
                    [
                        "KIMBIOBOR",
                        17.36
                    ],
                    [
                        "BALMETFOR",
                        32.11
                    ]
                ]
            }, 
            {
                name: "Denpasar",
                id: "Denpasar",
                data: [
                    [
                        "FISIKOMFOR",
                        41.02
                    ],
                    [
                        "NARKOBAFOR",
                        21.02
                    ],
                    [
                        "DOKUPALFOR",
                        30.35
                    ],
                    [
                        "KIMBIOBOR",
                        17.36
                    ],
                    [
                        "BALMETFOR",
                        32.11
                    ]
                ]
            }, 
            {
                name: "Makassar",
                id: "Makassar",
                data: [
                    [
                        "FISIKOMFOR",
                        41.02
                    ],
                    [
                        "NARKOBAFOR",
                        21.02
                    ],
                    [
                        "DOKUPALFOR",
                        30.35
                    ],
                    [
                        "KIMBIOBOR",
                        17.36
                    ],
                    [
                        "BALMETFOR",
                        32.11
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