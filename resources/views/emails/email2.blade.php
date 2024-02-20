<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome to Villa Malie</title>
		<meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ url('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank app-blank">
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-column-fluid">
				
				<!--end::Header-->
				<!--begin::Body-->
				<div class="scroll-y flex-column-fluid px-10 py-10" style="padding-top: 50px; padding-bottom: 50px; background-color:#D5D9E2; --kt-scrollbar-color: #d9d0cc; --kt-scrollbar-hover-color: #d9d0cc">
					<!--begin::Email template-->
					<style>html,body { padding:0; margin:0; font-family: Inter, Helvetica, "sans-serif"; } a:hover { color: #009ef7; }</style>
					<div id="#kt_app_body_content" style="background-color:#D5D9E2; font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
						<div style="background-color:#ffffff; padding: 45px 0 34px 0; border-radius: 24px; margin:40px auto; max-width: 600px;">
							<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto" style="border-collapse:collapse">
								<tbody>
									<tr>
										<td align="center" valign="center" style="text-align:center; padding-bottom: 10px">
											<!--begin:Email content-->
											<div style="text-align:center; margin:0 60px 34px 60px">
												<!--begin:Logo-->
												<div style="margin-bottom: 10px">
													<a href="{{ url('/') }}" rel="noopener" target="_blank">
														<img alt="Logo" src="{{ url('home/images/logo-header.png') }}" style="height: 70px" />
													</a>
												</div>
												<!--end:Logo-->
												
												<!--begin:Text-->
												<div style="font-size: 14px; font-weight: 500; margin-bottom: 42px; font-family:Arial,Helvetica,sans-serif">
													<p style="margin-bottom:9px; color:#181C32; font-size: 22px; font-weight:700">Welcome to Villa Malie</p>
													<p style="margin-bottom:0px; color:#7E8299">one of only eight exclusive villas in</p>
													<p style="margin-bottom:0px; color:#7E8299">"The Bayridge" compound. As our special guest</p>
													<p style="margin-bottom:0px; color:#7E8299">you'll have the privilege of enjoying </p>
                                                    <p style="margin-bottom:0px; color:#7E8299">our luxurious three-bedroom</p>
												</div>
												<!--end:Text-->
												<!--begin:Order-->
												<div style="margin-bottom: 15px">
													<!--begin:Title-->
													<h3 style="text-align:left; color:#181C32; font-size: 18px; font-weight:600; margin-bottom: 22px">Booking summary</h3>
													<!--end:Title-->
													<!--begin:Items-->
													<div style="padding-bottom:9px">
														<!--begin:Item-->
														<div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500; margin-bottom:8px">
															<!--begin:Description-->
															<div style="font-family:Arial,Helvetica,sans-serif">Booking Name</div>
															<!--end:Description-->
															<!--begin:Total-->
															<div style="font-family:Arial,Helvetica,sans-serif">{{ $details['first_name'] }} {{ $details['last_name'] }}</div>
															<!--end:Total-->
														</div>
														<!--end:Item-->
														<!--begin:Item-->
														<div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500; margin-bottom:8px">
															<!--begin:Description-->
															<div style="font-family:Arial,Helvetica,sans-serif">Phone</div>
															<!--end:Description-->
															<!--begin:Total-->
															<div style="font-family:Arial,Helvetica,sans-serif">{{ $details['phone'] }}</div>
															<!--end:Total-->
														</div>
                                                        <div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500; margin-bottom:8px">
															<!--begin:Description-->
															<div style="font-family:Arial,Helvetica,sans-serif">Email</div>
															<!--end:Description-->
															<!--begin:Total-->
															<div style="font-family:Arial,Helvetica,sans-serif">{{ $details['email'] }}</div>
															<!--end:Total-->
														</div>
                                                        <div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500; margin-bottom:8px">
															<!--begin:Description-->
															<div style="font-family:Arial,Helvetica,sans-serif">Detail</div>
															<!--end:Description-->
															<!--begin:Total-->
															<div style="font-family:Arial,Helvetica,sans-serif">{{ $details['note'] }}</div>
															<!--end:Total-->
														</div>
														<!--end:Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed" style="margin:15px 0"></div>
														<!--end::Separator-->
														<!--begin:Item-->
														<div style="display:flex; justify-content: space-between; color:#7E8299; font-size: 14px; font-weight:500">
															<!--begin:Description-->
															<div style="font-family:Arial,Helvetica,sans-serif">Booking Date</div>
															<!--end:Description-->
															<!--begin:Total-->
															<div style="color:#50cd89; font-weight:700; font-family:Arial,Helvetica,sans-serif">{{ $details['departure'] }} - {{ $details['adults'] }}</div>
															<!--end:Total-->
														</div>
														<!--end:Item-->
													</div>
													<!--end:Items-->
												</div>
												<!--end:Order-->
												
											</div>
											<!--end:Email content-->
										</td>
									</tr>
									<tr>
										<td align="center" valign="center" style="font-size: 13px; text-align:center; padding: 0 10px 10px 10px; font-weight: 500; color: #A1A5B7; font-family:Arial,Helvetica,sans-serif">
											<p style="color:#181C32; font-size: 16px; font-weight: 600; margin-bottom:9px">It’s all about customers!</p>
											<p style="margin-bottom:2px">Call our customer care number: {{ get_phone() }}</p>
											<p style="margin-bottom:4px">You may reach us at
											<a href="mailto:{{ get_email() }}" rel="noopener" target="_blank" style="font-weight: 600">{{ get_email() }}</a>.</p>
											<p>We serve Mon-Sun, 9AM-18AM</p>
										</td>
									</tr>
									<tr>
										<td align="center" valign="center" style="text-align:center; padding-bottom: 20px;">
											<a href="#" style="margin-right:10px">
												<img alt="Logo" src="{{ url('admin/assets/media/email/icon-facebook.svg') }}" />
											</a>
											<a href="#">
												<img alt="Logo" src="{{ url('admin/assets/media/email/icon-twitter.svg') }}" />
											</a>
										</td>
									</tr>
									<tr>
										<td align="center" valign="center" style="font-size: 13px; padding:0 15px; text-align:center; font-weight: 500; color: #A1A5B7;font-family:Arial,Helvetica,sans-serif">
											<p>&copy; Copyright Villamaliesamui.
											</p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!--end::Email template-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Root-->
	
	</body>
	<!--end::Body-->
</html>