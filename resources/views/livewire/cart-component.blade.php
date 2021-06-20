<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('home.index')}}" class="link">Inicio</a></li>
                <li class="item-link"><span>Carrito</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            @if(Cart::count() > 0)
                <div class="wrap-iten-in-cart">
                    <h3 class="box-title">Nombre del Producto</h3>
                    <ul class="products-cart">
                        @if(Session::has('success_message'))
                            <div class="alert alert-success">
                                <strong>Success</strong> {{Session::get('success_message')}}
                            </div>
                        @endif
    
                            @foreach (Cart::content() as $item)
                                <li class="pr-cart-item">
                                    <div class="product-image">
                                        <figure><img src="{{asset('assets/images/products/'. $item->model->image)}}" alt="{{$item->name}}"></figure>
                                    </div>
                                    <div class="product-name">
                                        <a class="link-to-product" href="{{route('product.details', $item->model)}}">{{$item->name}}</a>
                                    </div>
                                    <div class="price-field produtc-price"><p class="price">S/{{$item->regular_price}}</p></div>
                                    <div class="quantity">
                                        <div class="quantity-input">
                                            <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >									
                                            <a class="btn btn-increase" href="#" wire:click.prevent='increaseQuantity("{{$item->rowId}}")'></a>
                                            <a class="btn btn-reduce" href="#" wire:click.prevent='decreaseQuantity("{{$item->rowId}}")'></a>
                                        </div>
                                    </div>
                                    <div class="price-field sub-total"><p class="price">{{$item->subtotal}}</p></div>
                                    <div class="delete">
                                        <a href="#" class="btn btn-delete" title="" wire:click.prevent='destroy ("{{$item->rowId}}")'>
                                            <span>Eliminar de tu carrito</span>
                                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </li>  
                            @endforeach                 									
                    </ul>
                </div>

                <div class="summary">
                    <div class="order-summary">
                        <h4 class="title-box">Order Summary</h4>
                        <p class="summary-info"><span class="title">Subtotal</span><b class="index">S/{{Cart::subtotal()}}</b></p>
                        <p class="summary-info"><span class="title">impuestos</span><b class="index">S/{{Cart::tax()}}</b></p>
                        <p class="summary-info"><span class="title">Envío</span><b class="index">Envío Gratis</b></p>
                        <p class="summary-info total-info "><span class="title">Total</span><b class="index">S/{{Cart::total()}}</b></p>
                    </div>
                    <div class="checkout-info">
                        <label class="checkbox-field">
                            <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
                        </label>
                        <a class="btn btn-checkout" href="{{route('checkout')}}">Check out</a>
                        <a class="link-to-shop" href="{{route('shop')}}">Continuar Comprando<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="update-clear">
                        <a class="btn btn-clear" href="#" wire:click.prevent='destroyAll()'>Vaciar Carrito</a>
                        {{-- <a class="btn btn-update" href="#">Update Shopping Cart</a> --}}
                    </div>
                
                </div>
            @else 
                <div class="mb-4 mt-4">
                    <h4> No Hay Productos agregados en el carrito</h4>
                    <a class="btn btn-checkout" href="{{route('shop')}}">Ir a la Tienda</a>
                </div>
            @endif

        </div><!--end main content area-->
    </div><!--end container-->

</main>