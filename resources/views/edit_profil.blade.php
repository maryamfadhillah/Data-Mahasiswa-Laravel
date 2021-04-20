<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<title>Web Maryam</title>
</head>
<body>

@include ('nav')
@yield ('content')
            <div class=container>
            <h1>Edit Data Project</h1>

            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
                
                <form action="/{{$data_mahasiswa->id}}/update" method="POST" enctype="multipart/form-data">
				@csrf
					{{csrf_field()}}
					<div class="form-group">
						<label for="inputnamaproject">NIM</label>
						<input type="text" class="form-control" name="nim" id="nim" required="true" value="{{$data_mahasiswa->nim}}">
					</div>
			
					<div class="form-group">
						<label for="inputpic">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama" required="true" value="{{$data_mahasiswa->nama}}">
					</div>

					<div class="form-group">
						<label for="inputmentor">Alamat</label>
						<input type="text" class="form-control" name="alamat" id="alamat" required="true" value="{{$data_mahasiswa->alamat}}">
					</div>

                    <div class="form-group">
						<label for="inputmentor">Bidang Peminatan</label>
						<input type="text" class="form-control" name="bidang_peminatan" id="bidang_pemintan" required="true" value="{{$data_mahasiswa->bidang_peminatan}}">
					</div>

					<div class="form-group">
						<label for="inputwebsite">Email</label>
						<input type="email" name="email" class="form-control" id="email" value="{{$data_mahasiswa->email}}">
					</div>

                    <div class="form-group">
						<label for="inputmentor">Telpon</label>
						<input type="text" class="form-control" name="telpon" id="telpon" required="true" value="{{$data_mahasiswa->telp}}">
					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
				</form>	
			</div>
@include ('footer')
</div>
</body>
</html>