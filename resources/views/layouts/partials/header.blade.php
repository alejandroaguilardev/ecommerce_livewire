
	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>(+51) 923 844 025</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								
								{{-- <li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-en.png')}}" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-hun.png')}}" alt="lang-hun"></span>Hungary</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-ger.png')}}" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-fra.png')}}" alt="lang-fre"></span>French</a></li>
										<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-can.png')}}" alt="lang-can"></span>Canada</a></li>
									</ul>
								</li>  --}}
							
                                @if(Route::has('login'))
                                    @auth
                                        @if(Auth::user()->utype === 'ADM')
                                            <li class="menu-item menu-item-has-children parent" >
                                                <a title="mi-cuenta" href="#">Mi Cuenta ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency" >
                                                    <li class="menu-item" >
                                                        <a title="dashboard" href="{{route('admin.dashboard')}}">Dashboard</a>
                                                    </li>
													<li class="menu-item" >
														<a title="Categorias" href="{{route('admin.categories')}}">Categorias</a>
													</li>
													<li class="menu-item" >
														<a title="Productos" href="{{route('admin.products')}}">Productos</a>
													</li>

													<li class="menu-item" >
														<a title="Imagen de Inicio" href="{{route('admin.homeslider')}}">Manejar Slider de Inicio</a>
													</li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <li class="menu-item">
                                                            <a  href="{{route ('logout') }}"
                                                             onclick="event.preventDefault(); this.closest('form').submit();">Cerrar Sesión </a>
                                                        </li>
                                                    </form>
                                                </ul>
                                            </li>
                                            
                                        @else
                                        <li class="menu-item menu-item-has-children parent" >
                                            <a title="mi-cuenta" href="#">Mi Cuenta ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency" >
                                                <li class="menu-item" >
                                                    <a title="dashboard" href="{{route('user.dashboard')}}">Dashboard</a>
                                                </li>
												
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <li class="menu-item">
                                                        <a  href="{{route ('logout') }}" 
                                                        onclick="event.preventDefault(); this.closest('form').submit();">Cerrar Sesión </a>
                                                    </li>
                                                </form>
                                            </ul>
                                        </li>
                                        @endif
                                    @else
                                        <li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Login</a></li>
                                        <li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">Register</a></li>
                                    @endif
                                @endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"><img src="{{ asset('assets/images/logo-top-1.png')}}" alt="mercado"></a>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">0 item</span>
										<span class="title">Wishlist</span>
									</div>
								</a>
							</div> 
							<div class="wrap-icon-section minicart">
								<a href="{{route('cart')}}" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">{{Cart::count()}} producto</span>
										<span class="title">Carrito</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					{{-- <div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
							</ul>
						</div>
					</div> --}}

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="{{route('about')}}" class="link-term mercado-item-title">Nosotros</a>
								</li>
								<li class="menu-item">
									<a href="{{route('shop')}}" class="link-term mercado-item-title">Tienda</a>
								</li>
								<li class="menu-item">
									<a href="{{route('cart')}}" class="link-term mercado-item-title">Carrito</a>
								</li>
								<li class="menu-item">
									<a href="{{route('checkout')}}" class="link-term mercado-item-title">Checkout</a>
								</li>
								<li class="menu-item">
									<a href="{{route('contact')}}" class="link-term mercado-item-title">Contacto</a>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>