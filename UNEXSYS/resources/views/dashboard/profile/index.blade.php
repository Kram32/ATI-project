@extends('dashboard.layouts')

@section('page_title', 'Dashboard')

@section('content')

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->

        <!--begin::User and Account Information Row-->  
        <div class="row" id="account-info">
            <!--begin::Account Information-->
            <div class="max-width-950">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Account Information</h3>
                        <div class="card-toolbar">
                            <a href="/editOtherAccountInfo" class="btn btn-clean btn-sm btn-icon edit_icon" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body dashboard-personal">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>Region</label>
                                    <input type="text" class="form-control text-line" id="region" disabled/>
                                </div>
                                <div class="col-md-3">
                                    <label>Province</label>
                                    <input type="text" class="form-control text-line" id="province" disabled/>
                                </div>
                                <div class="col-md-3">
                                    <label>Municipality/City</label>
                                    <input type="text" class="form-control text-line" id="city" disabled/>
                                </div>
                                <div class="col-md-3">
                                    <label>Barangay</label>
                                    <input type="text" class="form-control text-line" id="barangay" disabled/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label>Street Address</label>
                                    <input type="text" class="form-control text-line" id="street" disabled/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control text-line" id="zipcode" disabled/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control text-line" id="mobileno" disabled/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Email Address</label>
                                    <input type="text" class="form-control text-line" id="email" disabled/>
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
        <!--end::User and Account Information Row-->

        <!--begin::Current Employment Row-->  
        <div class="row" id="current-employment">
            <div class="max-width-950">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Current Employment</h3>
                        <div class="card-toolbar">
                            <a href="/editCurrentEmployment" class="btn btn-clean btn-sm btn-icon edit_icon" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <!--end::Header-->
                    
                    <!--begin::Body-->
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body dashboard-personal">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>Region</label>
                                    <input type="text" class="form-control text-line" id="work_region" disabled/>
                                </div>
                                <div class="col-md-3">
                                    <label>Province</label>
                                    <input type="text" class="form-control text-line" id="work_province" disabled/>
                                </div>
                                <div class="col-md-3">
                                    <label>Municipality/City</label>
                                    <input type="text" class="form-control text-line" id="work_city" disabled/>
                                </div>
                                <div class="col-md-3">
                                    <label>Barangay</label>
                                    <input type="text" class="form-control text-line" id="work_barangay" disabled/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label>Street Address</label>
                                    <input type="text" class="form-control text-line" id="work_street" disabled/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control text-line" id="work_zipcode" disabled/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Office Name</label>
                                    <input type="text" class="form-control text-line" id="work_name" disabled/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Office Type</label>
                                    <input type="text" class="form-control text-line" id="work_type" disabled/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label>Office telephone No.</label>
                                    <input type="text" class="form-control text-line" id="work_street" disabled/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Position</label>
                                    <input type="text" class="form-control text-line" id="work_position" disabled/>
                                </div>
                                <div class="col-lg-3">
                                    <label>Deisgnation</label>
                                    <input type="text" class="form-control text-line" id="work_designation" disabled/>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                    <!--end::Body-->
                </div>
            </div>
        </div>
        <!--end::Current Employment Row--> 

        <!--begin::Identification Card Row-->  
        <div class="row" id="identification-card">
            <div class="max-width-950">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Identification Card</h3>
                        <div class="card-toolbar">
                            <a href="/editIdentificationCard" class="btn btn-clean btn-sm btn-icon edit_icon" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!--end::Header-->
                    
                    <!--begin::Body-->
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body dashboard-personal">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>ID Type</label>
                                    <input type="text" class="form-control text-line" id="id_type" disabled/>
                                </div>
                                <div class="col-md-3">
                                    <label>ID Name</label>
                                    <input type="text" class="form-control text-line" id="id_name" disabled/>
                                </div>
                                <div class="col-md-3">
                                    <label>ID Number</label>
                                    <input type="text" class="form-control text-line" id="id_number" disabled/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <a class="btn btn-success mr-2 dashboard_btn" href="/editIdentificationCard">View ID</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                    <!--end::Body--> <a href=""></a>
                </div>
            </div>
        </div>
        <!--end::Identification Card Row-->

        <!--begin::Career Information Row-->
        <div class="row" id="career-info">
            <div class="max-width-950">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Career Information</h3>
                    </div>
                    <!--end::Header-->
                     <!--begin::Body-->
                    <div class="card-body dashboard-personal">
                        <!--begin: Datatable-->
                        <table class="table table-separate table-head-custom table-checkable table-striped" id="kt_datatable">
                            <thead>
                                <tr>
                                    <th hidden>ID</th>
                                    <th>Programs</th>
                                    <th>No. of Barangays Covered</th>
                                    <th>Time Allocation to Extension Work</th>
                                    <th>Salary Grade</th>
                                    <th>Exact Amount</th>
                                    <th>Year Started in Government Service</th>
                                    <th>Year Started in Extension Service</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td hidden>1</td>
                                    <td>Program 1</td>
                                    <td>5</td>
                                    <td>60 hours</td>
                                    <td>15</td>
                                    <td>30,000</td>
                                    <td>2016</td>
                                    <td>2019</td>
                                    <td nowrap>
                                        <a href=""><i class="fa fa-pencil mr-5" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td hidden>2</td>
                                    <td>Program 2</td>
                                    <td>4</td>
                                    <td>30 hours</td>
                                    <td>15</td>
                                    <td>30,000</td>
                                    <td>2019</td>
                                    <td>2021</td>
                                    <td nowrap>
                                        <a href=""><i class="fa fa-pencil mr-5" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                        <div class="row">
                            <div class="col-lg-3">
                                <a class="btn btn-success mr-2 dashboard_btn" href="/careerInformation"><i class="fa fa-plus"></i>&nbsp;Add</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
        </div>
        <!--end::Career Information Row-->

        <!--begin::Education Background Row-->  
        <div class="row" id="educ-background">
            <div class="max-width-950">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Educational Background</h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body dashboard-personal">
                        <!--begin: Datatable-->
                        <table class="table table-separate table-head-custom table-checkable table-striped" id="kt_datatable">
                            <thead>
                                <tr>
                                    <th hidden>ID</th>
                                    <th>Educational Attainment</th>
                                    <th>Course</th>
                                    <th>Field of Specialization</th>
                                    <th>School Attended</th>
                                    <th>Year Graduated</th>
                                    <th>School Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td hidden>1</td>
                                    <td>College</td>
                                    <td>BS Information Technology</td>
                                    <td>Web Development</td>
                                    <td>STI College</td>
                                    <td>2016</td>
                                    <td>Quezon Avenue, Quezon City</td>
                                    <td nowrap>
                                        <a href=""><i class="fa fa-pencil mr-5" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                        <div class="row">
                            <div class="col-lg-3">
                                <a class="btn btn-success mr-2 dashboard_btn" href="/educationalBackground"><i class="fa fa-plus"></i>&nbsp;Add</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
        </div>
        <!--end::Education Background Card Row-->

          <!--begin::Eligibiity Row-->  
          <div class="row" id="eligibility">
            <div class="max-width-950">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Eligibility/License</h3>
                    </div>
                    <!--end::Header-->
                    
                   <!--begin::Body-->
                   <div class="card-body dashboard-personal">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable table-striped" id="kt_datatable">
                        <thead>
                            <tr>
                                <th hidden>ID</th>
                                <th>Eligibility/License</th>
                                <th>Year/Acquired</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td hidden>1</td>
                                <td>CSC</td>
                                <td>2017</td>
                                <td nowrap>
                                    <a href=""><i class="fa fa-pencil mr-5" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                    <div class="row">
                        <div class="col-lg-3">
                            <a class="btn btn-success mr-2 dashboard_btn" href="/eligibility"><i class="fa fa-plus"></i>&nbsp;Add</a>
                        </div>
                    </div>
                </div>
                <!--end::Body-->
                </div>
            </div>
        </div>
        <!--end::Eligibility Row-->

          <!--begin::Certifications Row-->  
          <div class="row" id="certifications">
            <div class="max-width-950">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Certifications</h3>
                    </div>
                    <!--end::Header-->
                    
                     <!--begin::Body-->
                   <div class="card-body dashboard-personal">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable table-striped" id="kt_datatable">
                        <thead>
                            <tr>
                                <th hidden>ID</th>
                                <th>Certifications</th>
                                <th>Year/Acquired</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td hidden>1</td>
                                <td>CSC Sub-Professional</td>
                                <td>2017</td>
                                <td nowrap>
                                    <a href=""><i class="fa fa-pencil mr-5" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                    <div class="row">
                        <div class="col-lg-3">
                            <a class="btn btn-success mr-2 dashboard_btn" href="/certifications"><i class="fa fa-plus"></i>&nbsp;Add</a>
                        </div>
                    </div>
                </div>
                <!--end::Body-->
                </div>
            </div>
        </div>
        <!--end::Certifications Row-->
        <!--end::Dashboard-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

@endsection