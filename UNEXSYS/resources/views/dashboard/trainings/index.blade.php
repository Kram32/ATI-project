@extends('dashboard.layouts')

@section('page_title', 'Trainings')

@section('content')

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Trainings Forms Row-->  
         <div class="row">
            <div class="max-width-950">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Attendance To Relevant Training</h3>
                    </div>
                    <!--end::Header-->

                      
                   <!--begin::Body-->
                   <div class="card-body dashboard-personal">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable table-striped" id="kt_datatable">
                        <thead>
                            <tr>
                                <th hidden>ID</th>
                                <th>Training Title</th>
                                <th>Type</th>
                                <th>Sponsor/Funded by</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td hidden>1</td>
                                <td>Organic Agriculture Training</td>
                                <td>National</td>
                                <td>Government</td>
                                <td>Mar 1, 2015 </td>
                                <td>Apr 1, 2015</td>
                                <td nowrap>
                                    <a href="{{ route("addTrainings") }}"><i class="fa fa-pencil mr-5" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td hidden>1</td>
                                <td>High Value Crops Training </td>
                                <td>International</td>
                                <td>Government</td>
                                <td>Mar 1, 2015 </td>
                                <td>Apr 1, 2015</td>
                                <td nowrap>
                                    <a href="{{ route("addTrainings") }}"><i class="fa fa-pencil mr-5" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td hidden>1</td>
                                <td>Livestock Training </td>
                                <td>Local</td>
                                <td>NGO</td>
                                <td>Dec 1, 2015</td>
                                <td>Jan 12, 2016</td>
                                <td nowrap>
                                    <a href="{{ route("addTrainings") }}"><i class="fa fa-pencil mr-5" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-lg-3">
                            <a class="btn btn-success mt-3 dashboard_btn" href="{{ route("addTrainings") }}"><i class="fa fa-plus"></i>&nbsp;Add</a>
                        </div>
                    </div>
                    <!--end: Datatable-->
                </div>
                </div>
            </div>
         </div>
        <!--end::Trainings Forms Row-->
        <!--end::Dashboard-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

@endsection