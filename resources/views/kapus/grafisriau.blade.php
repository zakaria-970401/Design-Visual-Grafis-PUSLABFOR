@extends('layout/masterkapus')

@section('konten')
  <link rel="stylesheet" href="/assets/css/highcharts.css">
  <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/js/highcharts.js"></script>
  <script src="/assets/js/highcharts-3d.js"></script>
  <script src="/assets/js/exporting.js"></script>
  <script src="/assets/js/export-data.js"></script>
  <script src="/assets/js/drilldown.js"></script>  
  <script src="/assets/js/data.js"></script>  
  <script src="/assets/js/accessibility.js"></script> 


	<div class="form-group">	  
	  <ul class="breadcrumb">
  <li> 
	<i class="ace-icon fa fa-home home-icon"></i>
	  <a href="/kapus">Home</a>
  </li>
						
	<li><a href="/kapus/visualgrafis">Visual Grafis</a></li>
	<li>Riau</li>
	
 
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
            name: "Forensik Riau",
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
@endsection