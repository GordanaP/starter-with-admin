@extends('layouts.admin')

@section('title', 'Widgets')

@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/jquery-bar-rating/css-stars.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="mdi mdi-cube text-danger icon-lg"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Total Revenue</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">$6,560</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                        <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="mdi mdi-receipt text-warning icon-lg"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Orders</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">3455</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                        <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="mdi mdi-poll-box text-success icon-lg"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Sales</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">5693</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                        <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <i class="mdi mdi-account-box-multiple text-info icon-lg"></i>
                        </div>
                        <div class="float-right">
                            <p class="mb-0 text-right">Employees</p>
                            <div class="fluid-container">
                                <h3 class="font-weight-medium text-right mb-0">246</h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                        <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('vendor/purple-admin-pro/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">
                        Weekly Sales <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">$ 15,0000</h2>
                    <h6 class="card-text">Increased by 60%</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('vendor/purple-admin-pro/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">
                        Weekly Orders <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">45,6334</h2>
                    <h6 class="card-text">Decreased by 10%</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('vendor/purple-admin-pro/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">
                        Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">95,5741</h2>
                    <h6 class="card-text">Increased by 5%</h6>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin">
            <div class="card card-statistics">
                <div class="row">
                    <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6 border-right">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                <i class="mdi mdi-account-multiple-outline text-primary mr-0 mr-sm-4 icon-lg"></i>
                                <div class="wrapper text-center text-sm-left">
                                    <p class="card-text mb-0">New Users</p>
                                    <div class="fluid-container">
                                        <h3 class="mb-0 font-weight-medium">65,650</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6 border-right">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                <i class="mdi mdi-checkbox-marked-circle-outline text-primary mr-0 mr-sm-4 icon-lg"></i>
                                <div class="wrapper text-center text-sm-left">
                                    <p class="card-text mb-0">New Feedbacks</p>
                                    <div class="fluid-container">
                                        <h3 class="mb-0 font-weight-medium">32,604</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6 border-right">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                <i class="mdi mdi-trophy-outline text-primary mr-0 mr-sm-4 icon-lg"></i>
                                <div class="wrapper text-center text-sm-left">
                                    <p class="card-text mb-0">Employees</p>
                                    <div class="fluid-container">
                                        <h3 class="mb-0 font-weight-medium">17,583</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                                <i class="mdi mdi-target text-primary mr-0 mr-sm-4 icon-lg"></i>
                                <div class="wrapper text-center text-sm-left">
                                    <p class="card-text mb-0">Total Sales</p>
                                    <div class="fluid-container">
                                        <h3 class="mb-0 font-weight-medium">61,119</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Tickets</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Assignee </th>
                                    <th> Subject </th>
                                    <th> Status </th>
                                    <th> Last Update </th>
                                    <th> Tracking ID </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face1.jpg') }}" class="mr-2" alt="image"> David Grey
                                    </td>
                                    <td> Fund is not recieved </td>
                                    <td>
                                        <label class="badge badge-gradient-success">DONE</label>
                                    </td>
                                    <td> Dec 5, 2017 </td>
                                    <td> WD-12345 </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face2.jpg') }}" class="mr-2" alt="image"> Stella Johnson
                                    </td>
                                    <td> High loading time </td>
                                    <td>
                                        <label class="badge badge-gradient-warning">PROGRESS</label>
                                    </td>
                                    <td> Dec 12, 2017 </td>
                                    <td> WD-12346 </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face3.jpg') }}" class="mr-2" alt="image"> Marina Michel
                                    </td>
                                    <td> Website down for one week </td>
                                    <td>
                                        <label class="badge badge-gradient-info">ON HOLD</label>
                                    </td>
                                    <td> Dec 16, 2017 </td>
                                    <td> WD-12347 </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face4.jpg') }}" class="mr-2" alt="image"> John Doe
                                    </td>
                                    <td> Loosing control on server </td>
                                    <td>
                                        <label class="badge badge-gradient-danger">REJECTED</label>
                                    </td>
                                    <td> Dec 3, 2017 </td>
                                    <td> WD-12348 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <i class="mdi mdi-clock icon-lg text-primary d-flex align-items-center"></i>
                        <div class="d-flex flex-column ml-4">
                            <div class="d-flex flex-column">
                                <p class="mb-0">Bounce rate</p>
                                <h4 class="font-weight-bold">32.16%</h4>
                            </div>
                            <small class="text-muted">65.45% on average time</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <i class="mdi mdi-cart-outline icon-lg text-success d-flex align-items-center"></i>
                        <div class="d-flex flex-column ml-4">
                            <div class="d-flex flex-column">
                                <p class="mb-0">Today sales</p>
                                <h4 class="font-weight-bold">$489,271</h4>
                            </div>
                            <small class="text-muted">$489,271 before tax</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <i class="mdi mdi-laptop icon-lg text-warning d-flex align-items-center"></i>
                        <div class="d-flex flex-column ml-4">
                            <div class="d-flex flex-column">
                                <p class="mb-0">Unique visits</p>
                                <h4 class="font-weight-bold">74.50%</h4>
                            </div>
                            <small class="text-muted">80% average duration</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <i class="mdi mdi-earth icon-lg text-danger d-flex align-items-center"></i>
                        <div class="d-flex flex-column ml-4">
                            <div class="d-flex flex-column">
                                <p class="mb-0">Today's visits</p>
                                <h4 class="font-weight-bold">6,775,440</h4>
                            </div>
                            <small class="text-muted">45% higher yesterday</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                        <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                    </div>
                    <canvas id="visit-sale-chart" class="mt-4"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Traffic Sources</h4>
                    <canvas id="traffic-chart"></canvas>
                    <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 grid-margin stretch-card">
            <div class="card card-statistics social-card card-default">
                <div class="card-header header-sm">
                    <div class="d-flex align-items-center">
                        <div class="wrapper d-flex align-items-center media-info text-facebook">
                            <i class="mdi mdi-facebook icon-md"></i>
                            <h2 class="card-title ml-3">Facebook</h2>
                        </div>
                        <div class="wrapper ml-auto action-bar">
                            <i class="mdi mdi-share-variant mr-3"></i>
                            <i class="mdi mdi-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <img class="d-block img-sm rounded-circle mx-auto mb-2" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face1.jpg') }}" alt="profile image">
                    <p class="text-center user-name">Mathilda Young</p>
                    <p class="text-center mb-2 comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                    <small class="d-block mt-4 text-center posted-date">06 May 2018</small>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 grid-margin stretch-card">
            <div class="card card-statistics social-card card-default">
                <div class="card-header header-sm">
                    <div class="d-flex align-items-center">
                        <div class="wrapper d-flex align-items-center media-info text-linkedin">
                            <i class="mdi mdi-linkedin icon-md"></i>
                            <h2 class="card-title ml-3">Linkedin</h2>
                        </div>
                        <div class="wrapper ml-auto action-bar">
                            <i class="mdi mdi-share-variant mr-3"></i>
                            <i class="mdi mdi-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <img class="d-block img-sm rounded-circle mx-auto mb-2" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face2.jpg') }}" alt="profile image">
                    <p class="text-center user-name">Cameron Fuller</p>
                    <p class="text-center mb-2 comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                    <small class="d-block mt-4 text-center posted-date">26 Nov 2018</small>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 grid-margin stretch-card">
            <div class="card card-statistics social-card card-default">
                <div class="card-header header-sm">
                    <div class="d-flex align-items-center">
                        <div class="wrapper d-flex align-items-center media-info text-twitter">
                            <i class="mdi mdi-twitter icon-md"></i>
                            <h2 class="card-title ml-3">Twitter</h2>
                        </div>
                        <div class="wrapper ml-auto action-bar">
                            <i class="mdi mdi-share-variant mr-3"></i>
                            <i class="mdi mdi-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <img class="d-block img-sm rounded-circle mx-auto mb-2" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face3.jpg') }}" alt="profile image">
                    <p class="text-center user-name">Sara Castillo</p>
                    <p class="text-center mb-2 comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                    <small class="d-block mt-4 text-center posted-date">11 Jun 2018</small>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row align-items-top">
                        <i class="mdi mdi-facebook text-facebook icon-md"></i>
                        <div class="ml-3">
                            <h6 class="text-facebook">2.62 Subscribers</h6>
                            <p class="mt-2 text-muted card-text">You main list growing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row align-items-top">
                        <i class="mdi mdi-linkedin text-linkedin icon-md"></i>
                        <div class="ml-3">
                            <h6 class="text-linkedin">5k connections</h6>
                            <p class="mt-2 text-muted card-text">You main list growing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row align-items-top">
                        <i class="mdi mdi-twitter text-twitter icon-md"></i>
                        <div class="ml-3">
                            <h6 class="text-twitter">3k followers</h6>
                            <p class="mt-2 text-muted card-text">You main list growing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body pb-0">
                    <p class="text-muted">Total Invoice</p>
                    <div class="d-flex align-items-center">
                        <h4 class="font-weight-semibold">$65,650</h4>
                        <h6 class="text-success font-weight-semibold ml-2">+876</h6>
                    </div>
                    <small class="text-muted">This has been a great update.</small>
                </div>
                <canvas class="mt-2" height="40" id="statistics-graph-1"></canvas>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body pb-0">
                    <p class="text-muted">Total expenses</p>
                    <div class="d-flex align-items-center">
                        <h4 class="font-weight-semibold">$65,650</h4>
                        <h6 class="text-danger font-weight-semibold ml-2">-43</h6>
                    </div>
                    <small class="text-muted">view statement</small>
                </div>
                <canvas class="mt-2" height="40" id="statistics-graph-3"></canvas>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body pb-0">
                    <p class="text-muted">Unpaid Invoices</p>
                    <div class="d-flex align-items-center">
                        <h4 class="font-weight-semibold">$2,542</h4>
                        <h6 class="text-success font-weight-semibold ml-2">+876</h6>
                    </div>
                    <small class="text-muted">view history</small>
                </div>
                <canvas class="mt-2" height="40" id="statistics-graph-2"></canvas>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body pb-0">
                    <p class="text-muted">Amount Due</p>
                    <div class="d-flex align-items-center">
                        <h4 class="font-weight-semibold">$3450</h4>
                        <h6 class="text-success font-weight-semibold ml-2">+23</h6>
                    </div>
                    <small class="text-muted">65% lower growth</small>
                </div>
                <canvas class="mt-2" height="40" id="statistics-graph-4"></canvas>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Project Status</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Name </th>
                                    <th> Due Date </th>
                                    <th> Progress </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td> Herman Beck </td>
                                    <td> May 15, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Messsy Adam </td>
                                    <td> Jul 01, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 3 </td>
                                    <td> John Richards </td>
                                    <td> Apr 12, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 4 </td>
                                    <td> Peter Meggik </td>
                                    <td> May 15, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 5 </td>
                                    <td> Edward </td>
                                    <td> May 03, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 5 </td>
                                    <td> Ronald </td>
                                    <td> Jun 05, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="text-gray">TUESDAY, APR 9, 2018</p>
                    <ul class="bullet-line-list pb-3">
                        <li>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <img class="img-xs rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face9.jpg') }}" alt="profile image">
                                    <div class="ml-3">
                                        <h6 class="mb-0">Snapchat Hosts</h6>
                                        <small class="text-muted"> Admin Dashboard </small>
                                    </div>
                                </div>
                                <div>
                                    <small class="d-block mb-0">06</small>
                                    <small class="text-muted d-block">pm</small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <img class="img-xs rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face3.jpg') }}" alt="profile image">
                                    <div class="ml-3">
                                        <h6 class="mb-0">Revise Wireframes</h6>
                                        <small class="text-muted"> Company website </small>
                                    </div>
                                </div>
                                <div>
                                    <small class="d-block mb-0">11</small>
                                    <small class="text-muted d-block">pm</small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <img class="img-xs rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face4.jpg') }}" alt="profile image">
                                    <div class="ml-3">
                                        <h6 class="mb-0">Expert instruction</h6>
                                        <small class="text-muted"> Profile App </small>
                                    </div>
                                </div>
                                <div>
                                    <small class="d-block mb-0">12</small>
                                    <small class="text-muted d-block">pm</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <p class="text-gray mt-4">TUESDAY, APR 10, 2018</p>
                    <ul class="bullet-line-list">
                        <li>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <img class="img-xs rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face7.jpg') }}" alt="profile image">
                                    <div class="ml-3">
                                        <h6 class="mb-0">Great Logo</h6>
                                        <small class="text-muted"> admin logo </small>
                                    </div>
                                </div>
                                <div>
                                    <small class="d-block mb-0">04</small>
                                    <small class="text-muted d-block">pm</small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <img class="img-xs rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face25.jpg') }}" alt="profile image">
                                    <div class="ml-3">
                                        <h6 class="mb-0">Branding Mockup</h6>
                                        <small class="text-muted"> Company website </small>
                                    </div>
                                </div>
                                <div>
                                    <small class="d-block mb-0">08</small>
                                    <small class="text-muted d-block">pm</small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <img class="img-xs rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face12.jpg') }}" alt="profile image">
                                    <div class="ml-3">
                                        <h6 class="mb-0">Awesome Mobile App</h6>
                                        <small class="text-muted"> Profile App </small>
                                    </div>
                                </div>
                                <div>
                                    <small class="d-block mb-0">09</small>
                                    <small class="text-muted d-block">pm</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 d-flex align-items-center">
                            <canvas id="UsersDoughnutChart" class="400x160 mb-4 mb-md-0" height="200"></canvas>
                        </div>
                        <div class="col-md-7">
                            <h4 class="card-title font-weight-medium mb-0 d-none d-md-block">Active Users</h4>
                            <div class="wrapper mt-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <div class="d-flex align-items-center">
                                      <p class="mb-0 font-weight-medium">67,550</p>
                                      <small class="text-muted ml-2">Email account</small>
                                    </div>
                                    <p class="mb-0 font-weight-medium">80%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="wrapper mt-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 font-weight-medium">21,435</p>
                                        <small class="text-muted ml-2">Requests</small>
                                    </div>
                                    <p class="mb-0 font-weight-medium">34%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h4 class="card-title font-weight-medium mb-3">Amount Due</h4>
                            <h1 class="font-weight-medium mb-0">$5998</h1>
                            <p class="text-muted">Milestone Completed</p>
                            <p class="mb-0">Payment for next week</p>
                        </div>
                        <div class="col-md-5 d-flex align-items-end mt-4 mt-md-0">
                            <canvas id="conversionBarChart" height="150"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 grid-margin stretch-card">
            <!--weather card-->
            <div class="card card-weather">
                <div class="card-body">
                    <div class="weather-date-location">
                        <h3>Monday</h3>
                        <p class="text-gray">
                            <span class="weather-date">25 October, 2016</span>
                            <span class="weather-location">London, UK</span>
                        </p>
                    </div>
                    <div class="weather-data d-flex">
                        <div class="mr-auto">
                            <h4 class="display-3">21 <span class="symbol">&deg;</span>C</h4>
                            <p> Mostly Cloudy </p>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="d-flex weakly-weather">
                        <div class="weakly-weather-item">
                            <p class="mb-0"> Sun </p>
                            <i class="mdi mdi-weather-cloudy"></i>
                            <p class="mb-0"> 30° </p>
                        </div>
                        <div class="weakly-weather-item">
                            <p class="mb-1"> Mon </p>
                            <i class="mdi mdi-weather-hail"></i>
                            <p class="mb-0"> 31° </p>
                        </div>
                        <div class="weakly-weather-item">
                            <p class="mb-1"> Tue </p>
                            <i class="mdi mdi-weather-partlycloudy"></i>
                            <p class="mb-0"> 28° </p>
                        </div>
                        <div class="weakly-weather-item">
                            <p class="mb-1"> Wed </p>
                            <i class="mdi mdi-weather-pouring"></i>
                            <p class="mb-0"> 30° </p>
                        </div>
                        <div class="weakly-weather-item">
                            <p class="mb-1"> Thu </p>
                            <i class="mdi mdi-weather-pouring"></i>
                            <p class="mb-0"> 29° </p>
                        </div>
                        <div class="weakly-weather-item">
                            <p class="mb-1"> Fri </p>
                            <i class="mdi mdi-weather-snowy-rainy"></i>
                            <p class="mb-0"> 31° </p>
                        </div>
                        <div class="weakly-weather-item">
                            <p class="mb-1"> Sat </p>
                            <i class="mdi mdi-weather-snowy"></i>
                            <p class="mb-0"> 32° </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--weather card ends-->
        </div>
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-white">Todo</h4>
                    <div class="add-items d-flex">
                        <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                        <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-tasks">Add</button>
                    </div>
                    <div class="list-wrapper">
                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Meeting with Alisa
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked> Call John
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Create invoice
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Print Statements
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked> Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Pick up kids from school
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row flex-wrap">
                        <img src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face11.jpg') }}" class="img-lg rounded" alt="profile image" />
                        <div class="ml-3">
                            <h6>Maria</h6>
                            <p class="text-muted">maria@gmail.com</p>
                            <p class="mt-2 text-success font-weight-bold">Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row flex-wrap">
                        <img src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face9.jpg') }}" class="img-lg rounded" alt="profile image" />
                        <div class="ml-3">
                            <h6>Thomas Edison</h6>
                            <p class="text-muted">thomas@gmail.com</p>
                            <p class="mt-2 text-success font-weight-bold">Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row flex-wrap">
                        <img src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face12.jpg') }}" class="img-lg rounded" alt="profile image" />
                        <div class="ml-3">
                            <h6>Edward</h6>
                            <p class="text-muted">edward@gmail.com</p>
                            <p class="mt-2 text-success font-weight-bold">Tester</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <img class="card-img-top" src="{{ asset('vendor/purple-admin-pro/assets/images/dashboard/img_1.jpg') }}" alt="card images">
                <div class="card-body pb-0">
                    <p class="text-muted">RAGNAROCK- Museet for pop, Roskilde, Denmark</p>
                    <h5>It’s good to start or finish the day with delicious pancakes :)</h5>
                    <div class="d-flex align-items-center justify-content-between text-muted border-top py-3 mt-3">
                        <p class="mb-0">Published on May 23, 2018</p>
                        <div class="wrapper d-flex align-items-center">
                            <small class="mr-2">93</small>
                            <i class="mdi mdi-heart-outline"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <img class="card-img-top" src="{{ asset('vendor/purple-admin-pro/assets/images/dashboard/img_2.jpg') }}" alt="card images">
                <div class="card-body pb-0">
                    <p class="text-muted">RAGNAROCK- Museet for pop, Roskilde, Denmark</p>
                    <h5>It’s good to start or finish the day with delicious pancakes :)</h5>
                    <div class="d-flex align-items-center justify-content-between text-muted border-top py-3 mt-3">
                        <p class="mb-0">Published on May 23, 2018</p>
                        <div class="wrapper d-flex align-items-center">
                            <small class="mr-2">93</small>
                            <i class="mdi mdi-heart-outline"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <img class="card-img-top" src="{{ asset('vendor/purple-admin-pro/assets/images/dashboard/img_3.jpg') }}" alt="card images">
                <div class="card-body pb-0">
                    <p class="text-muted">RAGNAROCK- Museet for pop, Roskilde, Denmark</p>
                    <h5>It’s good to start or finish the day with delicious pancakes :)</h5>
                    <div class="d-flex align-items-center justify-content-between text-muted border-top py-3 mt-3">
                        <p class="mb-0">Published on May 23, 2018</p>
                        <div class="wrapper d-flex align-items-center">
                            <small class="mr-2">93</small>
                            <i class="mdi mdi-heart-outline"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card aligner-wrapper">
                <div class="card-body">
                    <div class="absolute left top bottom h-100 v-strock-2 bg-success"></div>
                    <p class="text-muted mb-2">Unpaid Invoices</p>
                    <div class="d-flex align-items-center">
                        <h1 class="font-weight-medium mb-2">$2,156</h1>
                        <h5 class="font-weight-medium text-success ml-2">−14.2%</h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-success dot-indicator"></div>
                        <p class="text-muted mb-0 ml-2">This month unpaid invoices $567</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card aligner-wrapper">
                <div class="card-body">
                    <div class="absolute left top bottom h-100 v-strock-2 bg-primary"></div>
                    <p class="text-muted mb-2">Gross volume</p>
                    <div class="d-flex align-items-center">
                        <h1 class="font-weight-medium mb-2">$1,520</h1>
                        <h5 class="font-weight-medium text-success ml-2">+20.7%</h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-primary dot-indicator"></div>
                        <p class="text-muted mb-0 ml-2">Next payout -23 aug- $233</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card aligner-wrapper">
                <div class="card-body">
                    <div class="absolute left top bottom h-100 v-strock-2 bg-danger"></div>
                    <p class="text-muted mb-2">Average revenue</p>
                    <div class="d-flex align-items-center">
                        <h1 class="font-weight-medium mb-2">$6.60</h1>
                        <h5 class="font-weight-medium text-success ml-2">+296.6%</h5>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-danger dot-indicator"></div>
                        <p class="text-muted mb-0 ml-2">Payout for next week $100 </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 grid-margin stretch-card">
            <div class="card review-card">
                <div class="card-header header-sm d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Reviews</h4>
                    <div class="wrapper d-flex align-items-center">
                        <p class="mb-0">23 New Reviews</p>
                        <div class="dropdown">
                            <button class="btn btn-transparent icon-btn pr-0" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Yesterday</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body no-gutter">
                    <div class="list-item">
                        <div class="preview-image">
                            <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face10.jpg') }}" alt="profile image">
                        </div>
                        <div class="content">
                            <div class="d-flex align-items-center">
                                <h6 class="product-name">Air Pod</h6>
                                <small class="time ml-3 d-none d-sm-block">08.34 AM</small>
                                <div class="ml-auto">
                                    <select id="review-rating-1" name="rating" autocomplete="off">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="user-name">Christine :</p>
                                <p class="review-text d-block">The brand apple is original !</p>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="preview-image">
                            <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face13.jpg') }}" alt="profile image">
                        </div>
                        <div class="content">
                            <div class="d-flex align-items-center">
                                <h6 class="product-name">Macbook</h6>
                                <small class="time ml-3 d-none d-sm-block">12.56 PM</small>
                                <div class="ml-auto">
                                    <select id="review-rating-2" name="rating" autocomplete="off">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="user-name">Arthur Cole :</p>
                                <p class="review-text d-block">The brand apple is original also the iphone x.</p>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="preview-image">
                            <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face1.jpg') }}" alt="profile image">
                        </div>
                        <div class="content">
                            <div class="d-flex align-items-center">
                                <h6 class="product-name">Apple watch</h6>
                                <small class="time ml-3 d-none d-sm-block">09.24 AM</small>
                                <div class="ml-auto">
                                    <select id="review-rating-3" name="rating" autocomplete="off">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="user-name">James Tate :</p>
                                <p class="review-text d-block">The brand apple is original.</p>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="preview-image">
                            <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face11.jpg') }}" alt="profile image">
                        </div>
                        <div class="content">
                            <div class="d-flex align-items-center">
                                <h6 class="product-name">Homepod</h6>
                                <small class="time ml-3 d-none d-sm-block">5.12 AM</small>
                                <div class="ml-auto">
                                    <select id="review-rating-4" name="rating" autocomplete="off">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="user-name">Clyde Parker :</p>
                                <p class="review-text d-block">The brand apple is original also the iphone !!</p>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="preview-image">
                            <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face12.jpg') }}" alt="profile image">
                        </div>
                        <div class="content">
                            <div class="d-flex align-items-center">
                                <h6 class="product-name">Imac</h6>
                                <small class="time ml-3 d-none d-sm-block">10.00 AM</small>
                                <div class="ml-auto">
                                    <select id="review-rating-5" name="rating" autocomplete="off">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="user-name">James Tate :</p>
                                <p class="review-text d-block">The brand apple is original.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 grid-margin stretch-card">
            <div class="row flex-grow w-100">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Traffic source</h4>
                            <div class="row">
                                <div class="col-md-6 aligner-wrapper mb-4 mb-md-0">
                                    <canvas class="my-auto" id="trafficSourceDoughnutChart" height="250"></canvas>
                                    <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                                        <h4 class="text-center mb-0">60%</h4>
                                    </div>
                                </div>
                                <div class="col-md-6 legend-wrapper">
                                    <div class="d-flex mb-3">
                                        <div class="dot-indicator bg-secondary mt-1 mr-2"></div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <p class="mb-0">Google</p>
                                            <small class="text-muted">67,342 (78.05%)</small>
                                        </div>
                                    </div>
                                    <div class="d-flex my-3">
                                        <div class="dot-indicator bg-success mt-1 mr-2"></div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <p class="mb-0">Yahoo</p>
                                            <small class="text-muted">67,342 (78.05%)</small>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <div class="dot-indicator bg-danger mt-1 mr-2"></div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <p class="mb-0">Bing</p>
                                            <small class="text-muted">67,342 (78.05%)</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Storage Space</h4>
                            <small class="text-muted">Used space</small>
                            <h4>45.670/50.000</h4>
                            <div class="progress grouped">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between border-top mt-4 pt-4">
                                <div class="d-flex">
                                    <div class="dot-indicator bg-primary mt-1 mr-2"></div>
                                    <div class="d-flex flex-column">
                                        <p class="mb-0">Documents</p>
                                        <small class="text-gray">18.00 GB</small>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="dot-indicator bg-success mt-1 mr-2"></div>
                                    <div class="d-flex flex-column">
                                        <p class="mb-0">Images</p>
                                        <small class="text-gray">10.00 GB</small>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="dot-indicator bg-danger mt-1 mr-2"></div>
                                    <div class="d-flex flex-column">
                                        <p class="mb-0">Mail</p>
                                        <small class="text-gray">02.00 GB</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Activity</h4>
                        <i class="mdi mdi-dots-vertical"></i>
                    </div>
                    <p class="card-description">What's people doing right now</p>
                    <div class="list d-flex align-items-center border-bottom py-3">
                        <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face4.jpg') }}" alt="">
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0">
                              <b>Dobrick </b>posted in Material
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <p class="mb-0">That's awesome!</p>
                                </div>
                                <small class="text-muted ml-auto">2 hours ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center border-bottom py-3">
                        <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face5.jpg') }}" alt="">
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0">
                                <b>Stella </b>posted in Material</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <p class="mb-0">That's awesome!</p>
                                </div>
                                <small class="text-muted ml-auto">3 hours ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center border-bottom py-3">
                        <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face7.jpg') }}" alt="">
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0">
                                <b>Peter </b>posted in Material
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <p class="mb-0">That's Great!</p>
                                </div>
                                <small class="text-muted ml-auto">1 hours ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center pt-3">
                        <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face6.jpg') }}" alt="">
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0">
                                <b>Nateila </b>posted in Material
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <p class="mb-0">That's awesome!</p>
                                </div>
                                <small class="text-muted ml-auto">1 hours ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recomended</h4>
                    <div class="wrapper d-flex align-items-center py-2 border-bottom">
                        <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face5.jpg') }}" alt="profile">
                        <div class="wrapper ml-3">
                            <h6 class="ml-1 mb-1">Stella Davidson</h6>
                            <small class="text-muted mb-0">
                                <i class="mdi mdi-map-marker-outline mr-1"></i>New York City, USA
                            </small>
                        </div>
                        <div class="badge badge-pill badge-success ml-auto px-1 py-1">
                            <i class="mdi mdi-check"></i>
                        </div>
                    </div>
                    <div class="wrapper d-flex align-items-center py-2 border-bottom">
                        <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face6.jpg') }}" alt="profile">
                        <div class="wrapper ml-3">
                            <h6 class="ml-1 mb-1">Daniel Russel</h6>
                            <small class="text-muted mb-0">
                                <i class="mdi mdi-map-marker-outline mr-1"></i>Florida, USA
                            </small>
                        </div>
                        <div class="badge badge-pill badge-success ml-auto px-1 py-1">
                            <i class="mdi mdi-plus"></i>
                        </div>
                    </div>
                    <div class="wrapper d-flex align-items-center py-2 border-bottom">
                        <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face7.jpg') }}" alt="profile">
                        <div class="wrapper ml-3">
                            <h6 class="ml-1 mb-1">Bruno King</h6>
                            <small class="text-muted mb-0">
                                <i class="mdi mdi-map-marker-outline mr-1"></i>Arkansas, USA
                            </small>
                        </div>
                        <div class="badge badge-pill badge-success ml-auto px-1 py-1">
                            <i class="mdi mdi-check"></i>
                        </div>
                    </div>
                    <div class="wrapper d-flex align-items-center py-2 border-bottom">
                        <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face8.jpg') }}" alt="profile">
                        <div class="wrapper ml-3">
                            <h6 class="ml-1 mb-1">David Moore</h6>
                            <small class="text-muted mb-0">
                                <i class="mdi mdi-map-marker-outline mr-1"></i>Arizon, USA
                            </small>
                        </div>
                        <div class="badge badge-pill badge-success ml-auto px-1 py-1">
                            <i class="mdi mdi-plus"></i>
                        </div>
                    </div>
                    <div class="wrapper d-flex align-items-center pt-2">
                        <img class="img-sm rounded-circle" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face9.jpg') }}" alt="profile">
                        <div class="wrapper ml-3">
                            <h6 class="ml-1 mb-1">Rafell John</h6>
                            <small class="text-muted mb-0">
                                <i class="mdi mdi-map-marker-outline mr-1"></i>Alaska, USA
                            </small>
                        </div>
                        <div class="badge badge-pill badge-success ml-auto px-1 py-1">
                            <i class="mdi mdi-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Updates</h4>
                    <ul class="bullet-line-list">
                        <li>
                            <h6>User confirmation</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing</p>
                            <p class="text-muted">
                                <i class="mdi mdi-clock"></i> 7 months ago.
                            </p>
                        </li>
                        <li>
                            <h6>Continuous evaluation</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing</p>
                            <p class="text-muted">
                                <i class="mdi mdi-clock"></i> 7 months ago.
                            </p>
                        </li>
                        <li>
                            <h6>Promotion</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing</p>
                            <p class="text-muted">
                                <i class="mdi mdi-clock"></i> 7 months ago.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/justgage/raphael-2.1.4.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/justgage/justgage.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/widgets.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/todo.js') }}"></script>
@endsection
