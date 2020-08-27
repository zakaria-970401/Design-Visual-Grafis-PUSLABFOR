@extends('layout/masterkapus')

@section('konten')
  <div class="form-group">	  
    <ul class="breadcrumb">
		  <li><a href="/kapus">Home</a></li>
		    <li><a href="/kapus/tracking">Tracking</a></li>
	 	      <li class="active"><a href="#">Tracking Takah</a></li>
	       </ul>
   	</div>
		<div class="col-sm-12 col-sm-offset-2">
        <form class="form-horizontal" action="#">
            <div class="form-group">
                <label class="control-label col-sm-2" for="no_takah">No. Takah/Penerimaan:</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="no_takah" placeholder="Masukan No. Takah/Penerimaan">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                 <a href="/kapus/trackingkategoritakah" class="btn btn-default">Cari</button></a>
                </div>
            </div>
        </form>
      </div>
@endsection