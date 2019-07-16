@extends('backend.base')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h5>Kelola Merk</h5>
            </div>
            <div class="col-12 col-sm-12 mb-3">
                <a class="btn btn-sm btn-primary" href="{{ route('brand.create') }}">Buat Merk Baru</a>
                @if(Session::has('alert-success'))
                    <div class="alert alert-success mt-3">
                        {{ Session::get('alert-success') }}
                    </div>
                @endif
            </div>

            @if(sizeof($brands) > 0)
            <form class="d-flex" action="{{ url()->current() }}" method="get">
                <div class="col-md-10 col-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="cari nama merk..." name="q" value="{{ $q }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="input-group mb-3">
                        <select class="form-control" name="order" onchange="this.form.submit()">
                            <option value="">Urutan Tampil</option>
                            <option value="asc" @if($orderBy == "asc")selected @endif>A-Z</option>
                            <option value="desc" @if($orderBy == "desc")selected @endif>Z-A</option>
                        </select>
                    </div>
                </div>
            </form>
            @endif

            @forelse($brands as $brand)
                <div class="col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2 mb-3">
                                    <img src="/assets/backend/images/faces/face2.jpg" alt="Image Franchise" class="img-fluid">
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="col-form-label">Nama:</div>
                                            <small>{{ $brand->name }}</small>
                                        </div>
                                        <div class="col-6">
                                            <div class="col-form-label">Alamat:</div>
                                            <small>{{ $brand->address }}</small>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <div class="col-form-label">Nomor Telfon:</div>
                                            <small>{{ $brand->phone }}</small>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <div class="col-form-label">NPWP:</div>
                                            <small>{{ $brand->npwp }}</small>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <div class="col-form-label">Status:</div>
                                            @if($brand->status == "1")
                                                <small><span class="badge badge-success">Aktif</span></small>
                                            @else
                                                <small><span class="badge badge-danger">Tidak Aktif</span></small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 mt-3">
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Aksi
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="{{ route('brand.edit', $brand->id) }}"><i class="fa fa-pencil"></i> Ubah</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('brand.delete') }}?id={{ $brand->id }}">
                                                @if($brand->status == "1")
                                                    <i class="fa fa-trash"></i> Tutup
                                                @else
                                                    <i class="fa fa-folder-open"></i> Buka
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Tidak ada merk ditemukan.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse

        </div>
    </div>
@endsection
