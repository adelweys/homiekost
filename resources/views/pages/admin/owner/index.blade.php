@extends('layouts.admin')

@section('title', 'Data Owner')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Data Owner</h1>
    <p class="mb-4">Berisi semua data owner yang ada di website.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel berisi data owner di website.</h6>
                    </div>
                    <div class="col-3">
                        <div class="d-flex flex-row-reverse">
                            <div class="p-2"><a href="{{ route('data-owner.create') }}" class="btn btn-primary">
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
                    <table class="table table-bordered" width="100%" cellspacing="0" id="ownerTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($owner as $i => $own)
                            <tr>
                                <td>
                                    {{ $i += 1 }}
                                </td>
                                <td>
                                    {{ $own->name }}
                                </td>
                                <td>
                                    {{ $own->email }}
                                </td>
                                <td>
                                    {{ $own->created_at }}
                                </td>
                                <td style="text-align: center;"><a href="{{ route('data-owner.edit', $own->id) }}"
                                        class="btn btn-primary btn-icon-split">
                                        <span class="icon">
                                            <i class="fas fa-pencil-alt"></i>
                                        </span>
                                    </a>
                                </td>
                                <td style="text-align: center;">
                                    <form action="{{ url('data-owner', $own->id) }}" class="d-inline" method="POST"
                                        id="delete{{ $own->id }}">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-danger"
                                            onclick="deleteData({{ $own->id }})">Hapus</button>
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
        $('#ownerTable').DataTable();
    });

    function deleteData(id) {
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
                $('#delete'+id).submit();
            }
        })
    }
    </script>

    @endpush