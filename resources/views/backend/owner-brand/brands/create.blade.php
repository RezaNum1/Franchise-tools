@extends('backend.base')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.min.css" />
@endpush
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-8 align-items-stretch grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Buat Merk Baru</h4>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="forms-sample" action="{{ route('brand.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukkan nama merk anda</label>
                                <input type="text" class="form-control" placeholder="nama merk...." name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukkan NPWP merk perusahaan anda</label>
                                <input type="text" class="form-control" placeholder="alamat merk anda...." name="npwp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukkan nomor telfon perusahaan anda</label>
                                <input type="text" class="form-control" placeholder="alamat merk anda...." name="phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Masukkan alamat merk anda</label>
                                <textarea name="address" class="form-control" style="resize: vertical" rows="5"
                                          placeholder="masukkan alamat merk anda"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').selectize();
        })
    </script>
@endpush
