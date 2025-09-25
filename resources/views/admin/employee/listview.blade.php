@extends("admin.maindesign ")
@include('admin.partials.employee_nav')
@section('breadcrumb')
    <div class="row z-10">
        <div class="col-sm-6">
            <a href="{{ route('admin.newEmployee') }}" type="button" class="btn btn-primary mb-2">New</a>
            <a href="{{ route('admin.newEmployee') }}" type="button" class="btn btn-primary mb-2">Upload</a>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item active"><a href="{{ route('admin.newEmployee') }}" type="button"
                        class="btn btn-primary mb-2">New</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('admin.newEmployee') }}" type="button"
                        class="btn btn-primary mb-2">Upload</a></li>
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
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th style="">Address</th>
                        <th style="">Position</th>
                        <th style="">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr class="align-middle">
                            <td>{{ $loop->iteration }}.</td>
                            <td> <a href="{{ route('admin.editEmployee', $employee->id) }}" class="nav-link">{{ $employee->name }}
                                </a></td>
                            <td>{{ isset($employee->phone) ? $employee->phone : '' }}</td>
                            <td>{{ isset($employee->address) ? $employee->address : '' }} {{ isset($employee->brand->name   ) ? $employee->brand->name : '' }}</td>
                            <td>{{ isset($employee->position) ? $employee->position : '' }}</td>
                            <td>{{ isset($employee->status) ? $employee->status : '' }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection