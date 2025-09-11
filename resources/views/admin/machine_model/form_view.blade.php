@extends("admin.maindesign ")

@include('admin.partials.app_nav')

@section('breadcrumb')
    <nav class="card">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Start Navbar Links-->
            <div class="d-flex">
                <div class="flex-shrink-0">
                    <a type="button" href="{{ route('admin.addMachineModel') }}" class="btn btn-outline-primary m-2">New</a>
                    <a type="submit" href="{{ route('admin.showMachineModels') }}" class="btn m-2">Cancel</a>
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
        <form
            action="{{ isset($model) ? route('admin.updateMachineModel', $model->id) : route('admin.storeMachineModel') }}"
            method="POST">
            @csrf
            <!--begin::Body-->
            <div class="card-body">
                <div class="row mb-3" style="margin-bottom: 6px;">
                    <div class="col-sm-9">
                        <!-- Name input at the bottom -->
                        <div class="row w-100">
                            <div class="col-sm-12">
                                <input type="text" name="number" placeholder="eg: SM037030"
                                    value="{{isset($model) ? $model->number : ''}}"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputNumber"
                                    required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <div class="row mb-3">
                            <label for="inputType3" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <input type="text" name="type" placeholder="eg: Excavator"
                                    value="{{isset($model) ? $model->type : ''}}"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputType"
                                    required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputWidth3" class="col-sm-2 col-form-label">Width</label>
                            <div class="col-sm-10">
                                <input type="number" name="width" placeholder="eg: 2.5m"
                                    value="{{isset($model) ? $model->width : ''}}"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputWidth"
                                    required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputHeight3" class="col-sm-2 col-form-label">Height</label>
                            <div class="col-sm-10">
                                <input type="number" name="height" placeholder="eg: 3.0m"
                                    value="{{isset($model) ? $model->height : ''}}"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputHeight"
                                    required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputRaisedHeight" class="col-sm-2 col-form-label">Raised Height</label>
                            <div class="col-sm-10">
                                <input type="number" name="raised_height" placeholder="eg: 3.0m"
                                    value="{{isset($model) ? $model->raised_height : ''}}"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputRaisedHeight"
                                    required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputMaxContainer3" class="col-sm-2 col-form-label">Max Container</label>
                            <div class="col-sm-10">
                                <input type="number" name="max_container" placeholder="eg: 3.0m"
                                    value="{{ old('max_container', isset($model) ? $model->max_container : '') }}"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputMaxContainer"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row mb-3">
                            <label for="inputModel3" class="col-sm-2 col-form-label">Fuel</label>
                            <div class="col-sm-10">
                                <select name="fuel_id" class="form-control border-0 border-bottom rounded-0 shadow-none">
                                    <option value=""></option>
                                    @foreach (App\Models\Fuel::all() as $fuel)
                                        <option required value="{{ $fuel->id }}" {{ (isset($model) && $model->fuel_id == $fuel->id) ? 'selected' : '' }}>
                                            {{ $fuel->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputCapacity3" class="col-sm-2 col-form-label">Capacity</label>
                            <div class="col-sm-10">
                                <input type="number" name="capacity" placeholder="eg: 3000kg"
                                    value="{{isset($model) ? $model->capacity : ''}}"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputCapacity"
                                    required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputLiftWorking3" class="col-sm-2 col-form-label">Lift Working</label>
                            <div class="col-sm-10">
                                <input type="number" name="lift_working" placeholder="eg: SM037030"
                                    value="{{isset($model) ? $model->lift_working : ''}}"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputLiftWorking"
                                    required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputWheelBase3" class="col-sm-2 col-form-label">Wheel Base</label>
                            <div class="col-sm-10">
                                <input type="number" name="wheel_base" placeholder="eg: 2.5m"
                                    value="{{isset($model) ? $model->wheel_base : ''}}"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputWheelBase"
                                    required />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputUnit3" class="col-sm-2 col-form-label">Unit</label>
                            <div class="col-sm-10">
                                <input type="number" name="unit" placeholder="eg: 5"
                                    value="{{isset($model) ? $model->unit : ''}}"
                                    class="form-control border-0 border-bottom rounded-0 shadow-none" id="inputUnit"
                                    required />
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