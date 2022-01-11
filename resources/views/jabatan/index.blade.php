@extends('layouts/app')

@section('title', 'Data Jabatan')

@section('container')
    <center>
        <h1 class="mt-5 mb-5"> Data Jabatan </h1>
    </center>

    <div class="card text-center">
        <div class="card-header">
            <a href="tambahjabatan" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped mt-2">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Jabatan</th>
                    <th class="text-center">Gajih Pokok</th>
                    <th class="text-center">Tunjangan Transportasi</th>
                    <th class="text-center">Tunjangan Makan</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Action</th>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">3204320801010004</td>
                    <td class="text-center">Arief Rahman</td>
                    <td class="text-center">Laki Laki</td>
                    <td class="text-center">Karyawan Lepas</td>
                    <td class="text-center"> 1.500.000</td>
                    <td>
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
        </div>
      </div>    
@endsection