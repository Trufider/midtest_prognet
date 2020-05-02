<!DOCTYPE html>
<html>
	<head>
		<link href="mystyle.css" type="text/css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css" type="text/css">
	    <link rel="stylesheet" href="css/bootstrap.min.css"/>
	    <link rel="stylesheet" href="css/font-awesome.min.css"/>
	    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
	    <link rel="stylesheet" href="css/slicknav.min.css"/>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
		<Title>Midtest Prognet</Title>
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="#">
    			<img src="gambar/logo.png" alt="Logo" style="width:35px;">
  			</a>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    			<ul class="navbar-nav mr-auto">
      				<li class="nav-item">
        				<a class="nav-link" href="/obat">Menu Utama</a>
      				</li>
    			</ul>
    			<form action="{{route('obat/search')}}" method="get" class="form-inline my-2 my-lg-0">
      				<input name="keyword" class="form-control mr-sm-2" type="search" placeholder="Cari Obat" aria-label="Search">
      				<button type="submit" class="btn btn-success">Cari</button>
    			</form>
  			</div>
		</nav>

		<center>
			<h1>Pendataan Obat Apotek Sehat Bahagia</h1>
		</center>

	@if(count($result))
		@foreach ($result as $post)

		<div class="container">
			<div class="row">
				<div class="col-6">
					<button type="button" class="btn btn-danger float-left">Keluar</button>
				</div>
				<div class="col-6">
  					<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">Tambah Obat Baru</button>
				</div>

				<br>
			    <br>

				<table table class="table table-hover">
				<tr class="table-dark text-dark">
					<th><center>Nama Obat</center></th>
					<th><center>Jenis Obat</center></th>
					<th><center>Stok Obat</center></th>
					<th><center>Tanggal Expired</center></th>
					<th><center>Harga Obat</center></th>
					<th><center>Action</center></th>
				</tr>
				@foreach($data_obat as $obat)
				<tr>
					<td><center>{{$obat -> nama_obat}}</center></td>
					<td><center>{{$obat -> jenis_obat}}</center></td>
					<td><center>{{$obat -> stok}}</center></td>
					<td><center>{{$obat -> expired}}</center></td>
					<td><center>{{$obat -> harga}}</center></td>
					<td>
						<center>
							<a href="/obat/{{$obat->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
							<a href="/obat/{{$obat->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus, lanjutkan?')">Hapus</a>
						</center>
					</td>
				</tr>
				@endforeach
				</table>
			</div>
		</div>

		@endforeach
		{{$result -> render()}}

	@else
		<h1>Data tidak ditemukan!</h1>
	@endif
	</body>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Obat</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form action="/obat/create" method="POST">
	      	  {{csrf_field()}}
			  <div class="form-group">
			    <input name="nama_obat" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nama Obat">

			    <br>

			    <div class="form-group">
				    <select name="jenis_obat" class="form-control" id="exampleFormControlSelect1">
				      <option>Jenis Obat</option>
				      <option value="Kapsul">Kapsul</option>
				      <option value="Sirup">Sirup</option>
				      <option value="Tablet">Tablet</option>
				      <option value="Tetes">Tetes</option>
				      <option value="Injek">Injek</option>
				   	 </select>
				 </div>
			    <input name="stok" type="number" class="form-control" aria-describedby="emailHelp" placeholder="Jumlah Obat">

			    <br>

			    <label for="exampleInputEmail1">Tanggal Expired</label>
			    <input name="expired" type="date" class="form-control" aria-describedby="emailHelp" placeholder="Tanggal Expired">

			    <br>

			    <input name="harga" type="number" class="form-control" aria-describedby="emailHelp" placeholder="Harga Obat">

			    <br>

			  </div>
 			</div>
	      	<div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
		        <button type="submit" class="btn btn-success">Simpan</button>
		    </div>
			</form>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Alert Create Success -->
	@if(session('success'))
		<div class="alert alert-success" role="alert">
	  		{{session('success')}}
		</div>
	@endif
</html>