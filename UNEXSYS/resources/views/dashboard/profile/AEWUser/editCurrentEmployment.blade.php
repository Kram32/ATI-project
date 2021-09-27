@extends('dashboard.layouts')

@section('page_title', 'Edit Current Employment')

@section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Account Information-->
        <div class="max-width-950">
            <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                <!--begin::Header-->
                <div class="card-header border-0">
                    <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Current Employment - Edit</h3>
                </div>
                <!--end::Header-->


                <!--begin::Body-->
                <!--begin::Form-->
                <form class="form">
                    <div class="card-body dashboard-personal">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Region</label>
                                <input type="text" class="form-control text-line" id="region"/>
                            </div>
                            <div class="col-md-3">
                                <label>Province</label>
                                <input type="text" class="form-control text-line" id="province"/>
                            </div>
                            <div class="col-md-3">
                                <label>Municipality/City</label>
                                <input type="text" class="form-control text-line" id="city"/>
                            </div>
                            <div class="col-md-3">
                                <label>Barangay</label>
                                <input type="text" class="form-control text-line" id="barangay"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-9">
                                <label>Street Address</label>
                                <input type="text" class="form-control text-line" id="street"/>
                            </div>
                            <div class="col-lg-3">
                                <label>Zip Code</label>
                                <input type="text" class="form-control text-line" id="zipcode"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-9">
                                <label>Office Name</label>
                                <input type="text" class="form-control text-line" id="office_name"/>
                            </div>
                            <div class="col-lg-3">
                                <label>Office Type</label>
                                <div class="input-group mb-3">
                                    <select class="form-select form-control text-line" id="office_type">
                                        <option selected>Select</option>
                                        <option value="LGU">LGU</option>
                                        <option value="NGA">NGA</option>
                                        <option value="SUC">SUC</option>
                                        <option value="Private ESP">Private ESP</option>
                                        <option value="LS">LS</option>
                                        <option value="CSO">CSO</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Office Telephone Number</label>
                                <input type="text" class="form-control text-line" id="office_tel"/>
                            </div>
                            <div class="col-md-3">
                                <label>Position</label>
                                <input type="text" class="form-control text-line" id="position"/>
                            </div>
                            <div class="col-md-3">
                                <label>Designation</label>
                                <input type="text" class="form-control text-line" id="designation"/>
                            </div>
                            <div class="col-md-3">
                                <label>Status of Appointment</label>
                                <div class="input-group mb-3">
                                    <select class="form-select form-control text-line" id="office_type">
                                        <option selected>Select</option>
                                        <option value="Permanent">Permanent</option>
                                        <option value="Contract of Service">Contract of Service</option>
                                        <option value="Casual">Casual</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex" style="justify-content: flex-end">
                            <div>
                                <button type="submit" class="btn btn-success mr-2 " id="updateCurrentEmployment_btn">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
                <!--end::Body-->
            </div>
        </div>
        <!--end::Account Information-->
        <!--end::User and Account Information Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
@endsection