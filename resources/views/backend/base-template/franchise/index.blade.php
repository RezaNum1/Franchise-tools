@extends('backend.base')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h5>Manage Franchise</h5>
            </div>
            <div class="col-12 col-sm-12 mb-3">
                <a class="btn btn-sm btn-primary" href="#">Create Franchise</a>
            </div>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Franchise" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <select class="form-control">
                        <option value="desc">Descending</option>
                        <option value="asc">Ascending</option>
                    </select>
                </div>
            </div>
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
                                        <div class="col-form-label">Name:</div>
                                        <small>Franchise A</small>
                                    </div>
                                    <div class="col-6">
                                        <div class="col-form-label">Owner:</div>
                                        <small>Budi Raharjo</small>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="col-form-label">Location:</div>
                                        <small>Depok</small>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="col-form-label">Joined At:</div>
                                        <small>08-02-2019</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 mt-3">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#"><i class="fa fa-info"></i> Detail</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                                        <div class="col-form-label">Name:</div>
                                        <small>Franchise A</small>
                                    </div>
                                    <div class="col-6">
                                        <div class="col-form-label">Owner:</div>
                                        <small>Budi Raharjo</small>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="col-form-label">Location:</div>
                                        <small>Depok</small>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="col-form-label">Joined At:</div>
                                        <small>08-02-2019</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 mt-3">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#"><i class="fa fa-info"></i> Detail</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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
                                        <div class="col-form-label">Name:</div>
                                        <small>Franchise A</small>
                                    </div>
                                    <div class="col-6">
                                        <div class="col-form-label">Owner:</div>
                                        <small>Budi Raharjo</small>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="col-form-label">Location:</div>
                                        <small>Depok</small>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="col-form-label">Joined At:</div>
                                        <small>08-02-2019</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 mt-3">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#"><i class="fa fa-info"></i> Detail</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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
                                        <div class="col-form-label">Name:</div>
                                        <small>Franchise A</small>
                                    </div>
                                    <div class="col-6">
                                        <div class="col-form-label">Owner:</div>
                                        <small>Budi Raharjo</small>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="col-form-label">Location:</div>
                                        <small>Depok</small>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="col-form-label">Joined At:</div>
                                        <small>08-02-2019</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 mt-3">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#"><i class="fa fa-info"></i> Detail</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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
                                        <div class="col-form-label">Name:</div>
                                        <small>Franchise A</small>
                                    </div>
                                    <div class="col-6">
                                        <div class="col-form-label">Owner:</div>
                                        <small>Budi Raharjo</small>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="col-form-label">Location:</div>
                                        <small>Depok</small>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="col-form-label">Joined At:</div>
                                        <small>08-02-2019</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 mt-3">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#"><i class="fa fa-info"></i> Detail</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
