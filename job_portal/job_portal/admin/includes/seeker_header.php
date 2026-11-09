<header class="topbar">
        <button class="icon-btn" id="sidebarToggle" aria-label="Toggle menu"><i class="bi bi-list"></i></button>

        <div class="top-search">
            <i class="bi bi-search"></i>
            <input type="search" id="globalSearch" placeholder="Search your applications… (press Enter)">
        </div>

        <div class="topbar-right">
            <a href="#" class="btn btn-accent btn-sm d-none d-md-inline-flex align-items-center gap-1"><i class="bi bi-search"></i> Browse Jobs</a>

            <a href="#saved" class="icon-btn d-none d-sm-inline-grid" aria-label="Saved jobs" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Saved Jobs">
                <i class="bi bi-bookmark"></i><span class="dot">Demo</span>
            </a>

            <div class="dropdown">
                <button class="icon-btn" data-bs-toggle="dropdown" aria-label="Notifications">
                    <i class="bi bi-bell"></i>
                    <span class="dot">4</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end notif-menu">
                    <div class="notif-head"><strong>Notifications</strong><span class="tag tag-accent">4 new</span></div>
                    
                        <a href="#" class="notif-item Demo">
                            <span class="ico"><i class="bi bi-briefcase"></i></span>
                            <div><p>Your account has a new update.</p><small class="text-muted">2 hours ago</small></div>
                        </a>
                    
                        <div class="empty-state py-4"><i class="bi bi-bell-slash"></i>No notifications yet</div>
                    
                    <a href="#" class="d-block text-center py-2 small fw-semibold">View all</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="user-chip" data-bs-toggle="dropdown">
                    <span class="avatar avatar-accent round">AD</span>
                    <span class="meta text-start d-none d-sm-block">
                        <span class="name d-block">Admin User</span>
                        <span class="role">Web Developer</span>
                    </span>
                    <i class="bi bi-chevron-down small text-muted d-none d-sm-block"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li class="px-3 py-2"><strong class="d-block">Admin User</strong><small class="text-muted">admin@example.com</small></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#profile"><i class="bi bi-person"></i> My Profile</a></li>
                    <li><a class="dropdown-item" href="#cv"><i class="bi bi-file-earmark-pdf"></i> My CV</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-key"></i> Change Password</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="../index.html"><i class="bi bi-box-arrow-right text-danger"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </header>