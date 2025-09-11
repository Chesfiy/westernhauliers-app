@extends("admin.maindesign ")

@include('admin.partials.app_nav')

@section('breadcrumb')
    <nav class="card">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <div class="d-flex">
                <div class="flex-shrink-0">
                    <a type="button" href="{{ route('admin.addCategory') }}" class="btn btn-outline-primary m-2">New</a>
                    <a type="submit" href="{{ route('admin.viewCategories') }}" class="btn m-2">Cancel</a>
                </div>
                <!-- <div class="flex-grow-1">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item active"><a href="{{ route('admin.showMachines') }}">Machines</a></li>
                                        </ol>
                                        <i class="bi bi-clock-fill me-1"></i>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <a type="button" href="{{ route('admin.newMachine') }}" class="btn btn-outline-primary mb-2">New</a>
                                    </div> -->
            </div>

            <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
    </nav>
@endsection
@section("form_view")
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <!--begin::Horizontal Form-->
    <div class="card card-warning card-outline mb-4">
        <!--begin::Form-->
        <form action="{{ route('admin.storeCategory') }}" method="POST">
            @csrf
            <!--begin::Body-->
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-9">
                        <!-- Name input at the bottom -->
                        <div class="ro top-0 right-10 w-100  mb-3">
                            <div class="col-sm-12">
                                <input type="text" name="name" placeholder="Category Name"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputName"
                                    required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <div class="row mb-3">
                            <label for="description">Category Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="description" name="description"
                                    required>{{ $category->description ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer">
                    <button type="submit" class="btn float-end">Save</button>
                </div>
                <!--end::Footer-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Horizontal Form-->
@endsection