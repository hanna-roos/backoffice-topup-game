@extends('layouts.app')

@section('page-title')
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Products Viewed Report</h1>
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
											<li class="breadcrumb-item text-muted">Reports</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Filter menu-->
										<div class="m-0">
											<!--begin::Menu toggle-->
											<a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-filter fs-6 text-muted me-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>Filter</a>
											<!--end::Menu toggle-->
											<!--begin::Menu 1-->
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_685c3205491c3">
												<!--begin::Header-->
												<div class="px-7 py-5">
													<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
												</div>
												<!--end::Header-->
												<!--begin::Menu separator-->
												<div class="separator border-gray-200"></div>
												<!--end::Menu separator-->
												<!--begin::Form-->
												<div class="px-7 py-5">
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Status:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<div>
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_685c3205491c3" data-allow-clear="true">
																<option></option>
																<option value="1">Approved</option>
																<option value="2">Pending</option>
																<option value="2">In Process</option>
																<option value="2">Rejected</option>
															</select>
														</div>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Member Type:</label>
														<!--end::Label-->
														<!--begin::Options-->
														<div class="d-flex">
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																<input class="form-check-input" type="checkbox" value="1" />
																<span class="form-check-label">Author</span>
															</label>
															<!--end::Options-->
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																<span class="form-check-label">Customer</span>
															</label>
															<!--end::Options-->
														</div>
														<!--end::Options-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Notifications:</label>
														<!--end::Label-->
														<!--begin::Switch-->
														<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
															<label class="form-check-label">Enabled</label>
														</div>
														<!--end::Switch-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="d-flex justify-content-end">
														<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
														<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Form-->
											</div>
											<!--end::Menu 1-->
										</div>
										<!--end::Filter menu-->
										<!--begin::Secondary button-->
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
@endsection

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Products-->
									<div class="card card-flush">
										<!--begin::Card header-->
										<div class="card-header align-items-center py-5 gap-2 gap-md-5">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<i class="ki-duotone ki-magnifier fs-2 position-absolute ms-4">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
												</div>
												<!--end::Search-->
												<!--begin::Export buttons-->
												<div id="kt_ecommerce_report_views_export" class="d-none"></div>
												<!--end::Export buttons-->
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
												<!--begin::Daterangepicker-->
												<input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_views_daterangepicker" />
												<!--end::Daterangepicker-->
												<!--begin::Filter-->
												<div class="w-150px">
													<!--begin::Select2-->
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Rating" data-kt-ecommerce-order-filter="rating">
														<option></option>
														<option value="all">All</option>
														<option value="rating-5">5 Stars</option>
														<option value="rating-4">4 Stars</option>
														<option value="rating-3">3 Stars</option>
														<option value="rating-2">2 Stars</option>
														<option value="rating-1">1 Stars</option>
													</select>
													<!--end::Select2-->
												</div>
												<!--end::Filter-->
												<!--begin::Export dropdown-->
												<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
												<i class="ki-duotone ki-exit-up fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>Export Report</button>
												<!--begin::Menu-->
												<div id="kt_ecommerce_report_views_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">Copy to clipboard</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">Export as Excel</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">Export as CSV</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">Export as PDF</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
												<!--end::Export dropdown-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_views_table">
												<thead>
													<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
														<th class="min-w-150px">Product</th>
														<th class="text-end min-w-100px">SKU</th>
														<th class="text-end min-w-100px">Rating</th>
														<th class="text-end min-w-100px">Price</th>
														<th class="text-end min-w-70px">Viewed</th>
														<th class="text-end min-w-100px">Percent</th>
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
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 1</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04849003</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$202.00</span>
														</td>
														<td class="text-end pe-0">
															<span>227900</span>
														</td>
														<td class="text-end pe-0">22.79%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/46.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 46</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02635005</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$133.00</span>
														</td>
														<td class="text-end pe-0">
															<span>253520</span>
														</td>
														<td class="text-end pe-0">25.352%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/41.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 41</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02580005</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$266.00</span>
														</td>
														<td class="text-end pe-0">
															<span>134516</span>
														</td>
														<td class="text-end pe-0">13.4516%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/29.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 29</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02767009</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$65.00</span>
														</td>
														<td class="text-end pe-0">
															<span>106413</span>
														</td>
														<td class="text-end pe-0">10.64128%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/24.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 24</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04174004</span>
														</td>
														<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$38.00</span>
														</td>
														<td class="text-end pe-0">
															<span>55530</span>
														</td>
														<td class="text-end pe-0">5.55302%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/7.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 7</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01575009</span>
														</td>
														<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$221.00</span>
														</td>
														<td class="text-end pe-0">
															<span>44424</span>
														</td>
														<td class="text-end pe-0">4.44242%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/49.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 49</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03821002</span>
														</td>
														<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$294.00</span>
														</td>
														<td class="text-end pe-0">
															<span>35539</span>
														</td>
														<td class="text-end pe-0">3.55394%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/34.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 34</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03642009</span>
														</td>
														<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$120.00</span>
														</td>
														<td class="text-end pe-0">
															<span>28432</span>
														</td>
														<td class="text-end pe-0">2.84315%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/25.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 25</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01814009</span>
														</td>
														<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$211.00</span>
														</td>
														<td class="text-end pe-0">
															<span>22745</span>
														</td>
														<td class="text-end pe-0">2.27452%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/18.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 18</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02540005</span>
														</td>
														<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$194.00</span>
														</td>
														<td class="text-end pe-0">
															<span>18196</span>
														</td>
														<td class="text-end pe-0">1.81961%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/11.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 11</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04899001</span>
														</td>
														<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$101.00</span>
														</td>
														<td class="text-end pe-0">
															<span>14557</span>
														</td>
														<td class="text-end pe-0">1.45569%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/48.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 48</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03588006</span>
														</td>
														<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$288.00</span>
														</td>
														<td class="text-end pe-0">
															<span>11646</span>
														</td>
														<td class="text-end pe-0">1.16455%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/33.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 33</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02914007</span>
														</td>
														<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$52.00</span>
														</td>
														<td class="text-end pe-0">
															<span>9316</span>
														</td>
														<td class="text-end pe-0">0.93164%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/40.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 40</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03272007</span>
														</td>
														<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$199.00</span>
														</td>
														<td class="text-end pe-0">
															<span>7453</span>
														</td>
														<td class="text-end pe-0">0.74531%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/22.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 22</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02288005</span>
														</td>
														<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$145.00</span>
														</td>
														<td class="text-end pe-0">
															<span>5963</span>
														</td>
														<td class="text-end pe-0">0.59625%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/17.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 17</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03608002</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$82.00</span>
														</td>
														<td class="text-end pe-0">
															<span>4770</span>
														</td>
														<td class="text-end pe-0">0.477%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/28.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 28</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02325004</span>
														</td>
														<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$185.00</span>
														</td>
														<td class="text-end pe-0">
															<span>3816</span>
														</td>
														<td class="text-end pe-0">0.3816%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/6.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 6</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03837003</span>
														</td>
														<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$184.00</span>
														</td>
														<td class="text-end pe-0">
															<span>3053</span>
														</td>
														<td class="text-end pe-0">0.30528%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/39.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 39</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04373004</span>
														</td>
														<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$98.00</span>
														</td>
														<td class="text-end pe-0">
															<span>2442</span>
														</td>
														<td class="text-end pe-0">0.24422%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/12.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 12</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02184006</span>
														</td>
														<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$178.00</span>
														</td>
														<td class="text-end pe-0">
															<span>1954</span>
														</td>
														<td class="text-end pe-0">0.19538%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/30.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 30</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03841007</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$271.00</span>
														</td>
														<td class="text-end pe-0">
															<span>1563</span>
														</td>
														<td class="text-end pe-0">0.1563%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/27.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 27</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03118004</span>
														</td>
														<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$115.00</span>
														</td>
														<td class="text-end pe-0">
															<span>1250</span>
														</td>
														<td class="text-end pe-0">0.12504%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/16.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 16</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01616006</span>
														</td>
														<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$236.00</span>
														</td>
														<td class="text-end pe-0">
															<span>1000</span>
														</td>
														<td class="text-end pe-0">0.10003%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/45.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 45</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03653003</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$219.00</span>
														</td>
														<td class="text-end pe-0">
															<span>800</span>
														</td>
														<td class="text-end pe-0">0.08003%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/37.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 37</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03181004</span>
														</td>
														<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$222.00</span>
														</td>
														<td class="text-end pe-0">
															<span>640</span>
														</td>
														<td class="text-end pe-0">0.06402%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/19.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 19</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03641006</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$272.00</span>
														</td>
														<td class="text-end pe-0">
															<span>512</span>
														</td>
														<td class="text-end pe-0">0.05122%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/20.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 20</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01954002</span>
														</td>
														<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$250.00</span>
														</td>
														<td class="text-end pe-0">
															<span>410</span>
														</td>
														<td class="text-end pe-0">0.04097%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/21.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 21</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01356003</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$81.00</span>
														</td>
														<td class="text-end pe-0">
															<span>328</span>
														</td>
														<td class="text-end pe-0">0.03278%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/5.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 5</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01163008</span>
														</td>
														<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$248.00</span>
														</td>
														<td class="text-end pe-0">
															<span>262</span>
														</td>
														<td class="text-end pe-0">0.02622%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/4.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 4</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01902004</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$55.00</span>
														</td>
														<td class="text-end pe-0">
															<span>210</span>
														</td>
														<td class="text-end pe-0">0.02098%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/14.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 14</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03456009</span>
														</td>
														<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$11.00</span>
														</td>
														<td class="text-end pe-0">
															<span>168</span>
														</td>
														<td class="text-end pe-0">0.01678%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/13.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 13</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04378009</span>
														</td>
														<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$98.00</span>
														</td>
														<td class="text-end pe-0">
															<span>134</span>
														</td>
														<td class="text-end pe-0">0.01343%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/15.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 15</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04826002</span>
														</td>
														<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$248.00</span>
														</td>
														<td class="text-end pe-0">
															<span>107</span>
														</td>
														<td class="text-end pe-0">0.01074%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/8.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 8</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02931004</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$127.00</span>
														</td>
														<td class="text-end pe-0">
															<span>86</span>
														</td>
														<td class="text-end pe-0">0.00859%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/38.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 38</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02925006</span>
														</td>
														<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$287.00</span>
														</td>
														<td class="text-end pe-0">
															<span>69</span>
														</td>
														<td class="text-end pe-0">0.00687%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/10.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 10</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04642001</span>
														</td>
														<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$39.00</span>
														</td>
														<td class="text-end pe-0">
															<span>55</span>
														</td>
														<td class="text-end pe-0">0.0055%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/3.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 3</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03658007</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$154.00</span>
														</td>
														<td class="text-end pe-0">
															<span>44</span>
														</td>
														<td class="text-end pe-0">0.0044%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/23.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 23</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04301005</span>
														</td>
														<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$275.00</span>
														</td>
														<td class="text-end pe-0">
															<span>35</span>
														</td>
														<td class="text-end pe-0">0.00352%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/50.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 50</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04913005</span>
														</td>
														<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$127.00</span>
														</td>
														<td class="text-end pe-0">
															<span>28</span>
														</td>
														<td class="text-end pe-0">0.00282%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/26.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 26</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03399007</span>
														</td>
														<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$74.00</span>
														</td>
														<td class="text-end pe-0">
															<span>23</span>
														</td>
														<td class="text-end pe-0">0.00225%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/43.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 43</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02161002</span>
														</td>
														<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$228.00</span>
														</td>
														<td class="text-end pe-0">
															<span>18</span>
														</td>
														<td class="text-end pe-0">0.0018%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/36.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 36</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03301006</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$58.00</span>
														</td>
														<td class="text-end pe-0">
															<span>14</span>
														</td>
														<td class="text-end pe-0">0.00144%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/32.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 32</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02835004</span>
														</td>
														<td class="text-end pe-0" data-order="rating-5" data-filter="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$187.00</span>
														</td>
														<td class="text-end pe-0">
															<span>12</span>
														</td>
														<td class="text-end pe-0">0.00115%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/9.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 9</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03560007</span>
														</td>
														<td class="text-end pe-0" data-order="rating-1" data-filter="rating-1">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$251.00</span>
														</td>
														<td class="text-end pe-0">
															<span>9</span>
														</td>
														<td class="text-end pe-0">0.00092%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/42.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 42</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01475004</span>
														</td>
														<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$65.00</span>
														</td>
														<td class="text-end pe-0">
															<span>7</span>
														</td>
														<td class="text-end pe-0">0.00074%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/47.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 47</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03463008</span>
														</td>
														<td class="text-end pe-0" data-order="rating-3" data-filter="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$124.00</span>
														</td>
														<td class="text-end pe-0">
															<span>6</span>
														</td>
														<td class="text-end pe-0">0.00059%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/2.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 2</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04814007</span>
														</td>
														<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$257.00</span>
														</td>
														<td class="text-end pe-0">
															<span>5</span>
														</td>
														<td class="text-end pe-0">0.00047%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/44.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 44</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03658009</span>
														</td>
														<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$246.00</span>
														</td>
														<td class="text-end pe-0">
															<span>4</span>
														</td>
														<td class="text-end pe-0">0.00038%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/35.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 35</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03411008</span>
														</td>
														<td class="text-end pe-0" data-order="rating-2" data-filter="rating-2">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$17.00</span>
														</td>
														<td class="text-end pe-0">
															<span>3</span>
														</td>
														<td class="text-end pe-0">0.0003%</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/31.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 31</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03312008</span>
														</td>
														<td class="text-end pe-0" data-order="rating-4" data-filter="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span>$206.00</span>
														</td>
														<td class="text-end pe-0">
															<span>2</span>
														</td>
														<td class="text-end pe-0">0.00024%</td>
													</tr>
												</tbody>
											</table>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Products-->
								</div>
								<!--end::Content container-->
							</div>
@endsection