@extends('layouts.admin')

@section('title', 'Data Kos')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Data Kos</h1>
    <p class="mb-4">Berisi semua data kos yang ada di website.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel berisi data kos di website.</h6>
                    </div>
                    <div class="col-3">
                        <div class="d-flex flex-row-reverse">
                            <div class="p-2"><a href="{{ route('data-kos.create') }}" class="btn btn-primary">
                                    <span class="icon">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0" id="costTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Pemilik Kos</th>
                                <th>Nama Kos</th>
                                <th>Total Kamar</th>
                                <th>Tipe Kos</th>
                                <th>Kamar Tersedia</th>
                                <th>Lokasi Kos</th>
                                <th>Alamat</th>
                                <th>Deskripsi</th>
                                <th>Kontak Person</th>
                                <th>Jam Malam</th>
                                <th>Titik Lokasi Long</th>
                                <th>Titik Lokasi Lat</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vekos as $i => $kos)
                            <tr>
                                <td>
                                    {{ $i + 1 }}
                                </td>
                                <td>
                                    {{ $kos->name }}
                                </td>
                                <td>
                                    {{ $kos->cost_name }}
                                </td>
                                <td>
                                    {{ $kos->total_kamar }}
                                </td>
                                <td>
                                    {{ $kos->cost_type }}
                                </td>
                                <td>
                                    {{ $kos->available_room }}
                                </td>
                                <td>
                                    {{ $kos->cost_location }}
                                </td>
                                <td>
                                    {{ $kos->cost_address }}
                                </td>
                                <td>
                                    {{ $kos->description }}
                                </td>
                                <td>
                                    {{ $kos->contact_person }}
                                </td>
                                <td>
                                    {{ $kos->night_limit }}
                                </td>
                                <td>
                                    {{ $kos->long_add }}
                                </td>
                                <td>
                                    {{ $kos->lat_add }}
                                </td>
                                <td style="text-align: center;">
                                    <a href="{{ route('data-kos.edit', $kos->id) }}" class="btn btn-primary btn-icon-split">
                                        <span class="icon">
                                            <i class="fas fa-pencil-alt"></i>
                                        </span>
                                    </a>
                                </td>
                                <td style="text-align: center;">
                                    <form action="{{ url('data-kos', $kos->id) }}" class="d-inline" method="POST"
                                        id="delete{{ $kos->id }}">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-danger"
                                            onclick="deleteData({{ $kos->id }})">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    @if (session('alert'))
    <script>
        Swal.fire({
            icon: '{{ session('alert')['type'] }}',
            title: '{{ session('alert')['title'] }}',
            text: '{{ session('alert')['message'] }}',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    </script>
@endif

    <!-- /.container-fluid -->
    @endsection

    @push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
        $('#costTable').DataTable();
    });

    function deleteData(id_cost) {
        Swal.fire({
        title: 'WARNING!',
        text: 'Yakin, ingin melanjutkan?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yakin',
        cancelButtonText: 'Batal',
        }).then((result) => {
            if(result.value) {
                $('#delete'+id_cost).submit();
            }
        })
    }
    

    </script>

    @endpush