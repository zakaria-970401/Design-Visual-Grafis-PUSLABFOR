@extends('layout/masterkapus')

@section('konten')
	<div class="form-group">	  
	  <ul class="breadcrumb">
		<li class="active"><a href="/kapus">Home</a></li>
		  <li class="active"><a href="/kapus/tracking">Tracking</a></li>
		    <li class="active"><a href="/kapus/trackingtersangka">Tracking Tersangka</a></li>
		<li>Daftar Takah</a></li>
	  </ul>
	</div>
  
  <div class="container-wrapper" style="margin-bottom: 25px">
	<div class="container-fluid">
	  
	  	  
	<form  class="form-horizontal" method="post" accept-charset="utf-8" action="/kasus/allcabang">
		<div class="form-group">
		<label class="control-label col-sm-2" for="sel1">Pilih Labfor :</label>
			<div class="col-sm-3">			
				<div class="dropdown btn-transparent">
					<select name="cabang" id="cabang">						
						<option value="1">Jakarta</option>
						<option value="2">Surabaya</option>
						<option value="3">Medan</option>
						<option value="4">Semarang</option>
						<option value="5">Makassar</option>
						<option value="6">Palembang</option>			
						<option value="7">Denpasar</option>
						<option value="8">Riau</option>
						<option value="9">Papua</option>
					</select>	
				</div>
			</div>
		</div>
	</form>
	  
	  
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

@endsection
