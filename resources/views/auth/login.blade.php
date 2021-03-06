{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('home.index')}}" class="link">Inicio</a></li>
                <li class="item-link"><span>Login</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">						
                        <div class="login-form form-item form-stl">
                            <form name="frm-login" action="{{route('login')}}" method="post">
                                @csrf
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Inicia Sesi??n en tu cuenta</h3>										
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-uname">Correo Electronico:</label>
                                    <input type="text" id="frm-login-uname" name="email" value="{{old('email')}}" placeholder="Escribe tu correo electr??nico">
                                    @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-pass">Contrase??a:</label>
                                    <input type="password" id="frm-login-pass"  name="password" placeholder="************" autocomplete="current-password">
                                    @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </fieldset>
                                
                                <fieldset class="wrap-input">
                                    <label class="remember-field">
                                        <input class="frm-input " name="rememberme" id="rememberme" value="forever" type="checkbox"><span>Recordarme</span>
                                    </label>
                                    <a class="link-function left-position" href="{{route("password.request")}}" title="Forgotten password?">??Olvidaste tu Contrase??a?</a>
                                </fieldset>
                                <input type="submit" class="btn btn-submit" value="Iniciar Sesi??n" name="submit">
                            </form>
                        </div>												
                    </div>
                </div><!--end main products area-->		
            </div>
        </div><!--end row-->

    </div><!--end container-->
</x-guest-layout>