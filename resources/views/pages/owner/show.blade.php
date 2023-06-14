@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Penyewa Kos {{ $cost->cost_name }}</h6>
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
                                <th>Nama Penyewa</th>
                                <th>Durasi</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sewa as $sewas)
                                <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $sewas->user->name }}
                                        </td>
                                        <td>
                                            {{ $sewas->durasi }}
                                        </td>
                                        <td>
                                            {{ $sewas->harga }}
                                        </td>
                                        <td>
                                            {{ $sewas->status }}
                                        </td>
                                        <td>
                                            @if ($sewas->status == 'nonaktif')
                                                <form action="{{ route('owner.update', $sewas->id) }}" method="POST">
                                                    @method('patch')
                                                    @csrf
                                                    <input type="hidden" name="status" value="aktif">
                                                    <button type="submit" class="btn btn-success">Aktifkan</button>
                                                </form>
                                            @elseif($sewas->status == 'aktif')
                                                <form action="{{ route('owner.update', $sewas->id) }}" method="POST">
                                                    @method('patch')
                                                    @csrf
                                                    <input type="hidden" name="status" value="nonaktif">
                                                    <button type="submit" class="btn btn-success">Non-Aktifkan</button>
                                                </form>
                                            @endif
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

</div>
@endsection