@extends('layouts.app')

@section('page-title')
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Shipping Report</h1>
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
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_685c32048cc4b">
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
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_685c32048cc4b" data-allow-clear="true">
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
													<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
												</div>
												<!--end::Search-->
												<!--begin::Export buttons-->
												<div id="kt_ecommerce_report_shipping_export" class="d-none"></div>
												<!--end::Export buttons-->
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
												<!--begin::Daterangepicker-->
												<input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_shipping_daterangepicker" />
												<!--end::Daterangepicker-->
												<!--begin::Filter-->
												<div class="w-150px">
													<!--begin::Select2-->
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
														<option></option>
														<option value="all">All</option>
														<option value="Completed">Completed</option>
														<option value="In Transit">In Transit</option>
														<option value="Pending">Pending</option>
														<option value="Cancelled">Cancelled</option>
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
												<div id="kt_ecommerce_report_shipping_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
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
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_shipping_table">
												<thead>
													<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
														<th class="min-w-100px">Date</th>
														<th class="min-w-100px">Shipping Type</th>
														<th class="min-w-100px">Shipping ID</th>
														<th class="min-w-100px">Status</th>
														<th class="text-end min-w-75px">No. Orders</th>
														<th class="text-end min-w-100px">Total</th>
													</tr>
												</thead>
												<tbody class="fw-semibold text-gray-600">
													<tr>
														<td>Jul 25, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0037947</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">19</td>
														<td class="text-end">$292.00</td>
													</tr>
													<tr>
														<td>May 05, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0037317</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">16</td>
														<td class="text-end">$182.00</td>
													</tr>
													<tr>
														<td>Dec 20, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0042110</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">2</td>
														<td class="text-end">$226.00</td>
													</tr>
													<tr>
														<td>Jun 20, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0058153</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">16</td>
														<td class="text-end">$447.00</td>
													</tr>
													<tr>
														<td>May 05, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0025482</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">15</td>
														<td class="text-end">$381.00</td>
													</tr>
													<tr>
														<td>Oct 25, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0068626</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-primary">In Transit</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">20</td>
														<td class="text-end">$272.00</td>
													</tr>
													<tr>
														<td>Dec 20, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0039459</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">15</td>
														<td class="text-end">$500.00</td>
													</tr>
													<tr>
														<td>Sep 22, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0026767</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-warning">Pending</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">13</td>
														<td class="text-end">$89.00</td>
													</tr>
													<tr>
														<td>Apr 15, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0063628</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">3</td>
														<td class="text-end">$147.00</td>
													</tr>
													<tr>
														<td>Apr 15, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0040886</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">2</td>
														<td class="text-end">$411.00</td>
													</tr>
													<tr>
														<td>Mar 10, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0055011</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-warning">Pending</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">13</td>
														<td class="text-end">$545.00</td>
													</tr>
													<tr>
														<td>May 05, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0066605</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">17</td>
														<td class="text-end">$543.00</td>
													</tr>
													<tr>
														<td>Aug 19, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0067188</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-primary">In Transit</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">5</td>
														<td class="text-end">$380.00</td>
													</tr>
													<tr>
														<td>Jun 20, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0026500</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">1</td>
														<td class="text-end">$540.00</td>
													</tr>
													<tr>
														<td>Mar 10, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0038805</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">12</td>
														<td class="text-end">$275.00</td>
													</tr>
													<tr>
														<td>May 05, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0037715</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">13</td>
														<td class="text-end">$204.00</td>
													</tr>
													<tr>
														<td>Dec 20, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0026361</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">5</td>
														<td class="text-end">$148.00</td>
													</tr>
													<tr>
														<td>May 05, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0038833</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">1</td>
														<td class="text-end">$548.00</td>
													</tr>
													<tr>
														<td>Sep 22, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0039744</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">9</td>
														<td class="text-end">$229.00</td>
													</tr>
													<tr>
														<td>Jun 24, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0035527</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">13</td>
														<td class="text-end">$18.00</td>
													</tr>
													<tr>
														<td>Sep 22, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0056586</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">19</td>
														<td class="text-end">$433.00</td>
													</tr>
													<tr>
														<td>Sep 22, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0037279</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">8</td>
														<td class="text-end">$110.00</td>
													</tr>
													<tr>
														<td>Aug 19, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0057047</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">4</td>
														<td class="text-end">$142.00</td>
													</tr>
													<tr>
														<td>Jun 20, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0035877</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">3</td>
														<td class="text-end">$362.00</td>
													</tr>
													<tr>
														<td>Jul 25, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0025317</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-warning">Pending</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">14</td>
														<td class="text-end">$168.00</td>
													</tr>
													<tr>
														<td>Jun 20, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0047487</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">10</td>
														<td class="text-end">$69.00</td>
													</tr>
													<tr>
														<td>Jun 20, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0030094</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">12</td>
														<td class="text-end">$310.00</td>
													</tr>
													<tr>
														<td>Feb 21, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0032819</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">13</td>
														<td class="text-end">$410.00</td>
													</tr>
													<tr>
														<td>Aug 19, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0031401</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">14</td>
														<td class="text-end">$30.00</td>
													</tr>
													<tr>
														<td>Jul 25, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0042472</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">13</td>
														<td class="text-end">$202.00</td>
													</tr>
													<tr>
														<td>Nov 10, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0027551</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">7</td>
														<td class="text-end">$434.00</td>
													</tr>
													<tr>
														<td>Mar 10, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0051777</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-warning">Pending</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">4</td>
														<td class="text-end">$237.00</td>
													</tr>
													<tr>
														<td>Sep 22, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0055792</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">14</td>
														<td class="text-end">$38.00</td>
													</tr>
													<tr>
														<td>Sep 22, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0027483</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">17</td>
														<td class="text-end">$74.00</td>
													</tr>
													<tr>
														<td>Nov 10, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0030679</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">16</td>
														<td class="text-end">$535.00</td>
													</tr>
													<tr>
														<td>Dec 20, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0069813</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">11</td>
														<td class="text-end">$531.00</td>
													</tr>
													<tr>
														<td>Aug 19, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0062393</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">11</td>
														<td class="text-end">$317.00</td>
													</tr>
													<tr>
														<td>May 05, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0055559</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">5</td>
														<td class="text-end">$38.00</td>
													</tr>
													<tr>
														<td>Jun 24, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0031855</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">7</td>
														<td class="text-end">$447.00</td>
													</tr>
													<tr>
														<td>Dec 20, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0054788</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">15</td>
														<td class="text-end">$274.00</td>
													</tr>
													<tr>
														<td>Dec 20, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0041208</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">9</td>
														<td class="text-end">$199.00</td>
													</tr>
													<tr>
														<td>Jun 24, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0039062</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">5</td>
														<td class="text-end">$138.00</td>
													</tr>
													<tr>
														<td>May 05, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0046110</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">19</td>
														<td class="text-end">$73.00</td>
													</tr>
													<tr>
														<td>Feb 21, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0065339</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">18</td>
														<td class="text-end">$551.00</td>
													</tr>
													<tr>
														<td>Sep 22, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0068551</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">2</td>
														<td class="text-end">$159.00</td>
													</tr>
													<tr>
														<td>Jul 25, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0031917</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">15</td>
														<td class="text-end">$91.00</td>
													</tr>
													<tr>
														<td>Dec 20, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0065210</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">12</td>
														<td class="text-end">$329.00</td>
													</tr>
													<tr>
														<td>Oct 25, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0059794</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">16</td>
														<td class="text-end">$302.00</td>
													</tr>
													<tr>
														<td>Sep 22, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0035948</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">13</td>
														<td class="text-end">$459.00</td>
													</tr>
													<tr>
														<td>Oct 25, 2025</td>
														<td>Flat Shipping Rate</td>
														<td>
															<a href="apps/ecommerce/sales/details.html" class="text-gray-900 text-hover-primary">#SHP-0030874</a>
														</td>
														<td>
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">4</td>
														<td class="text-end">$29.00</td>
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