@extends("admin.maindesign")

@include('admin.partials.app_nav')

@section('breadcrumb')
    <nav class="card">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <div class="d-flex">
                <div class="flex-shrink-0">
                    <a type="button" href="{{ route('admin.addFuel') }}" class="btn btn-outline-primary m-2">New</a>
                    <a type="submit" href="{{ route('admin.showFuels') }}" class="btn m-2">Cancel</a>
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
            <form action="{{ route('admin.updateFuel', $fuel->id) }}" method="POST">

            @csrf
            @method('PUT')
            <!--begin::Body-->
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-9">
                        <!-- Name input at the bottom -->
                        <div class="row w-100">
                            <div class="col-sm-12">
                                <input type="text" name="name" placeholder="Power / Fuel: eg Diesel" value="{{ $Fuel->name ?? '' }}"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputName"
                                    required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none"
                                    rows="3">{{ old('description', isset($Fuel) ? $Fuel->description : '') }}</textarea>
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