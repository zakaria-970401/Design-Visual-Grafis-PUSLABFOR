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
	<li>Gabungan</li>
	
 
</ul>
<div class="container">
  <br/>
  <div class="tab-content">
    <ul class="nav nav-tabs">
        <li><a data-toggle="tab" href="#penerimaan_bb">Penerimaan BB</a></li>
        <li><a data-toggle="tab" href="#total_takah">Total Takah</a></li>
        <li><a href="#takah_dalam_proses">Takah Dalam Proses</a></li>
        <li><a href="#takah_selesai">Takah Selesai</a></li>
    </ul>
   </div> 
  <br> 

    <div class="tab-content">
        <div id="penerimaan_bb" class="tab-pane fade in">
        <ul class="nav nav-tabs">
            <li><a data-toggle="tab" href="#2020">2020</a></li>
            <li><a data-toggle="tab" href="#2021">2021</a></li>
            <li><a data-toggle="tab" href="#2022">2022</a></li>
            <li><a data-toggle="tab" href="#2023">2023</a></li>
            <li><a data-toggle="tab" href="#2024">2024</a></li>
            <li><a data-toggle="tab" href="#2025">2025</a></li>
        </ul>
    </div>
</div>

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
    <div id="2021" class="tab-pane fade in">
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
        text: 'Tahun 2020'
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
                    y: 20000,
                    drilldown: "Jakarta"
                },
                {
                    name: "Riau",
                    y: 2000,
                    drilldown: "Riau"
                },
                {
                    name: "Papua",
                    y: 1500,
                    drilldown: "Papua"
                },
                {
                    name: "Medan",
                    y: 8000,
                    drilldown: "Medan"
                },
                {
                    name: "Palembang",
                    y: 5000,
                    drilldown: "Palembang"
                },
                {
                    name: "Semarang",
                    y: 3000,
                    drilldown: "Semarang"
                },
                {
                    name: "Surabaya",
                    y: 6000,
                    drilldown: "Surabaya"
                },
                {
                    name: "Denpasar",
                    y: 2500,
                    drilldown: "Denpasar"
                },
                {
                    name: "Makassar",
                    y: 3567,
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


@endsection