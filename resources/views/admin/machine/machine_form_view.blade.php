@extends("admin.maindesign ")

@include('admin.partials.app_nav')

@section('breadcrumb')
    <nav class="card">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <div class="d-flex">
                <div class="flex-shrink-0">
                    <a type="button" href="{{ route('admin.newMachine') }}" class="btn btn-outline-primary m-2">New</a>
                    <a type="submit" href="{{ route('admin.showMachines') }}" class="btn m-2">Cancel</a>
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
        <form action="{{ route('admin.storeMachine') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!--begin::Body-->
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-9 position-relative">
                        <!-- Name input at the bottom -->
                        <div class="row position-absolute top-0 right-10 w-100">
                            <div class="col-sm-12">
                                <input type="text" name="name" placeholder="Machine Name"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputName"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 float-sm-end">
                        <div class="float-sm-end">
                            <div class="image-upload">
                                <label for="fileInput">
                                    <img id="preview" src="admin/assets/img/img_place_holder.webp" class="img-thumbnail"
                                        alt="preview">
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
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select name="category_id"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none">
                                    <option value=""></option>
                                    @foreach (App\Models\Category::all() as $category)
                                        <option value="{{ $category->id }}" {{ (isset($categoryType) && $categoryType->category_id == $category->id) ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select name="category_type_id"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none">
                                    <option value=""></option>
                                    @foreach (App\Models\CategoryType::all() as $type)
                                        <option required value="{{ $type->id }}" {{ (isset($categoryType) && $categoryType->category_id == $type->category_id) ? 'selected' : '' }}>
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Model</label>
                            <div class="col-sm-10">
                                <select name="model_id" class="form-control border-0 border-bottom rounded-0 shadow-none">
                                    <option value=""></option>
                                    @foreach (App\Models\MachineModel::all() as $model)
                                        <option required value="{{ $model->id }}" {{ (isset($categoryType) && $categoryType->category_id == $model->category_id) ? 'selected' : '' }}>
                                            {{ $model->number }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none"
                                    rows="3">{{ old('description', isset($machine) ? $machine->description : '') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">State</label>
                            <div class="col-sm-10">
                                <select name="state" class="form-control border-0 border-bottom rounded-0 shadow-none">
                                    @php
                                        $stateOptions = ['new', 'rented', 'sold', 'available', 'maintenance'];
                                        foreach ($stateOptions as $state) {
                                            echo '<option value="' . $state . '">' . ucwords($state) . '</option>';
                                        }

                                    @endphp
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Power</label>
                            <div class="col-sm-10">
                                <select name="fuel_id" class="form-control border-0 border-bottom rounded-0 shadow-none">
                                    <option value=""></option>
                                    @foreach (App\Models\Fuel::all() as $fuel)
                                        <option required value="{{ $fuel->id }}" {{ (isset($categoryType) && $categoryType->category_id == $fuel->category_id) ? 'selected' : '' }}>
                                            {{ $fuel->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Brand</label>
                            <div class="col-sm-10">
                                <select name="brand_id" class="form-control border-0 border-bottom rounded-0 shadow-none">
                                    <option value=""></option>
                                    @foreach (App\Models\Brand::all() as $brand)
                                        <option required value="{{ $brand->id }}" {{ (isset($categoryType) && $categoryType->category_id == $brand->category_id) ? 'selected' : '' }}>
                                            {{ $brand->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Video Url</label>
                            <div class="col-sm-10">
                                <input type="text" name="video_url" placeholder="Video Url"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="videoUrlInput"
                                    required />


                            </div>
                        </div>
                        <div class="mb-3 form-check">
                            <label class="form-check-label" for="exampleCheck1">For sale</label>
                            <input type="checkbox" name="is_for_sale" class="form-check-input" id="exampleCheck1" />
                        </div>
                        <div class="mb-3 form-check">
                            <label class="form-check-label" for="exampleCheck2">For rent</label>
                            <input type="checkbox" name="is_for_rent" class="form-check-input" id="exampleCheck2" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="features-tab" data-bs-toggle="tab"
                                data-bs-target="#features" type="button" role="tab" aria-controls="features"
                                aria-selected="true">Features</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="properties-tab" data-bs-toggle="tab" data-bs-target="#properties"
                                type="button" role="tab" aria-controls="properties"
                                aria-selected="false">Properties</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="photo-tab" data-bs-toggle="tab" data-bs-target="#photo"
                                type="button" role="tab" aria-controls="photo" aria-selected="false">Photos</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="features" role="tabpanel" aria-labelledby="features-tab">
                            <table class="table table-bordered" id="featuresTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td contenteditable="true" class="feature-name"></td>
                                        <td contenteditable="true" class="feature-value"></td>
                                    </tr>
                                    <tr>
                                        <td contenteditable="true" class="feature-name"></td>
                                        <td contenteditable="true" class="feature-value"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div>
                                <button type="button" class="btn btn-link" id="addFeatureRow">Add more lines</button>
                            </div>
                            <input type="hidden" name="features" id="featuresInput" />
                        </div>
                        <div class="tab-pane fade" id="properties" role="tabpanel" aria-labelledby="properties-tab">
                            <table class="table table-bordered" id="propertiesTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td contenteditable="true" class="property-name"></td>
                                        <td contenteditable="true" class="property-value"></td>
                                    </tr>
                                    <tr>
                                        <td contenteditable="true" class="property-name"></td>
                                        <td contenteditable="true" class="property-value"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div>
                                <button type="button" class="btn btn-link" id="addPropertyRow">Add more lines</button>
                            </div>
                            <input type="hidden" name="properties" id="propertiesInput" />
                        </div>
                        <div class="tab-pane fade" id="photo" role="tabpanel" aria-labelledby="photo-tab">
                            <div class="mb-3">
                                <button type="button" class="btn btn-secondary" id="addPhotoBtn">Add Photo</button>
                                <input type="file" id="photoInput" name="photos[]" accept="image/*" multiple
                                    style="display:none;">
                            </div>
                            <div id="photoPreview" class="d-flex flex-wrap gap-2"></div>

                            {{-- @push('scripts')
                            <script>
                                const addPhotoBtn = document.getElementById('addPhotoBtn');
                                const photoInput = document.getElementById('photoInput');
                                const photoPreview = document.getElementById('photoPreview');

                                addPhotoBtn.addEventListener('click', () => {
                                    photoInput.click();
                                });

                                photoInput.addEventListener('change', function () {
                                    photoPreview.innerHTML = '';
                                    Array.from(this.files).forEach(file => {
                                        const reader = new FileReader();
                                        reader.onload = function (e) {
                                            const img = document.createElement('img');
                                            img.src = e.target.result;
                                            img.className = 'img-thumbnail';
                                            img.style.width = '100px';
                                            img.style.height = '100px';
                                            img.style.objectFit = 'cover';
                                            photoPreview.appendChild(img);
                                        };
                                        reader.readAsDataURL(file);
                                    });
                                });
                            </script>
                            @endpush --}}
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
    <script>
        document.querySelector('form').addEventListener('submit', function (e) {
            const urlInput = document.getElementById('videoUrlInput');
            const url = urlInput.value.trim();
            // Simple URL regex (http/https, optional www, domain, optional path/query)
            const urlPattern = /^(https?:\/\/)?([\w\-]+\.)+[\w\-]+(\/[\w\-._~:/?#[\]@!$&'()*+,;=]*)?$/i;
            if (url && !urlPattern.test(url)) {
                e.preventDefault();
                alert('Please enter a valid URL.');
                urlInput.focus();
            }
        });
        document.getElementById('addFeatureRow').addEventListener('click', function () {
            const table = document.getElementById('featuresTable').getElementsByTagName('tbody')[0];
            const newRow = table.insertRow();
            let cell1 = newRow.insertCell(0);
            let cell2 = newRow.insertCell(1);
            cell1.contentEditable = "true";
            cell1.className = "feature-name";
            cell2.contentEditable = "true";
            cell2.className = "feature-value";
        });

        document.querySelector('form').addEventListener('submit', function (e) {
            const rows = document.querySelectorAll('#featuresTable tbody tr');
            let features = [];
            rows.forEach(row => {
                let name = row.querySelector('.feature-name')?.innerText.trim();
                let value = row.querySelector('.feature-value')?.innerText.trim();
                if (name || value) {
                    features.push({ name, value });
                }
            });
            document.getElementById('featuresInput').value = JSON.stringify(features);
        });

        document.getElementById('addPropertyRow').addEventListener('click', function () {
            const table = document.getElementById('propertiesTable').getElementsByTagName('tbody')[0];
            const newRow = table.insertRow();
            let cell1 = newRow.insertCell(0);
            let cell2 = newRow.insertCell(1);
            cell1.contentEditable = "true";
            cell1.className = "property-name";
            cell2.contentEditable = "true";
            cell2.className = "property-value";
        });

        document.querySelector('form').addEventListener('submit', function (e) {
            const rows = document.querySelectorAll('#propertiesTable tbody tr');
            let properties = [];
            rows.forEach(row => {
                let name = row.querySelector('.property-name')?.innerText.trim();
                let value = row.querySelector('.property-value')?.innerText.trim();
                if (name || value) {
                    properties.push({ name, value });
                }
            });
            document.getElementById('propertiesInput').value = JSON.stringify(properties);
        });

        const addPhotoBtn = document.getElementById('addPhotoBtn');
        const photoInput = document.getElementById('photoInput');
        const photoPreview = document.getElementById('photoPreview');
        let photoFiles = [];

        addPhotoBtn.addEventListener('click', () => {
            photoInput.click();
        });

        photoInput.addEventListener('change', function () {
            photoPreview.innerHTML = '';
            photoFiles = Array.from(this.files);
            photoFiles.forEach(file => {
            const reader = new FileReader();
            reader.onload = function (e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-thumbnail';
                img.style.width = '100px';
                img.style.height = '100px';
                img.style.objectFit = 'cover';
                photoPreview.appendChild(img);
            };
            reader.readAsDataURL(file);
            });
        });

        // On form submit, append selected photos to FormData
        document.querySelector('form').addEventListener('submit', function (e) {
            // Only needed if you want to submit via AJAX
            // Otherwise, browser will send files in <input type="file" name="photos[]">
            // If you want to use AJAX, uncomment below:

            // e.preventDefault();
            // const formData = new FormData(this);
            // photoFiles.forEach((file, idx) => {
            //     formData.append('photos[]', file);
            // });
            // // Submit formData via fetch or AJAX here

            // If not using AJAX, the files in photoInput will be submitted as usual
        });
    </script>
@endsection