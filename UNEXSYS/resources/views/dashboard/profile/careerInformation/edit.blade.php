@extends('dashboard.layouts')

@section('page_title', 'Career Information')

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
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Career Information - Edit</h3>
                    </div>
                    <!--end::Header-->
                    <form class="form">
                        <div class="card-body dashboard-personal">
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <label>Scope of Assignment:</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select form-control text-line" id="scope_assign">
                                            <option selected>Select</option>
                                            <option value="national">National</option>
                                            <option value="regional">Regional</option>
                                            <option value="provincial">Provincial</option>
                                            <option value="municipal">Municipal</option>
                                            <option value="city">City</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>Programs being handled/involvement:</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select form-control text-line" id="programs_involved">
                                            <option selected>Select</option>
                                            <option value="program-1">Program 1</option>
                                            <option value="program-2">Program 2</option>
                                            <option value="program-3">Program 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label>Number of Barangays Covered:</label>
                                    <input type="text" class="form-control text-line" id="brgy_covered"/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Time Alocation to Extension of Work:</label>
                                    <input type="text" class="form-control text-line" id="time_alloc_ext"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <label>Salary Grade:</label>
                                    <input type="text" class="form-control text-line" id="salary_grade"/>
                                </div>
                                <div class="col-lg-2">
                                    <label>Exact Amount:</label>
                                    <input type="text" class="form-control text-line" id="salary_grade"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>Year Started in Government Service:</label>
                                    <input type="text" class="form-control text-line" id="year_started_govt_service"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>Year Started in Extension Service:</label>
                                    <input type="text" class="form-control text-line" id="year_started_ext_service"/>
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