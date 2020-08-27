@extends ('layout.masterkapus')

@section('konten') 
  	<div class="form-group">	  
	  <ul class="breadcrumb">
		<li><a href="/kapus">Home</a></li>
		<li class="active"><a href="/kapus/tracking">Tracking</a></li>
	  </ul>
	</div>
	<div class="lines"></div>
	 <div class="jumbotron">
	  <div class="container-fluid">
		<div class="col-sm-10 col-sm-offset-2">			
		  <div class="col-sm-5">
			<div class="thumbnail">
			  <a href="/kapus/trackingtakah">
				<img src="/assets/images/tracking_takah.png" class="images" alt="Takah" width="340">
			  </a>
			  <div class="grid-caption">
				<p>Cari Berdasarkan Takah</p>
			  </div>
			</div>
		  </div>
		  
		  <div class="col-sm-5">
			<div class="thumbnail">
			  <a href="/kapus/trackingtersangka">
				<img src="/assets/images/tracking_tersangka.png" class="images" alt="Tersangka" width="340">
			  </a>
			  <div class="grid-caption">
				<p>Cari Berdasarkan Tersangka</p>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>

@endsection