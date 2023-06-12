@extends('layouts.admin')

@section('title', 'Data Tenant')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Data Tenant</h1>
    <p class="mb-4">Berisi semua data tenant yang ada di website.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel berisi data tenant di website.</h6>
                    </div>
                    <div class="col-3">
                        <div class="d-flex flex-row-reverse">
                            <div class="p-2"><a href="{{ route('data-tenant.create') }}" class="btn btn-primary">
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
                    <table class="table table-bordered" width="100%" cellspacing="0" id="tenantTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kost</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>No Telp</th>
                                <th>Gender</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tenant as $i => $ten)
                            <tr>
                                <td>
                                    {{ $i += 1 }}
                                </td>
                                <td>
                                    {{ $ten->costs->cost_name }}
                                </td>
                                <td>
                                    {{ $ten->name }}
                                </td>
                                <td>
                                    {{ $ten->username }}
                                </td>
                                <td>
                                    {{ $ten->email }}
                                </td>
                                <td>
                                    {{ $ten->phone_no }}
                                </td>
                                <td>
                                    {{ $ten->gender }}
                                </td>
                                <td style="text-align: center;"><a
                                        href="{{ route('data-tenant.edit', $ten->id_tenant) }}"
                                        class="btn btn-primary btn-icon-split">
                                        <span class="icon">
                                            <i class="fas fa-pencil-alt"></i>
                                        </span>
                                    </a>
                                </td>
                                <td style="text-align: center;">
                                    <form action="{{ url('data-tenant', $ten->id_tenant) }}" class="d-inline"
                                        method="POST" id="delete{{ $ten->id_tenant }}">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-danger"
                                            onclick="deleteData({{ $ten->id_tenant }})">Hapus</button>
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
        $('#tenantTable').DataTable();
    });

    function deleteData(id_tenant) {
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
                $('#delete'+id_tenant).submit();
            }
        })
    }
    </script>

    @endpush