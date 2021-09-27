@extends('dashboard.layouts')

@section('page_title', 'Contact Center')

@section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Contact Center Row-->
        <div class="row max-width-950">
            <!--begin::Support Card--> 
            <div class="flex-grow-1">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <!--begin::Body-->
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body contact-center-card">
                            <div class="form-group row">
                                <div class="col-md-12 text-align-center">
                                    <label style="font-size: 50px;">Support</label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-space-evenly">
                                <div>
                                    <a class="btn btn-success mr-2 contactcenter_btn" data-toggle="modal" id="modalBtn" data-target="#dataconsent_modal" data-attr="#dataconsent_modal">Add Tickets</a>
                                </div>
                                <div>
                                    <a class="btn btn-success mr-2 contactcenter_btn" href="{{ route("viewTickets") }}">View Tickets</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                    <!--end::Body-->
                </div>
            </div>
            <!--end::Support Card-->
            
            <!--begin::Inquiry Card-->
            <div class="flex-grow-1 padding-left-20">
                <div class="card card-custom bgi-no-repeat gutter-b card-stretch" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
                    <!--begin::Body-->
                        <div class="card-body contact-center-card">
                            <div class="form-group row">
                                <div class="col-md-12 text-align-center">
                                    <label style="font-size: 50px;">Inquiry</label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-space-evenly">
                                <div>
                                    <a class="btn btn-success mr-2 contactcenter_btn" href="{{ route("inquiry") }}"> Contact Us</a>
                                </div>
                            </div>
                        </div>
                    <!--end::Body-->
                </div>
            </div>
            <!--end::Inquiry Card-->
         </div>
        <!--end::Contact Center Row-->

    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

	<!-- Data Consent Modal -->
	<div class="modal fade" id="dataconsent_modal" role="dialog">
		<div class="modal-dialog" style="margin-top:50px;">
			<div class="modal-content">
				<div class="modal-header" id="dataconsent_modalheader">
					<div>
						<span style="font-size: 15px; font-weight: 500;"><i class="fas fa-dot-circle text-success mr-3"></i>FEED BACK</span>
                    </div>
				</div>
				<div class="modal-body" id="dataconsent_modalbody">
                    <form class="form">
                        <div class="card-body dashboard-personal">
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label>Select Feedback Type</label>
                                    <div class="input-group mb-2">
                                        <select class="form-select form-control text-line" id="gender">
                                            <option selected>Select</option>
                                            <option value="male">Feedback 1</option>
                                            <option value="female">Feedback 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label>Subject</label>
                                    <input type="email" class="form-control form-control text-line" placeholder="Enter Subject"/>
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label>Message</label>
                                    <textarea cols="30" rows="10" class="form-control form-control border-success" placeholder="Write a Message"></textarea>
                                </div>
                            </div>
            
                            
                            <div class="d-flex" style="justify-content: flex-end">
                                <div>
                                    <button type="submit" class="btn btn-success mr-2 " id="updateCurrentEmployment_btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
					<!--end::Form-->
				</div>
			</div>
		</div>
	</div>
	<!-- END OF Data Consent Modal -->
    
@endsection