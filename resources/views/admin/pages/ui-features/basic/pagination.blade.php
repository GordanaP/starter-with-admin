@extends('layouts.admin.vendor_dashboard')

@section('title', 'Pagination')

@section('content')
    @adminPageHeader(['title' => 'Pagination', 'item' => 'UI Elements'])
    @endadminPageHeader

    <div class="row">
        <div class="col-md-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic Paginations</h4>
                    <p class="card-description">Default bordered pagination</p>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Flat Pagination</h4>
                    <p class="card-description">Add calss <code>.flat</code></p>
                    <nav>
                        <ul class="pagination flat pagination-success">
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Separated Pagination</h4>
                    <p class="card-description">Add calss <code>.separated</code></p>
                    <nav>
                        <ul class="pagination separated pagination-danger">
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-right"></i></a>
                            </li>
                         </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Bordered Rounded</h4>
                    <p class="card-description">Add calss <code>.rounded</code></p>
                    <nav>
                        <ul class="pagination rounded">
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Flat Rounded Pagination</h4>
                    <p class="card-description">Add calss <code>.rounded-flat</code></p>
                    <nav>
                        <ul class="pagination rounded-flat pagination-success">
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Separated Rounded</h4>
                    <p class="card-description">Add calss <code>.rounded-separated</code></p>
                    <nav>
                        <ul class="pagination rounded-separated pagination-danger">
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-right"></i></a>
                            </li>
                         </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Left Position</h4>
                    <p class="card-description">Left Pagination</p>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-right"></i></a>
                            </li>
                         </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Center Position</h4>
                    <p class="card-description">Centered Pagination</p>
                    <nav>
                        <ul class="pagination d-flex justify-content-center pagination-success">
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-right"></i></a>
                            </li>
                         </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Right Position</h4>
                    <p class="card-description">Right Pagination</p>
                    <nav>
                        <ul class="pagination d-flex justify-content-end pagination-danger">
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">
                                <i class="mdi mdi-chevron-right"></i></a>
                            </li>
                         </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/paginate.js') }}"></script>
@endsection
