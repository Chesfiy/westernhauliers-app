@section('app_nav')
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
            </a>
        </li>
        <li class="nav-item d-none d-md-block">
            <a href="{{ route('admin.showMachines') }}" class="nav-link">Machines</a>
        </li>
        <li class="nav-item d-none d-md-block">
            <a href="{{ route('admin.viewCategories') }}" class="nav-link">Categories</a>
        </li>
        <li class="nav-item d-none d-md-block">
            <a href="{{ route('admin.showBrands') }}" class="nav-link">Brands</a>
        </li>
        <li class="nav-item d-none d-md-block">
            <a href="{{ route('admin.showFuels') }}" class="nav-link">Power</a>
        </li>
         <li class="nav-item d-none d-md-block">
            <a href="{{ route('admin.showMachineModels') }}" class="nav-link">Model</a>
        </li>
        <li class="nav-item d-none d-md-block btn-group">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Configuration
            </a>
            <ul class="dropdown-menu z-50">
                <li><a class="dropdown-item" href="{{ route('admin.addCategory') }}">Category</a></li>
                <li>
                    <a class="dropdown-item" href="{{ route('admin.showCategoryTypes') }}">Type</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                </li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li>
                    <a class="dropdown-item" href="#">Brands Master</a>
                </li>
            </ul>
        </li>
    </ul>
@endsection