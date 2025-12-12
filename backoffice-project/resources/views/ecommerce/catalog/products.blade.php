@extends('base.index')

@section('page-title')
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Products</h1>
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
											<li class="breadcrumb-item text-muted">Catalog</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">

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
													<input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
												</div>
												<!--end::Search-->
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
												<div class="w-100 mw-150px">
													<!--begin::Select2-->
{{-- 													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
														<option></option>
														<option value="all">All</option>
														<option value="published">Published</option>
														<option value="scheduled">Scheduled</option>
														<option value="inactive">Inactive</option>
													</select>
													<!--end::Select2-->
												</div> --}}
												<!--begin::Add product-->
												<a href="/catalog/products/create" class="btn btn-primary">Add Product</a>
												<!--end::Add product-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5">

												<!--begin::Table head-->
												<thead>
													<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
														<th class="w-10px pe-2">
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																<input class="form-check-input" type="checkbox" />
															</div>
														</th>
														<th class="min-w-200px">Nama</th>
														<th class="text-end min-w-100px">Kategori</th>
														<th class="text-end min-w-100px">Harga</th>
														<th class="text-end min-w-100px">Status</th>
														<th class="text-end min-w-70px">Actions</th>
													</tr>
												</thead>
												<!--end::Table head-->

												<!--begin::Table body-->
												<tbody class="fw-semibold text-gray-600">

													@foreach ($products as $product)
													<tr>

														<!-- Checkbox -->
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="{{ $product->id }}" />
															</div>
														</td>

														<!-- Product Thumbnail + Name -->
														<td>
															<div class="d-flex align-items-center">
																<a href="{{ route('products.edit', $product->id) }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url('{{ asset('storage/'.$product->image) }}');"></span>
																</a>

																<div class="ms-5">
																	<a href="{{ route('products.edit', $product->id) }}"
																	class="text-gray-800 text-hover-primary fs-5 fw-bold">
																		{{ $product->nama }}
																	</a>
																</div>
															</div>
														</td>

														<!-- Category -->
														<td class="text-end pe-0">
															<span class="fw-bold">{{ $product->kategori }}</span>
														</td>

														<!-- Price -->
														<td class="text-end pe-0">
															<span class="fw-bold">Rp {{ number_format($product->harga, 2) }}</span>
														</td>

														<!-- Status -->
														<td class="text-end pe-0">
															@if ($product->status === 'active')
																<div class="badge badge-light-success">Active</div>
															@elseif ($product->status === 'inactive')
																<div class="badge badge-light-danger">Inactive</div>
															@elseif ($product->status === 'draft')
																<div class="badge badge-light-warning">Draft</div>
															@else
																<div class="badge badge-light-secondary">Archived</div>
															@endif
														</td>

														<!-- Actions -->
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
															data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																Actions <i class="ki-duotone ki-down fs-5 ms-1"></i>
															</a>

															<!-- Dropdown -->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 
																		menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
																data-kt-menu="true">

																<!-- Edit -->
																<div class="menu-item px-3">
																	<a href="{{ route('products.edit', $product->id) }}" class="menu-link px-3">Edit</a>

																</div>

																<!-- Delete -->
																<div class="menu-item px-3">
																	<form action="{{ route('products.destroy', $product->id) }}" method="POST">
																		@csrf
																		@method('DELETE')
																		<button class="menu-link px-3"
																				style="background: none; border: none; padding: 0; color: inherit;">
																			Delete
																		</button>
																	</form>
																</div>

															</div>
														</td>

													</tr>
													@endforeach

												</tbody>
												<!--end::Table body-->

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