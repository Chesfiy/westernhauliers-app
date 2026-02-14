@extends('admin.maindesign')

@include('admin.partials.settings_nav')
@section('breadcrumb')
    <div class="row z-10">
        <div class="col-sm-6">
            <a href="{{ route('admin.settings.newUser') }}" type="button" class="btn btn-primary mb-2">New</a>
        </div>
        {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item active"><a href="{{ route('admin.settings.newUser') }}" type="button"
                        class="btn btn-primary mb-2">New</a></li>
            </ol>
        </div> --}}
    </div>
@endsection

@section('list_view')
    <div class="card mb-4">
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="align-middle">
                            <td>{{ $loop->iteration }}.</td>
                            <td> <a href="{{ route('admin.settings.editUser', $user->id) }}"
                                    class="nav-link">{{ $user->name }}
                                </a></td>
                            <td>{{ isset($user->email) ? $user->email : '' }}</td>
                            <td>{{ isset($user->user_type) ? $user->user_type : '' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
