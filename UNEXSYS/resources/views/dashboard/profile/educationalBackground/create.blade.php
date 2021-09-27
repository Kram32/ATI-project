@extends('dashboard.layouts')

@section('page_title', 'Educational Background')

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
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Educational Background - Add</h3>
                    </div>
                    <!--end::Header-->
                    <form class="form">
                        <div class="card-body dashboard-personal">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Highest Educational Attainment:</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select form-control text-line" id="educ_attainment">
                                            <option selected>Select</option>
                                            <option value="doctorate">Doctorate</option>
                                            <option value="married">Master</option>
                                            <option value="bachelor">Bachelor</option>
                                            <option value="diploma">Diploma</option>
                                            <option value="vocational">Vocational</option>
                                            <option value="associate">Associate</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>Course:</label>
                                    <input type="text" class="form-control text-line" id="course"/>
                                </div>
                                <div class="col-lg-4">
                                    <label>Field of Specialization:</label>
                                    <input type="text" class="form-control text-line" id="field_specialized"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-5">
                                    <label>School Attended:</label>
                                    <input type="text" class="form-control text-line" id="school_attended"/>
                                </div>
                                <div class="col-lg-2">
                                    <label>Year Graduated:</label>
                                    <input type="text" class="form-control text-line" id="year_graduated"/>
                                </div>
                                <div class="col-lg-5">
                                    <label>School Address:</label>
                                    <input type="text" class="form-control text-line" id="school_address"/>
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