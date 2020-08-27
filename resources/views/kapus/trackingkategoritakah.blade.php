@extends('layout/masterkapus')

@section('konten')

	<div class="form-group">	  
	  <ul class="breadcrumb">
		<li class="active"><a href="/kapus">Home</a></li>
		  <li class="active"><a href="/kapus/tracking">Tracking</a></li>
		    <li class="active"><a href="/kapus/trackingtakah">Tracking Takah</a></li>
		<li>Daftar Takah</a></li>
	  </ul>
	</div>
  
  <div class="container-wrapper" style="margin-bottom: 25px">
	<div class="container-fluid">


	<div class="form-group">
              <div class="col-4 col-sm">
                 <a href="/kapus/tracking" class="btn btn-info">Kembali</button></a>
                </div>
            </div>

	  <table id="maintable" class="table table-bordered table-striped table table-heading table-datatable dataTable table-responsive">
		<thead>
		<tr>
			<th style="text-align:center">No</th>
			<th style="text-align:center">No. Takah</th>
			<th style="text-align:center">Satker</th>
			<th style="text-align:center">Bidang</th>
			<th style="text-align:center">Sub Bidang</th>
			<th style="text-align:center">Tersangka</th>
			<th style="text-align:center">Kasus/Pokok Persoalan</th>
			<th style="text-align:center">Tanggal Mulai</th>
			<th style="text-align:center">Tanggal Selesai</th>
			<th style="text-align:center">Status</th>
		</tr>
		</thead>
	  </table>
	</div>
  </div>
  
	</div>

@endsection