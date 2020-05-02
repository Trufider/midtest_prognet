<!DOCTYPE html>
<html>
	<head>
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
  			</div>
		</nav>

		<center><h1>Pendataan Obat Apotek Sehat Bahagia</h1></center>
			<div class="container">

				<br>

				<center><h3>Edit Data Obat</h3></center>
				
						<div class="col-md-6 offset-md-3">
						  <form action="/obat/{{$obat->id}}/update" method="POST">
				      	  {{csrf_field()}}
							  <div class="form-group">
							  	<label for="exampleInputEmail1">Nama Obat</label>
							    <input name="nama_obat" type="text" class="form-control" aria-describedby="emailHelp" value="{{$obat -> nama_obat}}">

							    <br>

							    <label for="exampleInputEmail1">Jenis Obat</label>
							    <div class="form-group">
								    <select name="jenis_obat" class="form-control" id="exampleFormControlSelect1" value="{{$obat -> jenis_obat}}">
								      <option value="Kapsul" @if($obat -> jenis_obat == 'Kapsul') selected @endif>Kapsul</option>
								      <option value="Sirup" @if($obat -> jenis_obat == 'Sirup') selected @endif>Sirup</option>
								      <option value="Tablet" @if($obat -> jenis_obat == 'Tablet') selected @endif>Tablet</option>
								      <option value="Tetes" @if($obat -> jenis_obat == 'Tetes') selected @endif>Tetes</option>
								      <option value="Injek" @if($obat -> jenis_obat == 'Injek') selected @endif>Injek</option>
								   	 </select>
								</div>
								
								<label for="exampleInputEmail1">Stok Obat</label>
							    <input name="stok" type="number" class="form-control" aria-describedby="emailHelp" value="{{$obat -> stok}}">

							    <br>

							    <label for="exampleInputEmail1">Tanggal Expired</label>
							    <input name="expired" type="date" class="form-control" aria-describedby="emailHelp" value="{{$obat -> expired}}">
								
								<br>

								<label for="exampleInputEmail1">Harga Obat</label>
							    <input name="harga" type="number" class="form-control" aria-describedby="emailHelp" value="{{$obat -> harga}}">
							  </div>
				 			</div>
				 			<div>
						      	<center>
						      		<a href="/obat">
							        	<button type="button" class="btn btn-secondary">Batal</button>
							        </a>&emsp;
							        <button type="submit" class="btn btn-primary" onclick="return confirm('Data akan diupdate, lanjutkan?')">Update</button>
							    </center>
						   	</div>
						  </form>
				
				</div>
			</div>
	</body>

	<!-- Alert Update Success -->
	@if(session('success'))
		<div class="alert alert-success col-md-2 offset-md-5" role="alert">
			<center>
	  			{{session('success')}}
	  		</center>
		</div>
	@endif
</html>