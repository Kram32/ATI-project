@extends('dashboard.layouts')

@section('page_title', 'Edit Personal Information')

@section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="row">
            <!--begin::Pesonal Information-->
            <div class="max-width-950">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Personal Information - Edit</h3>
                    </div>
                    <!--end::Header-->
                    <form class="form">
                        <div class="card-body dashboard-personal">
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label>Last Name:</label>
                                    <input type="text" class="form-control text-line" id="lname"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>First Name:</label>
                                    <input type="text" class="form-control text-line" id="fname"/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Middle Initial:</label>
                                    <input type="text" class="form-control text-line" id="mname"/>
                                </div>
                                <div class="col-lg-2">
                                    <label>Suffix:</label>
                                    <input type="text" class="form-control text-line" id="suffix" placeholder="Sr., Jr., I, II, III, etc."/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <label>Sex:</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select form-control text-line" id="sex">
                                            <option selected>Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label>Birthday:</label>
                                    <div class="input-group date" id="bdaypicker">
                                        <input class="form-control text-line" id="date" name="date" placeholder="MM/DD/YY" type="text"/>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <label>Age:</label>
                                    <input type="text" class="form-control text-line" id="age"/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Civil Status:</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select form-control text-line" id="civilstatus">
                                            <option selected>Select</option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="widow_widower">Widow/Widower</option>
                                            <option value="separated">Separated</option>
                                            <option value="living_in">Living-In</option>
                                        </select>
                                    </div>
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
            <!--end::Personal Information-->
        </div>
    </div>
    <!--end::Container-->
    
</div>
<!--end::Entry-->
@endsection