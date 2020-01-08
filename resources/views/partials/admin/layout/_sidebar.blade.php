<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('vendor/purple-admin-pro//assets/images/faces/face1.jpg') }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link py-2" href="{{ route('admin.dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link py-2" data-toggle="collapse" href="#layouts" aria-expanded="false" aria-controls="layouts">
                <span class="menu-title">Page Layouts</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-apps menu-icon"></i>
            </a>
            <div class="collapse" id="layouts">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link py-2" href="{{ route('admin.layouts.boxed') }}">Boxed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" href="#">RTL</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link py-2" data-toggle="collapse" href="#applications" aria-expanded="false" aria-controls="applications">
                <span class="menu-title">Apps</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cart-arrow-down menu-icon"></i>
            </a>
            <div class="collapse" id="applications">
                <ul class="nav flex-column sub-menu sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link py-2" href="{{ route('admin.apps.kanban') }}">kanban-board</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" href="{{ route('admin.apps.todo') }}">Todo List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" href="{{ route('admin.apps.tickets') }}">Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" href="{{ route('admin.apps.chats') }}">Chats</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link py-2" href="{{ route('admin.samples.widgets') }}">
                <span class="menu-title">Widgets</span>
                <i class="mdi mdi-forum menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link py-2" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                <span class="menu-title">Sidebar Layouts</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-playlist-play menu-icon"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.layouts.sidebar_compact') }}">Compact menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.layouts.sidebar_icon') }}">Icon menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.layouts.sidebar_hidden') }}">Sidebar Hidden</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.layouts.sidebar_overlay') }}">Sidebar Overlay</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.layouts.sidebar_fixed') }}">Sidebar Fixed</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link py-2" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ui-features.accordions') }}">Accordions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ui-features.buttons') }}">Buttons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ui-features.badges') }}">Badges</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ui-features.breadcrumbs') }}">Breadcrumbs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ui-features.dropdowns') }}">Dropdowns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ui-features.modals') }}">Modals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ui-features.progress') }}">Progress bar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ui-features.pagination') }}">Pagination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ui-features.tabs') }}">Tabs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ui-features.typography') }}">Typography</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ui-features.tooltips') }}">Tooltip</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <span class="menu-title">Advanced UI</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cards-variant menu-icon"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/slider.html">Slider</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a
                            ></li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/treeview.html">Tree View</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/popups.html">
                <span class="menu-title">Popups</span>
                <i class="mdi mdi-forum menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/notifications.html">
                <span class="menu-title">Notifications</span>
                <i class="mdi mdi-bell-ring menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/icons/mdi.html">Material</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/icons/themify.html">Themify icons</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
                <span class="menu-title">Forms</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="forms">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Form Elements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Advanced Forms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Validation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wizard</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/text_editor.html">
                <span class="menu-title">Text editors</span>
                <i class="mdi mdi-file-document menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/code_editor.html">
                <span class="menu-title">Code editors</span>
                <i class="mdi mdi-code-not-equal-variant menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/morris.html">Morris</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/c3.html">C3 charts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/chartist.html">Chartist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/justGage.html">JustGage</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Basic table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Js-grid</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sortable table</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                <span class="menu-title">Maps</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-map-marker-radius menu-icon"></i>
            </a>
            <div class="collapse" id="maps">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/maps/google-maps.html">Google Maps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/maps/mapael.html">Mapael</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/maps/vector-map.html">Vector map</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-lock menu-icon"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/login.html"> Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/multi-level-login.html"> Multi Level Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/register.html"> Register </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <span class="menu-title">Error pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-security menu-icon"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">General Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/landing-page.html"> Landing Page </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/profile.html"> Profile </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/faq.html"> FAQ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/user-listing.html"> User Listing </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                <span class="menu-title">E-commerce</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-shopping menu-icon"></i>
            </a>
            <div class="collapse" id="e-commerce">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/email-template.html"> Email Templates </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/product-catalogue.html"> Product Catalogue </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/project-list.html"> Project List </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/orders.html"> Orders </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link py-2" href="{{ route('admin.apps.email') }}">
                <span class="menu-title">E-mail</span>
                <i class="mdi mdi-email menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link py-2" href="{{ route('admin.apps.calendar') }}">
                <span class="menu-title">Calendar</span>
                <i class="mdi mdi-calendar-today menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.apps.gallery') }}">
                <span class="menu-title">Gallery</span>
                <i class="mdi mdi-image-filter-frames menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/purple/jquery/documentation/documentation.html" target="_blank">
                <span class="menu-title">Documentation</span>
                <i class="mdi mdi-file-document-box menu-icon"></i>
            </a>
        </li>
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                    <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                    <div class="border-bottom">
                        <p class="text-secondary">Categories</p>
                    </div>
                    <ul class="gradient-bullet-list mt-4">
                        <li>Free</li>
                        <li>Pro</li>
                    </ul>
                </div>
            </span>
        </li>
    </ul>
</nav>