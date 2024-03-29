<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="/assets/backend/images/faces/face1.jpg" alt="profile image">
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{ Session::get('name')}}</p>
                        <div>
                            <small class="designation text-muted">{{ Session::get('type')}}</small>
                            <span class="status-indicator online"></span>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success btn-block">New Project
                    <i class="mdi mdi-plus"></i>
                </button>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="menu-icon mdi mdi-database"></i>
                <span class="menu-title">Admin</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="menu-icon mdi mdi-briefcase"></i>
                <span class="menu-title">Brands</span>
            </a>
        </li>
    </ul>
</nav>
