@extends('layouts/app')

@section('title', 'Data Jabatan')

@section('container')
    <center>
        <h1 class="mt-5"> Data Jabatan </h1>
        <br>
        <br>
        <a href="tambahkaryawan" class="btn btn-success">Tambah Data</a>
        <br>
        <br>
        
    </center>
   
    <table class="table table-bordered table-striped mt-2">
        <tr>
            <th class="text-center">Id Pegawai</th>
            <th class="text-center">dsfsd</th>
            <th class="text-center">Nama Pegawai</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Jabatan</th>
            <th class="text-center">Action</th>
        </tr>
        <tr>
            <td class="text-center">1</td>
            <td class="text-center"></td>
            <td class="text-center">Arief Rahman</td>
            <td class="text-center">Laki Laki</td>
            <td class="text-center">Karyawan Lepas<td>
                <center>
                    <a class='btn btn-sm btn-primary mb-1' href=
                        "tambahkaryawan">
                        <i class='fas fa-edit'>Edit</i>
                    </a>
                    <br>
                    <a onclick="return confirm('hapus')" class='btn btn-sm btn-danger' href=
                        "">
                        <i class='fas fa-trash'>Hapus</i>
                    </a>
                </center>
            </td>
        </tr>
    </table>
    
@endsection