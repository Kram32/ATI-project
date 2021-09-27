@extends("dashboard.layouts")


@section('page_title', 'Edit Identification Card')


@section("content")
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Identification Card-->
        <div class="max-width-950">
            <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                <!--begin::Header-->
                <div class="card-header border-0">
                    <h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Identification Card</h3>
                </div>
                <!--end::Header-->
                
                <!--begin::Body-->
                <!--begin::Form-->
                <form class="form">
                    <div class="card-body dashboard-personal">
                        <div class="form-group row mt-3">
                            <div class="col-lg-2">
                                <label>ID Selection:</label>
                                <div class="input-group mb-3">
                                    <select class="form-select form-control text-line" id="primary_id1">
                                        <option selected>Select</option>
                                        <option value="primary">Primary</option>
                                        <option value="secondary">Secondary</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <label>Primary ID:</label>
                                <div class="input-group mb-3">
                                    <select class="form-select form-control text-line" id="office_type">
                                        <option selected>Select</option>
                                        <option value="sss">SSS</option>
                                        <option value="umid">UMID</option>
                                        <option value="gsis">GSIS</option>
                                        <option value="driver">driver</option>
                                        <option value="prc">PRC</option>
                                        <option value="postal">Postal ID</option>
                                        <option value="passport">Passport</option>
                                        <option value="philhealth">PhilHealth ID</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <label>ID Number:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control text-line" id="primary_id_no1" placeholder="XXX-XXX-XXX-XXXX"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Upload ID - 1:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control text-line" placeholder="Uploaded" disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-2">
                                <label>Secondary ID:</label>
                                <div class="input-group mb-3">
                                    <select class="form-select form-control form-control text-line" id="secondary_id">
                                        <option selected>Select</option>
                                        <option value="sss">SSS</option>
                                        <option value="umid">UMID</option>
                                        <option value="gsis">GSIS</option>
                                        <option value="driver">driver</option>
                                        <option value="prc">PRC</option>
                                        <option value="postal">Postal ID</option>
                                        <option value="passport">Passport</option>
                                        <option value="philhealth">PhilHealth ID</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <label>ID Number:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control text-line" id="secondary_id_no" placeholder="XXX-XXX-XXX-XXXX"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Upload ID - 2</label>
                                <div>
                                    <label style="font-size: 12px;">Front</label>
                                    <div class="dropzone dropzone-default front_id border-success" id="kt_dropzone_3">
                                        <div class="dropzone-msg dz-message needsclick">
                                            <h3 class="dropzone-msg-title">Drop a file here or click to upload.</h3>
                                            <span class="dropzone-msg-desc">FRONT ID</span>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top: 12px;">
                                    <label style="font-size: 12px;">Back</label>
                                    <div class="dropzone dropzone-default back_id border-success" id="kt_dropzone_4">
                                        <div class="dropzone-msg dz-message needsclick">
                                            <h3 class="dropzone-msg-title">Drop a file here or click to upload.</h3>
                                            <span class="dropzone-msg-desc">BACK ID</span>
                                        </div>
                                    </div>
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
        <!--end::Identification Card Row-->
    </div>
<!--end::Container-->
</div>
<!--end::Entry-->


@endsection



