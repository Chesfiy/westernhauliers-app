@extends("admin.maindesign")
@include('admin.partials.app_nav')
@section('breadcrumb')
  <div class="row z-10">
    <div class="col-sm-6">
      <a href="{{ route('admin.addCategory') }}" type="button" class="btn btn-primary mb-2">New</a>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-end">
      </ol>
    </div>
  </div>
@endsection
@section("list_view")
  <div class="card mb-4">
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Created At</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $category->name }}<a href="{{ route('admin.editCategory', $category->name) }}" class="nav-link">{{ $category->name }} </a></td>
              <td>{{ $category->created_at }}</td>
              <td>
                <a href="{{ route('admin.editCategory', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('admin.deleteCategory', $category->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection