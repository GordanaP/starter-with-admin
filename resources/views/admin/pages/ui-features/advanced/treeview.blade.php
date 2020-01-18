@extends('layouts.admin.vendor_dashboard')

@section('title', 'Tree View')

@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/jstree/themes/default/style.min.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Default Tree Style</h4>
                            <div id="jstree_sample_1">
                                <ul>
                                    <li class="jstree-open">Food
                                        <ul>
                                            <li>Vegetables</li>
                                            <li>Fruits
                                                <ul>
                                                    <li> Apple </li>
                                                    <li>Orange</li>
                                                    <li>Grapes</li>
                                                    <li>Lemon</li>
                                                    <li>Pineapple</li>
                                                    <li>Jackfruit</li>
                                                    <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/html.png') }}"}'> Snacks</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/git-file.png') }}"}'> Juice</li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/corrupted-file.png') }}"}'> Cakes</li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/html.png') }}"}'> Chocolates </li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/html.png') }}"}'> Bevarages </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Context Menu View</h4>
                            <div id="jstree_sample_3">
                                <ul>
                                    <li class="jstree-open">Transportation
                                        <ul>
                                            <li>Aeroplane</li>
                                            <li class="jstree-open">Cars
                                                <ul>
                                                    <li> Benz </li>
                                                    <li>Audi</li>
                                                    <li>Ford</li>
                                                    <li>Toyota</li>
                                                    <li>Tata</li>
                                                    <li>Ferrari</li>
                                                    <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/html.png') }}"}'> Mileage</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/git-file.png') }}"}'> Fuel</li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/corrupted-file.png') }}"}'> Rpm</li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/html.png') }}"}'> Horsepower </li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/html.png') }}"}'> Cylender </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Checkbox Tree Style</h4>
                            <div id="jstree_sample_2">
                                <ul>
                                    <li class="jstree-open">This PC
                                        <ul>
                                            <li>Movies</li>
                                            <li class="jstree-open">Games
                                                <ul>
                                                    <li> Assassin'screed </li>
                                                    <li>Dota 2</li>
                                                    <li>Farcry</li>
                                                    <li>Pop 3</li>
                                                    <li>demo_4</li>
                                                    <li>Gta</li>
                                                    <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/html.png') }}"}'> resume.pdf</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/git-file.png') }}"}'> Hallticket</li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/corrupted-file.png') }}"}'> Insurance</li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/html.png') }}"}'> Excel </li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/html.png') }}"}'> Study materials </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Drag n Drop Enabled</h4>
                            <div id="jstree_sample_4">
                                <ul>
                                    <li class="jstree-open">Electronics
                                        <ul>
                                            <li>Television</li>
                                            <li class="jstree-open">src
                                                <ul>
                                                    <li>Mobile</li>
                                                    <li>Nokia</li>
                                                    <li>Samsung</li>
                                                    <li>onida</li>
                                                    <li>mi</li>
                                                    <li>onePlus</li>
                                                    <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/html.png') }}"}'>warranty</li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/git-file.png') }}"}'> Specifications</li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/corrupted-file.png') }}"}'> screen-guard</li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/html.png') }}"}'> catalog </li>
                                            <li data-jstree='{"icon":"{{ asset('vendor/purple-admin-pro/assets/images/file-icons/extension/html.png') }}"}'> Licence </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/jstree/jstree.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/js-tree.js') }}"></script>
@endsection
