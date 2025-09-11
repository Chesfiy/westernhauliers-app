@extends("admin.maindesign ")
@include('admin.partials.app_nav')
@section('breadcrumb')
    <div class="row z-10">
        <div class="col-sm-6">
            <a href="{{ route('admin.newMachine') }}" type="button" class="btn btn-primary mb-2">New</a>
            <a href="{{ route('admin.newMachine') }}" type="button" class="btn btn-primary mb-2">Upload</a>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item active"><a href="{{ route('admin.newMachine') }}" type="button"
                        class="btn btn-primary mb-2">New</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('admin.newMachine') }}" type="button"
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
                        <th>Type</th>
                        <th style="">Brand</th>
                        <th style="">Model No</th>
                        <th style="">Power</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($machines as $machine)
                        <tr class="align-middle">
                            <td>{{ $loop->iteration }}.</td>
                            <td> <a href="{{ route('admin.editMachine', $machine->id) }}" class="nav-link">{{ $machine->name }}
                                </a></td>
                            <td>{{ isset($machine->type) ? $machine->type->name : '' }}</td>
                            <td>{{ isset($machine->brand->name) ? $machine->brand->name : '' }}</td>
                            <td>{{ isset($machine->machineModel->model_no) ? $machine->machineModel->model_no : '' }}</td>
                            <td>{{ isset($machine->fuel->name) ? $machine->fuel->name : '' }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection