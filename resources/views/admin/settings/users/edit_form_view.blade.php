@extends('admin.maindesign')

@include('admin.partials.settings_nav')

@section('breadcrumb')
    <nav class="card">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <div class="d-flex">
                <div class="flex-shrink-0">
                    <a type="button" href="{{ route('admin.settings.newUser') }}" class="btn btn-outline-primary m-2">New</a>
                    <a type="submit" href="{{ route('admin.settings.users') }}" class="btn m-2">Cancel</a>

                </div>
            </div>

            <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
    </nav>
@endsection

@section('form_view')
    <!--begin::Horizontal Form-->
    <div class="card card-warning card-outline mb-4">
        <!--begin::Form-->
        <form action="{{ route('admin.settings.updateUser', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!--begin::Body-->
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-9 position-relative">
                        <!-- Name input at the bottom -->
                        <div class="row position-absolute top-0 right-10 w-100">
                            <div class="col-sm-12 mb-3">
                                <input type="text" value="{{ isset($user) ? $user->name : '' }}" name="name"
                                    placeholder="User Name"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputName"
                                    required />
                            </div>
                            <div class="col-sm-6 mb-3">
                                <input type="email" value="{{ isset($user) ? $user->email : '' }}" name="email"
                                    placeholder="example@mail.com"
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
                            <label for="inputPassword3" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                                <input type="text" type="password" name="password"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="phone" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <select name="role" class="form-control border-0 border-bottom rounded-0 shadow-none">
                                    <option value="admin"
                                        {{ isset($user->user_type) && $user->user_type == 'admin' ? 'selected' : '' }}>
                                        Admin</option>
                                    <option value="user"
                                        {{ isset($user->user_type) && $user->user_type == 'user' ? 'selected' : '' }}>
                                        User</option>
                                </select>
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
        document.querySelector('form').addEventListener('submit', function(e) {
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
        document.getElementById('addFeatureRow').addEventListener('click', function() {
            const table = document.getElementById('featuresTable').getElementsByTagName('tbody')[0];
            const newRow = table.insertRow();
            let cell1 = newRow.insertCell(0);
            let cell2 = newRow.insertCell(1);
            cell1.contentEditable = "true";
            cell1.className = "feature-name";
            cell2.contentEditable = "true";
            cell2.className = "feature-value";
        });

        document.getElementById('isRent').addEventListener('change', function() {
            if (this.checked) {
                if (document.getElementById('isSale').checked) {
                    document.getElementById('inputPrice').disabled = false;
                    document.querySelectorAll('input[name^="rental_price_per_"]').forEach(function(input) {
                        input.disabled = false;
                    });
                }
                document.getElementById('inputPrice').disabled = true;
                document.querySelectorAll('input[name^="rental_price_per_"]').forEach(function(input) {
                    input.disabled = false;
                });

            } else {
                document.getElementById('inputPrice').disabled = true;
                document.querySelectorAll('input[name^="rental_price_per_"]').forEach(function(input) {
                    input.disabled = true;
                });
            }
        });
        document.getElementById('isSale').addEventListener('change', function() {
            if (this.checked) {
                if (document.getElementById('isRent').checked) {
                    document.getElementById('inputPrice').disabled = false;
                    document.querySelectorAll('input[name^="rental_price_per_"]').forEach(function(input) {
                        input.disabled = false;
                    });

                }
                document.getElementById('inputPrice').disabled = false;
                document.querySelectorAll('input[name^="rental_price_per_"]').forEach(function(input) {
                    input.disabled = true;
                });
            } else {
                document.getElementById('inputPrice').disabled = true;
                document.querySelectorAll('input[name^="rental_price_per_"]').forEach(function(input) {
                    input.disabled = true;
                });
            }
        });
        document.querySelector('form').addEventListener('submit', function(e) {
            const rows = document.querySelectorAll('#featuresTable tbody tr');
            let features = [];
            rows.forEach(row => {
                let name = row.querySelector('.feature-name')?.innerText.trim();
                let value = row.querySelector('.feature-value')?.innerText.trim();
                if (name || value) {
                    features.push({
                        name,
                        value
                    });
                }
            });
            document.getElementById('featuresInput').value = JSON.stringify(features);
        });

        document.getElementById('addPropertyRow').addEventListener('click', function() {
            const table = document.getElementById('propertiesTable').getElementsByTagName('tbody')[0];
            const newRow = table.insertRow();
            let cell1 = newRow.insertCell(0);
            let cell2 = newRow.insertCell(1);
            cell1.contentEditable = "true";
            cell1.className = "property-name";
            cell2.contentEditable = "true";
            cell2.className = "property-value";
        });

        document.querySelector('form').addEventListener('submit', function(e) {
            const rows = document.querySelectorAll('#propertiesTable tbody tr');
            let properties = [];
            rows.forEach(row => {
                let name = row.querySelector('.property-name')?.innerText.trim();
                let value = row.querySelector('.property-value')?.innerText.trim();
                if (name || value) {
                    properties.push({
                        name,
                        value
                    });
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

        photoInput.addEventListener('change', function() {
            photoPreview.innerHTML = '';
            photoFiles = Array.from(this.files);
            photoFiles.forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
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
        document.querySelector('form').addEventListener('submit', function(e) {
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

    <script>
        const quill = new Quill('#inputNotes', {

            theme: 'snow'
        });
        const target = 'line 10';
        const bounds = quill.selection.getBounds(
            text.indexOf(target),
            target.length
        );
        if (bounds) {
            quill.scrollRectIntoView(bounds);
        }
    </script>
@endsection
