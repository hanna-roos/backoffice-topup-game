@extends('layouts.app')

@section('page-title')
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Customer Orders Report</h1>
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
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_685c31febaa8b">
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
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_685c31febaa8b" data-allow-clear="true">
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
												<div id="kt_ecommerce_report_customer_orders_export" class="d-none"></div>
												<!--end::Export buttons-->
											</div>
											<!--end::Card title==

        <!==begin::Card toolbar-->
											<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
												<!--begin::Daterangepicker-->
												<input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_customer_orders_daterangepicker" />
												<!--end::Daterangepicker-->
												<!--begin::Filter-->
												<div class="w-150px">
													<!--begin::Select2-->
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
														<option></option>
														<option value="all">All</option>
														<option value="active">Active</option>
														<option value="locked">Locked</option>
														<option value="disabled">Disabled</option>
														<option value="banned">Banned</option>
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
												<div id="kt_ecommerce_report_customer_orders_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
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
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_customer_orders_table">
												<thead>
													<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
														<th class="min-w-100px">Customer Name</th>
														<th class="min-w-100px">Email</th>
														<th class="min-w-100px">Status</th>
														<th class="min-w-100px">Date Joined</th>
														<th class="text-end min-w-75px">No. Orders</th>
														<th class="text-end min-w-75px">No. Products</th>
														<th class="text-end min-w-100px">Total</th>
													</tr>
												</thead>
												<tbody class="fw-semibold text-gray-600">
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Smith</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
														</td>
														<td>
															<div class="badge badge-light-info">Disabled</div>
														</td>
														<td>05 May 2025, 11:30 am</td>
														<td class="text-end pe-0">1</td>
														<td class="text-end pe-0">6</td>
														<td class="text-end">$2655.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Melody Macy</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>20 Dec 2025, 6:43 am</td>
														<td class="text-end pe-0">7</td>
														<td class="text-end pe-0">15</td>
														<td class="text-end">$3269.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Max Smith</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>21 Feb 2025, 11:30 am</td>
														<td class="text-end pe-0">92</td>
														<td class="text-end pe-0">100</td>
														<td class="text-end">$1119.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Sean Bean</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">sean@dellito.com</a>
														</td>
														<td>
															<div class="badge badge-light-info">Disabled</div>
														</td>
														<td>10 Nov 2025, 5:30 pm</td>
														<td class="text-end pe-0">46</td>
														<td class="text-end pe-0">60</td>
														<td class="text-end">$4335.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Brian Cox</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">brian@exchange.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>25 Oct 2025, 11:30 am</td>
														<td class="text-end pe-0">21</td>
														<td class="text-end pe-0">36</td>
														<td class="text-end">$4910.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Mikaela Collins</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">mik@pex.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>10 Mar 2025, 6:43 am</td>
														<td class="text-end pe-0">78</td>
														<td class="text-end pe-0">90</td>
														<td class="text-end">$1710.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Francis Mitcham</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">f.mit@kpmg.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>20 Jun 2025, 9:23 pm</td>
														<td class="text-end pe-0">84</td>
														<td class="text-end pe-0">92</td>
														<td class="text-end">$3501.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Olivia Wild</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">olivia@corpmail.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>10 Nov 2025, 10:30 am</td>
														<td class="text-end pe-0">80</td>
														<td class="text-end pe-0">89</td>
														<td class="text-end">$1516.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Neil Owen</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">owen.neil@gmail.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>20 Dec 2025, 6:43 am</td>
														<td class="text-end pe-0">80</td>
														<td class="text-end pe-0">91</td>
														<td class="text-end">$849.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Dan Wilson</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">dam@consilting.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>19 Aug 2025, 11:05 am</td>
														<td class="text-end pe-0">54</td>
														<td class="text-end pe-0">65</td>
														<td class="text-end">$4303.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Bold</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">emma@intenso.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>24 Jun 2025, 9:23 pm</td>
														<td class="text-end pe-0">71</td>
														<td class="text-end pe-0">86</td>
														<td class="text-end">$2489.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Ana Crown</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">ana.cf@limtel.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>10 Mar 2025, 11:05 am</td>
														<td class="text-end pe-0">72</td>
														<td class="text-end pe-0">84</td>
														<td class="text-end">$1767.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Robert Doe</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">robert@benko.com</a>
														</td>
														<td>
															<div class="badge badge-light-warning">Locked</div>
														</td>
														<td>20 Dec 2025, 6:43 am</td>
														<td class="text-end pe-0">3</td>
														<td class="text-end pe-0">14</td>
														<td class="text-end">$4452.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">John Miller</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">miller@mapple.com</a>
														</td>
														<td>
															<div class="badge badge-light-danger">Banned</div>
														</td>
														<td>15 Apr 2025, 5:30 pm</td>
														<td class="text-end pe-0">50</td>
														<td class="text-end pe-0">61</td>
														<td class="text-end">$1568.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Lucy Kunic</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">lucy.m@fentech.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>10 Mar 2025, 10:10 pm</td>
														<td class="text-end pe-0">89</td>
														<td class="text-end pe-0">99</td>
														<td class="text-end">$3562.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Ethan Wilder</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">ethan@loop.com.au</a>
														</td>
														<td>
															<div class="badge badge-light-warning">Locked</div>
														</td>
														<td>20 Jun 2025, 5:20 pm</td>
														<td class="text-end pe-0">97</td>
														<td class="text-end pe-0">106</td>
														<td class="text-end">$2174.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Ana Crown</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">ana.cf@limtel.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>22 Sep 2025, 10:30 am</td>
														<td class="text-end pe-0">95</td>
														<td class="text-end pe-0">107</td>
														<td class="text-end">$3965.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Smith</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>20 Dec 2025, 10:30 am</td>
														<td class="text-end pe-0">49</td>
														<td class="text-end pe-0">56</td>
														<td class="text-end">$2759.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Melody Macy</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
														</td>
														<td>
															<div class="badge badge-light-danger">Banned</div>
														</td>
														<td>25 Oct 2025, 8:43 pm</td>
														<td class="text-end pe-0">24</td>
														<td class="text-end pe-0">32</td>
														<td class="text-end">$2753.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Max Smith</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>15 Apr 2025, 11:05 am</td>
														<td class="text-end pe-0">61</td>
														<td class="text-end pe-0">73</td>
														<td class="text-end">$4892.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Sean Bean</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">sean@dellito.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>25 Oct 2025, 2:40 pm</td>
														<td class="text-end pe-0">55</td>
														<td class="text-end pe-0">64</td>
														<td class="text-end">$2070.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Brian Cox</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">brian@exchange.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>10 Mar 2025, 6:05 pm</td>
														<td class="text-end pe-0">54</td>
														<td class="text-end pe-0">61</td>
														<td class="text-end">$2264.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Mikaela Collins</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">mik@pex.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>20 Dec 2025, 2:40 pm</td>
														<td class="text-end pe-0">54</td>
														<td class="text-end pe-0">69</td>
														<td class="text-end">$2815.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Francis Mitcham</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">f.mit@kpmg.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>21 Feb 2025, 10:10 pm</td>
														<td class="text-end pe-0">23</td>
														<td class="text-end pe-0">36</td>
														<td class="text-end">$3762.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Olivia Wild</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">olivia@corpmail.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>24 Jun 2025, 8:43 pm</td>
														<td class="text-end pe-0">49</td>
														<td class="text-end pe-0">54</td>
														<td class="text-end">$4126.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Neil Owen</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">owen.neil@gmail.com</a>
														</td>
														<td>
															<div class="badge badge-light-danger">Banned</div>
														</td>
														<td>21 Feb 2025, 11:30 am</td>
														<td class="text-end pe-0">23</td>
														<td class="text-end pe-0">36</td>
														<td class="text-end">$4952.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Dan Wilson</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">dam@consilting.com</a>
														</td>
														<td>
															<div class="badge badge-light-info">Disabled</div>
														</td>
														<td>25 Jul 2025, 6:43 am</td>
														<td class="text-end pe-0">13</td>
														<td class="text-end pe-0">26</td>
														<td class="text-end">$3372.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Bold</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">emma@intenso.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>21 Feb 2025, 5:20 pm</td>
														<td class="text-end pe-0">50</td>
														<td class="text-end pe-0">56</td>
														<td class="text-end">$3302.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Ana Crown</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">ana.cf@limtel.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>24 Jun 2025, 10:30 am</td>
														<td class="text-end pe-0">83</td>
														<td class="text-end pe-0">98</td>
														<td class="text-end">$4496.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Robert Doe</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">robert@benko.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>10 Nov 2025, 10:30 am</td>
														<td class="text-end pe-0">9</td>
														<td class="text-end pe-0">17</td>
														<td class="text-end">$4917.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">John Miller</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">miller@mapple.com</a>
														</td>
														<td>
															<div class="badge badge-light-info">Disabled</div>
														</td>
														<td>10 Mar 2025, 5:20 pm</td>
														<td class="text-end pe-0">100</td>
														<td class="text-end pe-0">113</td>
														<td class="text-end">$4030.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Lucy Kunic</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">lucy.m@fentech.com</a>
														</td>
														<td>
															<div class="badge badge-light-info">Disabled</div>
														</td>
														<td>22 Sep 2025, 5:30 pm</td>
														<td class="text-end pe-0">66</td>
														<td class="text-end pe-0">72</td>
														<td class="text-end">$2601.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Ethan Wilder</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">ethan@loop.com.au</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>22 Sep 2025, 11:05 am</td>
														<td class="text-end pe-0">96</td>
														<td class="text-end pe-0">102</td>
														<td class="text-end">$4589.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Brian Cox</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">brian@exchange.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>25 Jul 2025, 2:40 pm</td>
														<td class="text-end pe-0">32</td>
														<td class="text-end pe-0">47</td>
														<td class="text-end">$3134.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Smith</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>22 Sep 2025, 10:30 am</td>
														<td class="text-end pe-0">93</td>
														<td class="text-end pe-0">99</td>
														<td class="text-end">$340.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Melody Macy</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>19 Aug 2025, 6:43 am</td>
														<td class="text-end pe-0">17</td>
														<td class="text-end pe-0">32</td>
														<td class="text-end">$1596.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Max Smith</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>05 May 2025, 5:30 pm</td>
														<td class="text-end pe-0">62</td>
														<td class="text-end pe-0">72</td>
														<td class="text-end">$1987.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Sean Bean</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">sean@dellito.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>20 Dec 2025, 5:30 pm</td>
														<td class="text-end pe-0">5</td>
														<td class="text-end pe-0">13</td>
														<td class="text-end">$3866.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Brian Cox</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">brian@exchange.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>24 Jun 2025, 5:30 pm</td>
														<td class="text-end pe-0">52</td>
														<td class="text-end pe-0">60</td>
														<td class="text-end">$4091.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Mikaela Collins</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">mik@pex.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>25 Oct 2025, 2:40 pm</td>
														<td class="text-end pe-0">87</td>
														<td class="text-end pe-0">101</td>
														<td class="text-end">$3859.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Francis Mitcham</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">f.mit@kpmg.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>10 Nov 2025, 6:05 pm</td>
														<td class="text-end pe-0">91</td>
														<td class="text-end pe-0">103</td>
														<td class="text-end">$3679.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Olivia Wild</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">olivia@corpmail.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>24 Jun 2025, 6:43 am</td>
														<td class="text-end pe-0">53</td>
														<td class="text-end pe-0">67</td>
														<td class="text-end">$3967.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Neil Owen</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">owen.neil@gmail.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>10 Mar 2025, 11:05 am</td>
														<td class="text-end pe-0">14</td>
														<td class="text-end pe-0">19</td>
														<td class="text-end">$4582.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Dan Wilson</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">dam@consilting.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>10 Nov 2025, 6:43 am</td>
														<td class="text-end pe-0">6</td>
														<td class="text-end pe-0">20</td>
														<td class="text-end">$2051.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Emma Bold</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">emma@intenso.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>21 Feb 2025, 5:20 pm</td>
														<td class="text-end pe-0">28</td>
														<td class="text-end pe-0">43</td>
														<td class="text-end">$2631.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Ana Crown</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">ana.cf@limtel.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>24 Jun 2025, 6:05 pm</td>
														<td class="text-end pe-0">83</td>
														<td class="text-end pe-0">98</td>
														<td class="text-end">$2716.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Robert Doe</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">robert@benko.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>10 Mar 2025, 5:30 pm</td>
														<td class="text-end pe-0">29</td>
														<td class="text-end pe-0">39</td>
														<td class="text-end">$4804.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">John Miller</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">miller@mapple.com</a>
														</td>
														<td>
															<div class="badge badge-light-warning">Locked</div>
														</td>
														<td>10 Nov 2025, 8:43 pm</td>
														<td class="text-end pe-0">73</td>
														<td class="text-end pe-0">88</td>
														<td class="text-end">$2673.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Lucy Kunic</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">lucy.m@fentech.com</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>22 Sep 2025, 10:10 pm</td>
														<td class="text-end pe-0">86</td>
														<td class="text-end pe-0">98</td>
														<td class="text-end">$3230.00</td>
													</tr>
													<tr>
														<td>
															<a href="apps/ecommerce/customers/details.html" class="text-gray-900 text-hover-primary">Ethan Wilder</a>
														</td>
														<td>
															<a href="#" class="text-gray-900 text-hover-primary">ethan@loop.com.au</a>
														</td>
														<td>
															<div class="badge badge-light-success">Active</div>
														</td>
														<td>25 Oct 2025, 10:30 am</td>
														<td class="text-end pe-0">24</td>
														<td class="text-end pe-0">35</td>
														<td class="text-end">$3313.00</td>
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