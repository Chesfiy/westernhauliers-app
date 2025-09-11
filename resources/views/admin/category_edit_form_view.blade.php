@extends("admin.maindesign ")
@include('admin.partials.app_nav')
@section("edit_category_form_view")
<!-- Breadcrumb-->
<div class="container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit Category</li>
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
                    <div class="title"><strong class="d-block">Edit Category</strong><span class="d-block"></span></div>
                    <div class="block-body">
                        <form action="{{ route('admin.updateCategory', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control" value="{{ $category->name ?? '' }}" id="name" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="description">Category Description</label>
                                <textarea class="form-control" id="description" name="description" required>{{ $category->description ?? '' }}</textarea>
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