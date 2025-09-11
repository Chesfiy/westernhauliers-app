@extends("admin.maindesign ")

@include('admin.partials.app_nav')

@section('breadcrumb')
    <nav class="card">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <div class="d-flex">
                <div class="flex-shrink-0">
                    <a type="button" href="{{ route('admin.addBrand') }}" class="btn btn-outline-primary m-2">New</a>
                    <a type="submit" href="{{ route('admin.showBrands') }}" class="btn m-2">Cancel</a>
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
    <!--begin::Horizontal Form-->
    <div class="card card-warning card-outline mb-4">
        <!--begin::Form-->
        <form action="{{ route('admin.storeBrand') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!--begin::Body-->
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-9 position-relative">
                        <!-- Name input at the bottom -->
                        <div class="row position-absolute top-0 right-10 w-100">
                            <div class="col-sm-12">
                                <input type="text" name="name" placeholder="Brand Name" value="{{ old('name', isset($brand) ? $brand->name : '') }}"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputName" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 float-sm-end">
                        <div class="float-sm-end">
                            <div class="image-upload">
                                <label for="fileInput">
                                    <img id="preview" src="{{ isset($brand) ? asset('storage/' . $brand->img_url) : asset('admin/assets/img/img_place_holder.webp') }}" class="img-thumbnail"  alt="preview">
                                </label>
                                <input name="img_url" type="file" accept="image/*" id="fileInput">

                                <!-- Edit button -->
                                <div class="edit-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                        class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path
                                            d="M12.146.854a.5.5 0 0 1 .708 0l2.292 2.292a.5.5 0 0 1 0 .708L4.207 14.793a1 1 0 0 1-.39.242l-3 1a.5.5 0 0 1-.641-.641l1-3a1 1 0 0 1 .242-.39L12.146.854zm.708.708L13 1.707 14.293 3 15 2.293 12.854 1.562z" />
                                    </svg>
                                </div>
                                <div class="edit-tooltip">Edit</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                            <textarea name="description" class="form-control border-0 border-bottom rounded-0 shadow-none" rows="3">{{ old('description', isset($brand) ? $brand->description : '') }}</textarea>
                            </div>
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

@section('script')
    <script>
        // Custom JavaScript can be added here
        document.getElementById('fileInput').onchange = evt => {
    const [file] = evt.target.files;
    if (file) {
        let preview = document.getElementById('preview');
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    }
};
    </script>
@endsection