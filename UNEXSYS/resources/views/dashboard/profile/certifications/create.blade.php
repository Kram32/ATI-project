@extends('dashboard.layouts')

@section('page_title', 'Certifications')

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
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Certifications - Add</h3>
                    </div>
                    <!--end::Header-->
                    <form class="form">
                        <div class="card-body dashboard-personal">
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label>Type of Certification:</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select form-control text-line" id="certification_type">
                                            <option selected>Select</option>
                                            <option value="prc">PRC</option>
                                            <option value="ces">CES</option>
                                            <option value="csc-pro">CSC Professional</option>
                                            <option value="csc-sub">CSC Sub-Professional</option>
                                            <option value="tesda">TESDA Competency</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label>Year Acquired/Registered:</label>
                                    <input type="text" class="form-control text-line" id="year_acquired"/>
                                </div>
                                <div class="col-lg-3">
                                    <label>TESDA Competency:</label>
                                    <input type="text" class="form-control text-line" id="tesda_competency"/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Others:</label>
                                    <input type="text" class="form-control text-line" id="other_certifications"/>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex" style="justify-content: flex-end">
                                <div>
                                    <button type="submit" class="btn btn-success mr-2 " id="addCertificationsbtn">Add</button>
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