@extends('layouts.admin')

@section('title', 'Verifikasi Pengajuan Owner')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Data Owner Yang Perlu Diajukan</h1>
    <p class="mb-4">Berisi semua data owner yang perlu diajukan yang ada di website.</p>

    <!-- DataTales Example -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0" id="ownerTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Terima</th>
                        <th>Tolak</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($owner as $i => $own)
                    <tr>
                        <td>
                            {{ $i += 1 }}
                        </td>
                        <td>
                            {{ $own->created_at }}
                        </td>
                        <td>
                            {{ $own->name }}
                        </td>
                        <td>
                            {{ $own->email }}
                        </td>
                        <td style="text-align: center;"><a href="#" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Terima</span>
                            </a>
                        </td>
                        <td style="text-align: center;"><a href="#" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Tolak</span>
                            </a>
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
</script>

@endpush