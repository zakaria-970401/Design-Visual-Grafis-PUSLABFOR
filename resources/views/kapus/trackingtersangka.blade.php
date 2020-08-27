@extends('layout/masterkapus')

@section('konten')
    <div class="form-group">	  
      <ul class="breadcrumb">
		    <li><a href="/kapus">Home</a></li>
		      <li><a href="/kapus/tracking">Tracking</a></li>
	 	        <li class="active"><a href="#">Tracking Tersangka</a></li>
	       </ul>
   	</div>
		<div class="col-sm-12 col-sm-offset-2">
        <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama_tersangka">Nama Tersangka:</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="nama_tersangka" placeholder="Masukan Nama Tersangka">
              </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama_kasus">Nama Kasus:</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="nama_kasus" placeholder="Masukan Nama Kasus">
              </div>
            </div>
            <br>
            <div class="form-group">
                <label class="control-label col-sm-2" for="asal_penyidik">Asal Penyidik:</label>
                <div class="col-md-4">
                <input type="text" class="form-control" id="nama_tersangka" placeholder="Masukan Polda">
                <br>
                <input type="text" class="form-control" id="nama_tersangka" placeholder="Masukan Polres">
                <br>
                <input type="text" class="form-control" id="nama_tersangka" placeholder="Masukan Polsek">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 <a href="/kapus/trackingkategoritersangka" class="btn btn-default">Cari</button></a>
                </div>
            </div>
        </form>     
      </div>

@endsection
