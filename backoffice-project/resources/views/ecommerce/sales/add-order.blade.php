@extends('base.index')

@section('page-title')
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Add Order</h1>
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
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_685c322a24dba">
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
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_685c322a24dba" data-allow-clear="true">
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
									<!--begin::Form-->
									<form id="kt_ecommerce_edit_order_form" class="form d-flex flex-column flex-lg-row" action="{{ route('order.store') }}" method="POST" >
										@csrf
										<!--begin::Aside column-->
										<div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">
											<!--begin::Order details-->
											<div class="card card-flush py-4">
												<div class="card-header">
													<div class="card-title">
														<h2>Order Details</h2>
													</div>
												</div>

												<div class="card-body pt-0">
													<div class="d-flex flex-column gap-7">

														{{-- Order ID --}}
														<div>
															<label class="form-label">Order ID</label>
															<div class="fw-bold fs-4 text-muted">Auto Generated</div>
														</div>

														{{-- Nama Pembeli --}}
														<div>
															<label class="required form-label">Nama Pembeli</label>
															<input 
																type="text" 
																name="nama" 
																class="form-control form-control-solid"
																placeholder="Nama Pembeli"
															>
														</div>

														{{-- Metode Pembayaran --}}
														<div>
															<label class="required form-label">Metode Pembayaran</label>
															<select 
																name="metode_pembayaran" 
																class="form-select form-select-solid"
															>
																<option value="">Pilih Metode Pembayaran</option>
																<option value="E-wallet">E-wallet</option>
																<option value="Kartu">Kartu</option>
																<option value="Transfer Bank">Transfer Bank</option>
																<option value="none">None</option>
															</select>
														</div>

														{{-- Status Order --}}
														<div>
															<label class="required form-label">Status Order</label>
															<select 
																name="status" 
																class="form-select form-select-solid"
															>
																<option value="processing">Processing</option>
																<option value="waiting for payment">Waiting for Payment</option>
																<option value="complete">Complete</option>
																<option value="cancelled">Cancelled</option>
																<option value="failed">Failed</option>
															</select>
														</div>

														{{-- Tanggal Order --}}
														<div>
															<label class="form-label">Tanggal Order</label>
															<input 
																type="date" 
																name="created_at"
																class="form-control form-control-solid"
															>
														</div>

													</div>
												</div>
											</div>
											<!--end::Order details-->
										</div>
										<!--end::Aside column-->
										<!--begin::Main column-->
										<div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
											<!--begin::Order details-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<div class="card-title">
														<h2>Select Products</h2>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<div class="d-flex flex-column gap-10">
														<!--begin::Input group-->
														<div>
															<!--begin::Label-->
															<label class="form-label">Add products to this order</label>
															<!--end::Label-->
															<!--begin::Selected products-->
															<div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 border border-dashed rounded pt-3 pb-1 px-2 mb-5 mh-300px overflow-scroll" id="kt_ecommerce_edit_order_selected_products">
																<!--begin::Empty message-->
																<span class="w-100 text-muted">Select one or more products from the list below by ticking the checkbox.</span>
																<!--end::Empty message-->
															</div>
															<!--begin::Selected products-->
															<!--begin::Total price-->
															<div class="fw-bold fs-4">Total Cost: $ 
															<span id="kt_ecommerce_edit_order_total_price">0.00</span></div>
															<!--end::Total price-->
														</div>
														<!--end::Input group-->
														<!--begin::Separator-->
														<div class="separator"></div>
														<!--end::Separator-->
														<!--begin::Search products-->
														<div class="d-flex align-items-center position-relative mb-n7">
															<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<input type="text" data-kt-ecommerce-edit-order-filter="search" class="form-control form-control-solid w-100 w-lg-50 ps-12" placeholder="Search Products" />
														</div>
														<!--end::Search products-->
														<!--begin::Table-->
														<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_edit_order_product_table">
															<thead>
															<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
																<th class="w-25px"></th>
																<th>Nama Produk</th>
																<th>Status</th>
																<th class="text-end">Harga</th>
															</tr>
															</thead>
															<tbody class="fw-semibold text-gray-600">
																<tr>
																	<td>
																		<input type="checkbox" class="form-check-input">
																	</td>
																	<td>Nama Produk</td>
																	<td>
																		<span class="badge badge-light-success">Active</span>
																	</td>
																	<td class="text-end">Rp25.000</td>
																</tr>
															</tbody>
														</table>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Card header-->
											</div>
											<!--end::Order details-->
											<!--begin::Order details-->

											<!--end::Order details-->
											<div class="d-flex justify-content-end">
												<!--begin::Button-->
												<a href="apps/ecommerce/catalog/products.html" id="kt_ecommerce_edit_order_cancel" class="btn btn-light me-5">Cancel</a>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-primary">
													<span class="indicator-label">Save Changes</span>
													<span class="indicator-progress">Please wait... 
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
										</div>
										<!--end::Main column-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Content container-->
							</div>
@endsection