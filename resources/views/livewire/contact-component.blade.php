<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('home.index')}}" class="link">Inicio</a></li>
                <li class="item-link"><span>Contáctanos</span></li>
            </ul>
        </div>
        <div class="row">
            <div class=" main-content-area">
                <div class="wrap-contacts ">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-form">
                            <h2 class="box-title">Envíanos un Mensaje</h2>
                            @if (session('message'))
                                <div class="alert alert-success"><strong>{{session('message')}}</strong></div>
                            @endif
                            <form wire:submit.prevent='mail'>
                                <label for="name">Nombre<span>*</span></label>
                                <input type="text" value="" id="name" name="name" required  wire:model='name'>

                                <label for="email">Email<span>*</span></label>
                                <input type="text" value="" id="email" name="email" required  wire:model='email'>

                                <label for="phone">Télefono</label>
                                <input type="text" value="" id="phone" name="phone" required  wire:model='phone'>

                                <label for="comment">Mensaje</label>
                                <textarea name="comment" id="comment" required wire:model='message'></textarea>

                                <input type="submit" name="ok" value="Enviar Mensaje" >
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-info">
                            {{-- <div class="wrap-map">
                                <div class="mercado-google-maps"
                                        id="az-google-maps57341d9e51968"
                                        data-hue=""
                                        data-lightness="1"
                                        data-map-style="2"
                                        data-saturation="-100"
                                        data-modify-coloring="false"
                                        data-title_maps="Kute themes"
                                        data-phone="088-465 9965 02"
                                        data-email="kutethemes@gmail.com"
                                        data-address="Z115 TP. Thai Nguyen"
                                        data-longitude="-0.120850"
                                        data-latitude="51.508742"
                                        data-pin-icon=""
                                        data-zoom="16"
                                        data-map-type="ROADMAP"
                                        data-map-height="263">
                                </div>
                            </div> --}}
                            <h2 class="box-title">Detalles de Contacto</h2>
                            <div class="wrap-icon-box">

                                <div class="icon-box-item">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Email</b>
                                        <p>alex@example.com</p>
                                    </div>
                                </div>

                                <div class="icon-box-item">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Teléfono</b>
                                        <p>(+51) 923 844 025)</p>
                                    </div>
                                </div>

                                <div class="icon-box-item">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Dirección</b>
                                        <p>Cercado de Lima<br />Lima - Perú</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

        </div><!--end row-->

    </div><!--end container-->

</main>

