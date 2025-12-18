@extends('base.index')

@section('page-title')
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Order Details</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">eCommerce</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Sales</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
								</div>
								<!--end::Toolbar container-->
							</div>
@endsection

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Order details page-->
									<div class="d-flex flex-column gap-7 gap-lg-10">
										<div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
											<!--begin:::Tabs-->
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto">
												<!--begin:::Tab item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_summary">Order Summary</a>
												</li>
												<!--end:::Tab item-->
											</ul>
											<!--end:::Tabs-->
											<!--begin::Button-->
											<a href="apps/ecommerce/sales/listing.html" class="btn btn-icon btn-light btn-active-secondary btn-sm ms-auto me-lg-n7">
												<i class="ki-duotone ki-left fs-2"></i>
											</a>
											<!--end::Button-->
											<!--begin::Button-->
											<a href="apps/ecommerce/sales/edit-order.html" class="btn btn-success btn-sm me-lg-n7">Edit Order</a>
											<!--end::Button-->
											<!--begin::Button-->
											<a href="apps/ecommerce/sales/add-order.html" class="btn btn-primary btn-sm">Add New Order</a>
											<!--end::Button-->
										</div>
										<!--begin::Order summary-->
										<div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
											<!--begin::Order details-->
											<div class="card card-flush py-4 flex-row-fluid">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Order Details (#14534)</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
															<tbody class="fw-semibold text-gray-600">
																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		<i class="ki-duotone ki-calendar fs-2 me-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>Date Added</div>
																	</td>
																	<td class="fw-bold text-end">25/06/2025</td>
																</tr>
																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		<i class="ki-duotone ki-wallet fs-2 me-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>Payment Method</div>
																	</td>
																	<td class="fw-bold text-end">Online 
																	<img src="assets/media/svg/card-logos/visa.svg" class="w-50px ms-2" /></td>
																</tr>
																																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		<i class="ki-duotone ki-status fs-2 me-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>Status</div>
																	</td>
																	<td class="fw-bold text-end">Processing 
																	<img src="assets/media/svg/card-logos/visa.svg" class="w-50px ms-2" /></td>
																</tr>
															</tbody>
														</table>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Order details-->
											<!--begin::Customer details-->
											<div class="card card-flush py-4 flex-row-fluid">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Customer Details</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
															<tbody class="fw-semibold text-gray-600">
																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		<i class="ki-duotone ki-profile-circle fs-2 me-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>Customer</div>
																	</td>
																	<td class="fw-bold text-end">
																		<div class="d-flex align-items-center justify-content-end">
																			<!--begin:: Avatar -->
																			<div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
																				<a href="apps/ecommerce/customers/details.html">
																					<div class="symbol-label">
																						<img src="assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
																					</div>
																				</a>
																			</div>
																			<!--end::Avatar-->
																			<!--begin::Name-->
																			<a href="apps/ecommerce/customers/details.html" class="text-gray-600 text-hover-primary">Dan Wilson</a>
																			<!--end::Name-->
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		<i class="ki-duotone ki-sms fs-2 me-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>Email</div>
																	</td>
																	<td class="fw-bold text-end">
																		<a href="apps/user-management/users/view.html" class="text-gray-600 text-hover-primary">dam@consilting.com</a>
																	</td>
																</tr>
																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		<i class="ki-duotone ki-phone fs-2 me-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>Game ID</div>
																	</td>
																	<td class="fw-bold text-end">6141234567</td>
																</tr>
															</tbody>
														</table>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Customer details-->
											<!--begin::Documents-->
											<div class="card card-flush py-4 flex-row-fluid">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Documents</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
															<tbody class="fw-semibold text-gray-600">
																<tr>
																	<td class="text-muted">
																		<div class="d-flex align-items-center">
																		<i class="ki-duotone ki-devices fs-2 me-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																			<span class="path5"></span>
																		</i>Invoice 
																		<span class="ms-1" data-bs-toggle="tooltip" title="View the invoice generated by this order.">
																			<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span></div>
																	</td>
																	<td class="fw-bold text-end">
																		<a href="apps/invoices/view/invoice-3.html" class="text-gray-600 text-hover-primary">#INV-000414</a>
																	</td>
															</tbody>
														</table>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Documents-->
										</div>
										<!--end::Order summary-->
										<!--begin::Tab content-->
										<div class="tab-content">
											<!--begin::Tab pane-->
											<div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
												<!--begin::Orders-->
													<!--begin::Product List-->
													<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
														<!--begin::Card header-->
														<div class="card-header">
															<div class="card-title">
																<h2>Order #14534</h2>
															</div>
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0">
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
																	<thead>
																		<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
																			<th class="min-w-175px">Product</th>
																			<th class="min-w-100px text-end">Product ID</th>
																			<th class="min-w-100px text-end">Total</th>
																		</tr>
																	</thead>
																	<tbody class="fw-semibold text-gray-600">
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<!--begin::Thumbnail-->
																					<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																						<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/1.png);"></span>
																					</a>
																					<!--end::Thumbnail-->
																					<!--begin::Title-->
																					<div class="ms-5">
																						<a href="apps/ecommerce/catalog/edit-product.html" class="fw-bold text-gray-600 text-hover-primary">Product 1</a>
																						<div class="fs-7 text-muted">Delivery Date: 25/06/2025</div>
																					</div>
																					<!--end::Title-->
																				</div>
																			</td>
																			<td class="text-end">03337003</td>
																			<td class="text-end">$240.00</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<!--begin::Thumbnail-->
																					<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																						<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/100.png);"></span>
																					</a>
																					<!--end::Thumbnail-->
																					<!--begin::Title-->
																					<div class="ms-5">
																						<a href="apps/ecommerce/catalog/edit-product.html" class="fw-bold text-gray-600 text-hover-primary">Footwear</a>
																						<div class="fs-7 text-muted">Delivery Date: 25/06/2025</div>
																					</div>
																					<!--end::Title-->
																				</div>
																			</td>
																			<td class="text-end">03242007</td>
																			<td class="text-end">$24.00</td>
																		</tr>
																		<tr>
																			<td colspan="4" class="text-end">Subtotal</td>
																			<td class="text-end">$264.00</td>
																		</tr>
																		<tr>
																			<td colspan="4" class="text-end">Discount</td>
																			<td class="text-end">$0.00</td>
																		</tr>
																		<tr>
																			<td colspan="4" class="fs-3 text-gray-900 text-end">Grand Total</td>
																			<td class="text-gray-900 fs-3 fw-bolder text-end">$269.00</td>
																		</tr>
																	</tbody>
																</table>
																<!--end::Table-->
															</div>
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Product List-->
												</div>
												<!--end::Orders-->
											</div>
											<!--end::Tab pane-->
										</div>
										<!--end::Tab content-->
									</div>
									<!--end::Order details page-->
								</div>
								<!--end::Content container-->
							</div>
@endsection