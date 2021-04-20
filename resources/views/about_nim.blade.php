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
	<table class="table table-hover">
				<thead>
					<tr>
						<!-- <td>No</td> -->
						<td>No</td>
						<td>NIM</td>
						<td>Nama</td>
						<td>Alamat</td>
						<td>Bidang Peminatan</td>
						<td>Email</td>
						<td>Telpon</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						@foreach($data_mahasiswa as $mahasiswa)
						<td>{{$loop->iteration}}</td>
						<td>{{$mahasiswa->nim}}</td>
						<td>{{$mahasiswa->nama}}</td>
						<td>{{$mahasiswa->alamat}}</td>
						<td>{{$mahasiswa->bidang_peminatan}}</td>
						<td>{{$mahasiswa->email}}</td>
						<td>{{$mahasiswa->telp}}</td>
						<td>
							<a href="/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
							<a href="/{{$mahasiswa->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
						</td>
						@endforeach
					</tr>
				</tbody>
	</table>
@include ('footer')
</div>
</body>
</html>