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
						
	<li><a href="/kapus/feedback">Feedback</a></li>
	<li>Labfor Riau</li>


<div id="container" style="width:100%; height:450px;"></div>

<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Feedback'
    },
    subtitle: {
        text: ' Lab. Forensik Riau'
    },
    xAxis: {
        categories: [
            'Petugas Labfor Ramah Dalam Pelayanannya',
            'Petugas Labfor Tepat Waktu Dalam Pelayanannya',
            'Petugas Labfor Cepat Datang Ketika Di Telpon',
            'Petugas Labfor Terampil Dalam Riksa',
            'Peniyidk Mudah Menghubungi Petugas Labfor ',
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}:<b>Puas</b></span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}:  </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>', 
        footerFormat: '</table>', 
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Setuju',
        data: [49, 71, 106, 129, 144]
    }, {
        name: 'Ragu-Ragu',
        data: [83, 78, 98, 93, 106]

    }, {
        name: 'Tidak Setuju',
        data: [48, 38, 39, 41, 47]

    }]
});

</script>
<br>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>No. Takah</th>
                <th>Komentar</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>000001/FDF/2020/RIA</td>
                <td>PEMERIKSAAN LUMAYAN CEPAT</td>
                <td>2020/06/15 12:11:13</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>000002/FBF/2020/RIA</td>
                <td>TERSERAH AJAH</td>
                <td>2020/06/12 16:11:10</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>000003/KTF/2020/RIA</td>
                <td>TERSERAH AJAH</td>
                <td>2020/06/11 15:11:10</td>
            </tr>
        </tbody>
    </table>

    @endsection