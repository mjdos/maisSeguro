	@php
		$cadastro = Session::get('usuario');
	@endphp
	
	<!--begin::Wrapper-->
	<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
		<!--begin::Header-->
		<div id="kt_header" style="" class="header align-items-stretch">
			<!--begin::Container-->
			<div class="container-fluid d-flex align-items-stretch justify-content-between">
				<!--begin::Aside mobile toggle-->
				<div class="d-flex align-items-center d-lg-none ms-n1 me-2" title="Show aside menu">
					<div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
						<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
						<span class="svg-icon svg-icon-2x mt-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
								<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
				</div>
				<!--end::Aside mobile toggle-->
				<!--begin::Mobile logo-->
				<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
					<a href="{{ route('home.index') }}" class="d-lg-none">
						
					</a>
				</div>
				<!--end::Mobile logo-->
				
				<!--begin::Wrapper-->
				<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
					<!--begin::Navbar-->
					<div class="d-flex align-items-stretch" id="kt_header_nav">
						<div align="left" class="mt-7"><h1>Mais Seguro</h1></div>
					</div>
					<!--end::Navbar-->
					<!--begin::Topbar-->
					<div class="d-flex align-items-stretch flex-shrink-0">
						
					
						<div class="d-flex align-items-stretch flex-shrink-0">
							
							
							<!--begin::Heaeder menu toggle-->
							<div class="d-flex align-items-center d-lg-none ms-2" title="Show header menu">
								<div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
									<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black" />
											<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Heaeder menu toggle-->
						</div>
						<!--end::Toolbar wrapper-->
					</div>
					<!--end::Topbar-->
					</div>
					<!--end::Wrapper-->


			</div>
			<!--end::Container-->
		</div>
		<!--end::Header-->
		<!--begin::Toolbar-->
		<div class="toolbar py-2" id="kt_toolbar">
			<!--begin::Container-->
			<div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
				<!--begin::Page title-->
				<div class="flex-grow-1 flex-shrink-0 me-5">
					<!--begin::Page title-->
					<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
						<!--begin::Title-->
						<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">
						<!--begin::Separator-->
						<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
						<!--end::Separator-->
						<!--begin::Description-->
						<small class="text-muted fs-7 fw-bold my-1 ms-1">Seja bem vindo!</small>
						<!--end::Description--></h1>
						<!--end::Title-->
					</div>
					<!--end::Page title-->
				</div>
				<!--end::Page title-->
				<!--begin::Action group-->
				<div class="d-flex align-items-center flex-wrap">
					
					<!--begin::Wrapper-->
					<div class="d-flex align-items-center">
						
						<!--begin::Actions-->
						<div class="d-flex align-items-center">
							<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light btn-active-color-primary">
								<!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
								<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3"/></svg>
								</span>
								<!--end::Svg Icon-->
							</button>
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Action group-->
			</div>
			<!--end::Container-->
		</div>
		<!--end::Toolbar-->