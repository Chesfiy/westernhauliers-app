@section('app_nav')
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
            </a>
        </li>
        <li class="nav-item d-none d-md-block">
            <a href="{{ route('admin.settings') }}" class="nav-link">Settings</a>
        </li>
        <li class="nav-item d-none d-md-block btn-group">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Users
            </a>
            <ul class="dropdown-menu z-50">
                <li><a class="dropdown-item" href="{{ route('admin.settings.users') }}">Users</a></li>
                <li>
                    <a class="dropdown-item" href="#">Groups</a>
                </li>
            </ul>
        </li>
    </ul>
@endsection
