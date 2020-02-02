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
                    <span class="text-secondary text-small">Admin</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link py-2" href="{{ route('admin.dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <!-- Calendar -->
        <li class="nav-item">
            <a class="nav-link py-2" href="{{ route('admin.appointments.index') }}">
                <span class="menu-title">Calendar</span>
                <i class="mdi mdi-calendar-multiple-check menu-icon"></i>
            </a>
        </li>

        <!-- Doctors -->
        <li class="nav-item">
            <a class="nav-link py-2" data-toggle="collapse" href="#accounts"
            aria-expanded="false" aria-controls="accounts">
                <span class="menu-title">Doctors</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-stethoscope menu-icon"></i>
            </a>
            <div class="collapse" id="accounts">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link py-2"
                        href="{{ route('admin.doctors.index') }}">View all</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2"
                        href="{{ route('admin.doctors.create') }}">Add new</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Patients -->
        <li class="nav-item">
            <a class="nav-link py-2" data-toggle="collapse" href="#patients"
            aria-expanded="false" aria-controls="patients">
                <span class="menu-title">Patients</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-box menu-icon"></i>
            </a>
            <div class="collapse" id="patients">
                <ul class="nav flex-column sub-menu mb-0">
                    <li class="nav-item">
                        <a class="nav-link py-2"
                        href="{{ route('admin.patients.index') }}">View all</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2"
                        href="{{ route('admin.patients.create') }}">Add new</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>