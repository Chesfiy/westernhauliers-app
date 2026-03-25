@extends("admin.maindesign")

@include('admin.partials.app_nav')

@section('breadcrumb')
  <div class="row z-10">
    <div class="col-sm-6">
      <a href="{{ route('admin.newBlog') }}" type="button" class="btn btn-primary mb-2">New</a>
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
            <th>Title</th>
            <th>Created At</th>
            <th>Published</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($blogs as $blog)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td><a href="{{ route('admin.editBlog', $blog->id) }}" class="nav-link">{{ $blog->title }} </a></td>
              <td>{{ $blog->created_at }}</td>
              <td>
                @if ($blog->published)
                  <span class="badge bg-success">Published</span>
                @else
                  <span class="badge bg-danger">Not Published</span>
                @endif
              </td>
              <td>
                <form action="{{ route('admin.deleteBlog', $blog->id) }}" method="POST"
                  style="display:inline;">
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