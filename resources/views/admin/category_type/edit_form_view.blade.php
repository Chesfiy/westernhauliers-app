@extends("admin.maindesign ")


@section("add_category")
<!-- Breadcrumb-->
<div class="container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.showCategoryTypes') }}">Types</a></li>
        <li class="breadcrumb-item active">Edit Types</li>
    </ul>
</div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<section class="no-padding-top no-padding-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="block">
                    <div class="title"><strong class="d-block">Add Category Type</strong><span class="d-block"></span></div>
                    <div class="block-body">
                        <form action="{{ route('admin.updateCategoryType', $categoryType->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Type Name</label>
                                <input type="text" class="form-control" value="{{ $categoryType->name ?? '' }}" id="name" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="col-sm-3 form-control-label">Category</label>
                                <select name="category_id" class="form-control mb-3 mb-3">
                                    <option value="">Select Category</option>
                                    @foreach (App\Models\Category::all() as $category)
                                        <option value="{{ $category->id }}" {{ (isset($categoryType) && $categoryType->category_id == $category->id) ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="description">Type Description</label>
                                <textarea class="form-control" id="description" name="description" required>{{ $categoryType->description ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection