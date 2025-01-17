
	<!--begin::Aside-->
	<div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
		<!--begin::Brand-->
		<div class="aside-logo py-8" id="kt_aside_logo"  style="background-color: white;">
			<!--begin::Logo-->
			<a href="{{ route('home.index') }}" class="d-flex align-items-center">
				<img alt="Logo" src="{{ url('assets/img/logo.png') }}" class="h-100px logo" />
			</a>
			<!--end::Logo-->
		</div>
		<!--end::Brand-->

		<!--begin::Aside menu-->
		<div class="aside-menu flex-column-fluid" id="kt_aside_menu">
			<!--begin::Aside Menu-->
			<div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
				<!--begin::Menu-->
				<div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
					
					<div class="menu-item py-0">
						<a class="menu-link  menu-center" href="{{route('home.index')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon me-0">
								<i class="bi bi-house fs-2"></i>
							</span>
							<span class="menu-title">Home</span>
						</a>
					</div>

					<div class="menu-item py-0">
						<a class="menu-link  menu-center" href="{{route('principal')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon me-0">
								<i class="bi bi-exclamation-triangle"></i>
							</span>
							<span class="menu-title">Informações</span>
						</a>
					</div>

					<div class="menu-item py-0">
						<a class="menu-link  menu-center" href="{{route('mapa')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon me-0">
								<i class="bi bi-geo-alt"></i>
							</span>
							<span class="menu-title">Mapa</span>
						</a>
					</div>

					<div class="menu-item py-0">
						<a class="menu-link  menu-center" href="{{route('emergencia')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon me-0">
								<i class="bi bi-exclamation-diamond"></i>	
							</span>
							<span class="menu-title">Pânico</span>
						</a>
					</div>

					<div class="menu-item py-0">
						<a class="menu-link  menu-center" href="{{route('alerta')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon me-0">
								<i class="bi bi-bell"></i>
							</span>
							<span class="menu-title">Alertas</span>
						</a>
					</div>

					<div class="menu-item py-0">
						<a class="menu-link  menu-center" href="{{route('localizacao')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon me-0">
								<i class="bi bi-geo"></i>
							</span>
							<span class="menu-title">Localização</span>
						</a>
					</div>

						<div class="menu-item py-0">
						<a class="menu-link menu-center" href="{{ route('logout') }}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon me-0">
								<i class="bi bi-reply-fill fs-2"></i>
							</span>
							<span class="menu-title">Sair</span>
						</a>
					</div>

				</div>
				<!--end::Menu-->
			</div>
			<!--end::Aside Menu-->
		</div>
		<!--end::Aside menu-->
		
	</div>
	<!--end::Aside-->