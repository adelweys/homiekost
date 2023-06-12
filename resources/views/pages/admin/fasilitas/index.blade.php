@extends('layouts.admin')

@section('title', 'Data Fasilitas Kos')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Data Fasilitas Kos</h1>
    <p class="mb-4">Berisi semua data kamar yang ada di website.</p>

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
                            <div class="p-2"><a href="{{ route('data-fasilitas.create') }}" class="btn btn-primary">
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
                    <table class="table table-bordered" width="100%" cellspacing="0" id="facyTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kos</th>
                                <th>Parkir Mobil</th>
                                <th>Parkir Kereta</th>
                                <th>Wifi</th>
                                <th>Dapur</th>
                                <th>Pos Penjagaan</th>
                                <th>Listrik / PLN</th>
                                <th>Air / PDAM</th>
                                <th>Kamar Mandi</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($facy as $aset)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $aset->cost->cost_name }}
                                </td>
                                <td>
                                    {{ $aset->car_park }}
                                </td>
                                <td>
                                    {{ $aset->bike_park }}
                                </td>
                                <td>
                                    {{ $aset->wifi }}
                                </td>
                                <td>
                                    {{ $aset->kitchen }}
                                </td>
                                <td>
                                    {{ $aset->security }}
                                </td>
                                <td>
                                    {{ $aset->electric }}
                                </td>
                                <td>
                                    {{ $aset->pam }}
                                </td>
                                <td>
                                    {{ $aset->bathroom }}
                                </td>
                                <td style="text-align: center;"><a
                                        href="{{ route('data-fasilitas.edit', $aset->id_cost) }}"
                                        class="btn btn-primary btn-icon-split">
                                        <span class="icon">
                                            <i class="fas fa-pencil-alt"></i>
                                        </span>
                                    </a>
                                </td>
                                <td style="text-align: center;">
                                    <form action="{{ url('data-fasilitas', $aset->id_cost) }}" class="d-inline"
                                        method="POST" id="delete{{ $aset->id_cost }}">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-danger"
                                            onclick="deleteData({{ $aset->id_cost }})">Hapus</button>
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
    <!-- /.container-fluid -->
    @endsection

    @push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
         $('#facyTable').DataTable();
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