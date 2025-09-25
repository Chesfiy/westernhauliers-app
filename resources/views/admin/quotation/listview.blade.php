@extends("admin.maindesign ")
@include('admin.partials.quotation_nav')
@section('breadcrumb')
    <div class="row z-10">
        <div class="col-sm-6">
            <a href="#" type="button" class="btn btn-primary mb-2">New</a>
            <a href="#" type="button" class="btn btn-primary mb-2">Upload</a>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item active"><a href="#" type="button"
                        class="btn btn-primary mb-2">New</a></li>
                <li class="breadcrumb-item active"><a href="#" type="button"
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
                        <th style="">Phone</th>
                        <th style="">Email</th>
                        <th style="">Machine</th>
                        <th>Payment In</th>
                        <th>Quantity</th>
                        <th style="">Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quotations as $quotation)
                        <tr class="align-middle">
                            <td>{{ $loop->iteration }}.</td>
                            <td> <a href="{{ route('admin.editQuotation', parameters: $quotation->id) }}" class="nav-link">{{ $quotation->name }}
                                </a></td>
                            <td>{{ isset($quotation->phone) ? $quotation->phone : '' }}</td>
                            <td>{{ isset($quotation->email) ? $quotation->email : '' }}</td>
                            <td>{{ isset($quotation->machine->name) ? $quotation->machine->name : '' }}</td>
                            <td>{{ isset($quotation->payment_type) ? $quotation->payment_type: '' }}</td>
                            <td>{{ isset($quotation->quantity) ? $quotation->quantity : '' }}</td>
                            <td>{{ isset($quotation->created_at) ? $quotation->created_at : '' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection