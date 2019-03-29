@extends('layouts.app')

@section('content')
@include('layouts.navbar')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Tabel Dosen</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					@if(Session::has('alert-success'))
					    <div class="alert alert-success">
						{{ Session::get('alert-success') }}
						</div>
					@endif
					
					<table class="table">
						<tr>
						    <th>NIP</th>
						    <td>{{$data->nip}}</td>
						</tr>
						<tr>
							<th>NAMA</th>
						    <td>{{$data->nama}}</td>
						</tr>
						<tr>
						    <th>ALAMAT</th>
						    <td>{{$data->alamat}}</td>
						</tr>
						<tr>
						    <th rowspan="2">MATA KULIAH</th>
						    <td>55577855</td>
						</tr>
						<tr>
						    <td>55577855</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
