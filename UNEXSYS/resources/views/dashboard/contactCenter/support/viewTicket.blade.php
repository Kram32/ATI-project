
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!--begin::Head-->
    <head><base href="../../../">
                <meta charset="utf-8"/>
        <title>AEW Registry System | Account Registraiton</title>
        <meta name="description" content="Multi column form examples"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->

		



        <!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/css/atistyles.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/ati.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->
                <!--end::Layout Themes-->

        <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
		<link rel="stylesheet" href="../../../public/css/app.css">

    </head>
    <!--end::Head-->

<div class="row">
	<div class="col-lg-6 m-auto">
    <!--begin::Body-->
    <body  id="kt_body"  class="container mt-10 quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading"  >

    <!--begin::View Ticket-->   
	  <div class="row" id="career-info">
		<div class="max-width-950 mt-8">
			<div class="card card-custom bgi-no-repeat gutter-b card-stretch dashboard-personal" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-4.svg)">
				<!--begin::Header-->
				<div class="card-header border-0">
					<h3 class="card-title font-weight-bolder text-dark"><i class="fas fa-dot-circle text-success mr-3"></i>Inquiry</h3>
				</div>

				<div class="row container">
					<div class="col-lg-4">
						<input type="text" class="form-control text-line" required="required" placeholder="Search Ticket No."/>
					</div>

					<div class="col-lg-4">
						<input type="text" class="form-control text-line" required="required" placeholder="Search Subject"/>
					</div>
				</div>
				<!--end::Header-->
				 <!--begin::Body--> 
				<div class="card-body">
					<!--begin: Datatable-->
					<table class="table table-separate table-head-custom table-checkable table-striped" id="kt_datatable">
						<thead>
							<tr>
								<th hidden>ID</th>
								<th>Ticket No.</th>
								<th>Type</th>
								<th>Subject</th>
								<th>Status</th>
								<th>Email</th>
								<th>Date</th>
								<th>Actions</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td hidden>1</td>
								<td>20001 001</td>
								<td>IT RELATED SYSTEMS</td>
								<td>No Functions</td>
								<td>Open</td>
								<td>joey.bell@gmail.com</td>
								<td>Apr 1, 2015</td>
								<td nowrap>
								  <a href="{{ route("respond") }}"><span>Respond</span> <i class="fa fa-pencil mx-3" aria-hidden="true"></i></a>
								</td>
								
							</tr>
							<tr>
								<td hidden>2</td>
								<td>20001 002</td>
								<td>IT RELATED SYSTEMS</td>
								<td>No Functions</td>
								<td>Open</td>
								<td>joey.bell@gmail.com</td>
								<td>Apr 1, 2015</td>
								<td nowrap>
									<a href="{{ route("respond") }}"><span>Respond</span> <i class="fa fa-pencil mx-3" aria-hidden="true"></i></a>
									
								</td>
							</tr>
							<tr>
								<td hidden>2</td>
								<td>20001 003</td>
								<td>IT RELATED SYSTEMS</td>
								<td>No Functions</td>
								<td>Open</td>
								<td>joey.bell@gmail.com</td>
								<td>Apr 1, 2015</td>
								<td nowrap>
									<a href="{{ route("respond") }}"><span>Respond</span> <i class="fa fa-pencil mx-3" aria-hidden="true"></i></a>
									
								</td>
							</tr>
						</tbody>
					</table>
					<!--end: Datatable-->
					<div class="d-flex" style="justify-content: center">
						<div>
							<a class="btn btn-success mr-2 px-15 mt-3" href="{{ route("contactCenter") }}">Back</a>
						</div>
					</div>
				</div>
				<!--end::Body-->
			</div>
		</div>
	</div>
	<!--end::View Ticket-->
	</div>
</div>


    </body>
    <!--end::Body-->
</html>