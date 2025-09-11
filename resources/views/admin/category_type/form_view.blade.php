@extends("admin.maindesign ")

@include('admin.partials.app_nav')

@section('breadcrumb')
    <nav class="card">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <div class="d-flex">
                <div class="flex-shrink-0">
                    <a type="button" href="{{ route('admin.addCategoryType') }}" class="btn btn-outline-primary m-2">New</a>
                    <a type="submit" href="{{ route('admin.showCategoryTypes') }}" class="btn m-2">Cancel</a>
                </div>
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
    <div class="card card-warning card-outline mb-4">
        <form action="{{ route('admin.storeCategoryType') }}" method="POST">
            @csrf
            <!--begin::Body-->
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-9">
                        <!-- Name input at the bottom -->
                        <div class="row w-100">
                            <div class="col-sm-12">
                                <input type="text" name="name" placeholder="Machine Type" value="{{ $categoryType->name ?? '' }}"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputName"
                                    required />
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
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none"
                                    rows="3">{{ old('description', isset($machine) ? $machine->description : '') }}</textarea>
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
    </div>
    </section>
@endsection