@extends('layouts.admin')

@section('title', 'Data Kamar')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Data Kamar</h1>
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
                            <div class="p-2"><a href="{{ route('data-kamar.create') }}" class="btn btn-primary">
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
                    <table class="table table-bordered" width="100%" cellspacing="0" id="roomTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kos</th>
                                <th>Nama Ruangan</th>
                                <th>Ukuran Ruangan</th>
                                <th>Meja</th>
                                <th>Cermin Dandan</th>
                                <th>Closet</th>
                                <th>Tempat Tidur</th>
                                <th>Kipas Angin</th>
                                <th>AC</th>
                                <th>Listrik PLN</th>
                                <th>Air / PDAM</th>
                                <th>Harga</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($room as $i => $kamar)
                            <tr>
                                <td>
                                    {{ $i += 1 }}
                                </td>
                                <td>
                                    {{ $kamar->costs->cost_name }}
                                </td>
                                <td>
                                    {{ $kamar->room_name }}
                                </td>
                                <td>
                                    {{ $kamar->roomsize }}
                                </td>
                                <td>
                                    {{ $kamar->tableset }}
                                </td>
                                <td>
                                    {{ $kamar->wardrobe }}
                                </td>
                                <td>
                                    {{ $kamar->closet }}
                                </td>
                                <td>
                                    {{ $kamar->bed }}
                                </td>
                                <td>
                                    {{ $kamar->fan }}
                                </td>
                                <td>
                                    {{ $kamar->ac }}
                                </td>
                                <td>
                                    {{ $kamar->electric }}
                                </td>
                                <td>
                                    {{ $kamar->pam }}
                                </td>
                                <td>
                                    {{ $kamar->price }}
                                </td>
                                <td style="text-align: center;"><a
                                        href="{{ route('data-kamar.edit', $kamar->id_room) }}"
                                        class="btn btn-primary btn-icon-split">
                                        <span class="icon">
                                            <i class="fas fa-pencil-alt"></i>
                                        </span>
                                    </a>
                                </td>
                                <td style="text-align: center;">
                                    <form action="{{ url('data-kamar', $kamar->id_kamar) }}" class="d-inline"
                                        method="POST" id="delete{{ $kamar->id_kamar }}">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-danger"
                                            onclick="deleteData({{ $kamar->id_kamar }})">Hapus</button>
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
        $('#roomTable').DataTable();
    });

    function deleteData(id_room) {
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
                $('#delete'+id_room).submit();
            }
        })
    }
    </script>

    @endpush