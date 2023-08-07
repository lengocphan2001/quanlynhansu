<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            01. Thông tin tổng quan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('employees.contract', ['employee', $employee] ) }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            02. Hợp đồng
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('employees.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            03. Quá trình làm việc
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('employees.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            04. Diễn biến lương
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
