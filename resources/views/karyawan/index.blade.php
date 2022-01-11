@extends('layouts/app')

@section('title', 'Data Gaji')

@section('container')
    <center>
        <h1 class="mt-5 mb-5"> Data Gaji </h1>
    </center>

    <div class="card text-center">
        <div class="card-header">
            <a href="tambahkaryawan" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped mt-2">
                <tr>
                    <th class="text-center">Id Pegawai</th>
                    <th class="text-center">nik</th>
                    <th class="text-center">Nama Pegawai</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">Action</th>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">3204320801010004</td>
                    <td class="text-center">Arief Rahman</td>
                    <td class="text-center">Laki Laki</td>
                    <td class="text-center">Karyawan Lepas<td>
                        <center>
                            <a class='btn btn-sm btn-primary mb-1' href=
                                "tambahkaryawan">
                                <i class='fas fa-edit'>Edit</i>
                            </a>
                            <br>
                            <a onclick="return confirm('Anda yakin untuk menghapus data yag anda pilih?')" class='btn btn-sm btn-danger' href=
                                "">
                                <i class='fas fa-trash'>Hapus</i>
                            </a>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">3204320801010004</td>
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
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">3204320801010004</td>
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
        </div>
      </div>    
@endsection