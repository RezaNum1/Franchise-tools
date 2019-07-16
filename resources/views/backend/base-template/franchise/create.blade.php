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
                        <h4 class="card-title">Create Franchise</h4>
                        <form class="forms-sample" action="#" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Franchise Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Brands</label>
                                <select name="owner">
                                    <option value="">Select a Brand</option>
                                    <option value="1">Ascending</option>
                                    <option value="23">Decem</option>
                                    <option value="2323">asdsad</option>
                                    <option value="324">ikfsjisdf</option>
                                    <option value="322134">ikfsjikjhhjsdf</option>
                                    <option value="32fds4">ikfsjhkisdf</option>
                                    <option value="32sfd4">ikfsluhtjisdf</option>
                                    <option value="32d4">ikghgffsjisdf</option>
                                    <option value="32fddf4">sdfsfd</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Owner Account</label>
                                <select name="owner">
                                    <option value="">Select Franchise Owner Account</option>
                                    <option value="1">Ascending</option>
                                    <option value="23">Decem</option>
                                    <option value="2323">asdsad</option>
                                    <option value="324">ikfsjisdf</option>
                                    <option value="322134">ikfsjikjhhjsdf</option>
                                    <option value="32fds4">ikfsjhkisdf</option>
                                    <option value="32sfd4">ikfsluhtjisdf</option>
                                    <option value="32d4">ikghgffsjisdf</option>
                                    <option value="32fddf4">sdfsfd</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Franchise Owner</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
