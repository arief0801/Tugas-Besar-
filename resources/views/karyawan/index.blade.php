@extends('layouts.app')

@section('content')
<br>
<center>
<h3>Data karyawan</h3>
<br>
    <a href="" class="btn btn-success">Tambah Data</a>
</center>
<br>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br/>
    @endif

    <table class="table table-bordered table-stripped">
        <thead class="thead-light" align="center">
            <tr>
                <th>No</th>
                <th>Nama karyawan</th>
                <th>Jenis Kelamin</th>
                <th>Alamt</th>
                <th colspan=2>Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Arief Rahman</td>
                <td>Laki Laki</td>
                <td>Bandung</td>
                <td>
                    <button>aksi</button>
                    <button>delete</button>
                </td>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@stop