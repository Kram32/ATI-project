@extends('dashboard.layouts')

@section('page_title', 'Edit Account Information')

@section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="row">
            <!--begin::Account Information-->
            <div class="max-width-950">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Account Information - Edit</h3>
                    </div>
                    <!--end::Header-->
                    <form class="form">
                        <div class="card-body dashboard-personal">
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label>Region:</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select form-control text-line" id="region">
                                            <option selected>Select</option>
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label>Province/District:</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select form-control text-line" id="province_district">
                                            <option selected>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label>Municipality/City:</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select form-control text-line" id="mun_city">
                                            <option selected>Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label>Barangay:</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select form-control text-line" id="brgy">
                                            <option selected>Select</option>
                                        </select>
                                    </div>
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
                                <div class="col-lg-3">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control text-line" id="mobileno"/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Email Address</label>
                                    <input type="text" class="form-control text-line" id="email"/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Password</label>
                                    <input type="password" class="form-control text-line" id="password"/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control text-line" id="confirm_pass"/>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex" style="justify-content: flex-end">
                                <div>
                                    <button type="submit" class="btn btn-success mr-2 " id="updateAcctInfo_btn">Update</button>
                                </div>
                            </div>
                        </div>

                    </form>
                    <!--end::Form-->
                    <!--end::Body-->
                </div>
            </div>
            <!--end::Account Information-->
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
@endsection