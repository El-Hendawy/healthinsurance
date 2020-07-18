<!DOCTYPE html>
@if (session()->get('locale') == "ar")
<?php app()->setLocale('ar'); ?>
@else
<?php app()->setLocale('en'); ?>
@endif
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ __('trans.dir') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ __('trans.title') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body>
       
      
          <div class="top-bar  stacked-for-small" data-sticky id="responsive-menu">
            <div class="top-bar-left">
              <ul class="dropdown menu" data-dropdown-menu>
                <li class=""><img src="{{ asset('zurb/img/logo.png') }}" alt="" style="width: 52px;height: 41px;"></li>
              
                <li><a href="#" class="menuSize fontBold" >{{ __('trans.mainpage') }}</a></li>
                <li>
                  <a href="#" class="menuSize fontBold">{{ __('trans.services') }}</a>
                  <ul class="menu vertical">
                    <li><a href="#">One</a></li>
                    <li><a href="#">Two</a></li>
                    <li><a href="#">Three</a></li>
                  </ul>
                </li>
                <li><a href="#" class="menuSize fontBold">{{ __('trans.about') }}</a></li>
              </ul>
            </div>
            <div class="top-bar-right">
              <ul class="menu">

 @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <li><a href="#" class="menuSize fontBold" data-open="registerModal">{{ __('trans.create_account') }}</a></li>

                        @if (Route::has('register'))
                        <li><a class="button mover hollow primary  fontBold" data-open="loginModal" >{{ __('trans.login') }}</a></li>
                        @endif
                    @endauth
            @endif





                @if ( __('trans.dir') == 'rtl')
                <li><a href="/lang/en" style="padding: 0px"> <img src="{{ asset('zurb/img/flags/en.png') }}" alt="" style="width: 38px;margin-right: 11px;"></a></li>
                @else 
                <li><a href="/lang/ar" style="padding: 0px"> <img src="{{ asset('zurb/img/flags/egypt.png') }}" alt="" style="width: 38px;margin-left: 11px;"></a></li>
                              
                @endif
               
              </ul>
            </div>
          </div>
      
      
      
          <div class="tiny reveal" id="loginModal" data-reveal>
        <!-- ... -->
        <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
      <form data-abide novalidate method="POST" action="{{ route('login') }}" id="loginForm">
        @csrf

        <div class="grid-container">
        <h3 class="text-center">{{ __('trans.login') }}</h3>
      
          <div class="grid-x grid-padding-x">
            <div class="medium-12 cell">
              <label>{{ __('trans.email') }}
                <input type="email"  required pattern="emaile" id="emaile" name="email" placeholder="{{ __('trans.email') }}">
                <span id="email" class="form-error"></span>
               
              </label>
            </div>
            
            <div class="medium-12 cell">
            <div class="password-wrapper">
          <label for="password">{{ __('trans.Password') }} </label>
          <input type="password" name="password" required value="" placeholder="{{ __('trans.Password') }}" id="password" class="password">
       
          <button class="unmask" type="button" title="Mask/Unmask password to check content">Unmask</button>
          <span id="password" class="form-error"></span>
        
        </div>
            </div>
          </div>
        </div>
        <button class="button large expanded" type="submit">{{ __('trans.login') }}</button>
      </form>

      </div>
      
      
      
      <div class="medium reveal" id="registerModal" data-reveal>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" id="registerForm" data-abide novalidate>
          @csrf
          <div class="grid-container">
            <h3 class="text-center">{{ __('trans.Register') }}</h3>

            <div class="grid-x grid-padding-x">
  
          <div class="medium-6 cell">
              <label for="name" class="">{{ __('trans.Name') }}
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>               
                  <span id="name"></span>
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </label>
          </div>

          <div class="medium-6 cell">
              <label for="email" >{{ __('trans.email') }}</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  <span id="email"></span>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </label>
                        </div>

          <div class="medium-6 cell">
              <label for="address" >{{ __('trans.address') }}</label>
                  <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                  <span id="address"></span>
                  @error('address')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>


          <div class="medium-6 cell">
              <label for="idnumber" >{{ __('trans.idnumber') }}</label>
                  <input id="idnumber" type="text" class="form-control @error('idnumber') is-invalid @enderror" name="idnumber" value="{{ old('idnumber') }}" required autocomplete="idnumber">
                  <span id="idnumber"></span>
                  @error('idnumber')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>


          <div class="medium-6 cell">
              <label for="hidnumber">{{ __('trans.hidnumber') }}</label>
                  <input id="hidnumber" type="text" class="form-control @error('hidnumber') is-invalid @enderror" name="hidnumber" required autocomplete="hidnumber">
                  <span id="hidnumber"></span>
                  @error('hidnumber')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
          </div>


          <div class="medium-6 cell">
              <label for="mobile">{{ __('trans.mobile') }}
                  <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" required autocomplete="mobile">
                  <span id="mobile"></span>
                  @error('mobile')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </label>
          </div>



          <div class="medium-6 cell">
              <label for="idphoto" >{{ __('trans.idphoto') }}
                  <input id="idphoto" type="file" class="form-control @error('idphoto') is-invalid @enderror" name="idphoto" required autocomplete="idphoto">
                  <span id="idphoto"></span>
                  @error('idphoto')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </label>
          </div>



          <div class="medium-6 cell">
              <label for="healthidphoto" >{{ __('trans.healthidphoto') }}
                  <input id="healthidphoto" type="file" class="form-control @error('healthidphoto') is-invalid @enderror" name="healthidphoto" required autocomplete="healthidphoto">
                  <span id="healthidphoto"></span>
                  @error('healthidphoto')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </label>
          </div>
          <div class="medium-6 cell">
              <label for="password" >{{ __('trans.Password') }}
                  <input id="password" type="password" class="form-control" name="password" required autocomplete="password">
                  <span id="password"></span>
                </label>
          </div>

          <div class="medium-6 cell">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('trans.Confirm') }}
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  <span id="password_confirmation"></span>
                </label>
                     </div>

          <div class="medium-12 cell mb-0">
                  <button type="submit" class="button large expanded">
                      {{ __('trans.Register') }}
                  </button>
          </div>
      </form>        <button class="close-button" data-close aria-label="Close modal" type="button"> <span aria-hidden="true">&times;</span> </button>
     
    </div>
  </div>
      
      </div>

     
       
            <div class="marketing-site-hero">
                <div class="marketing-site-hero-content">
                  <h1 class="text-center fontBold">{{ __('trans.welcome_message') }}</h1>
                  <p class="subheader welcomeSubheader">{{ __('trans.subPragraph') }}</p>
                  <p class="subheader welcomeSubheader">{{ __('trans.subPragraph1') }}</p>
                 
                  <div class="grid-container">
                  <div class="grid-x grid-padding-x">
                    <div class="medium-6 cell">
                    <button class="primary button large expanded mLeft" data-open="registerModal" href="#" >{{ __('trans.create_account') }}</button>   
              
              
                    </div>
                    <div class="medium-6 cell">
              
                    <button class="hollow button alert large expanded heroButton" href="#">{{ __('trans.suggestions') }}</button>
              
                    </div>
                </div>
                </div>
                
                </div>
                </div>
              


 <div class="three-column-footer-contact-form-container">
    <footer class="three-column-footer-contact-form" data-equalizer data-equalize-by-row="true">
      <div class="footer-left" data-equalizer-watch>
        <div class="baseline">
          <div class="contact-details">
            <h3> {{ __('trans.other_links') }} </h3>
            <ul class="vertical menu">
  <li><a href="#">{{ __('trans.about') }} </a></li>
  <li><a href="#">{{ __('trans.services') }} </a></li>
  <li><a href="#">{{ __('trans.suggestions') }} </a></li>
  <li><a href="#">{{ __('trans.contact') }} </a></li>
  <li><a href="#">{{ __('trans.login') }}  </a></li>
</ul>
</div>
</div>
       </div>
      <div class="footer-center" data-equalizer-watch>
        <div class="baseline">
          <div class="newsletter">
            <form>
              <div class="form-icons">
                <h4>{{ __('trans.contact') }} </h4>
            
                <div class="input-group">
                  <span class="input-group-label">
                    <i class="fi-seller-confirmed icon" ></i>
                  </span>
                  <input class="input-group-field" type="text" placeholder="الأسم بالكامل">
                </div>
            
                <div class="input-group">
                  <span class="input-group-label">
                    <i class="fi-email icon"></i>
                  </span>
                  <input class="input-group-field" type="text" placeholder="البريد الإلكتروني">
                </div>
            
                <div class="input-group">
                  
                  <textarea placeholder="أكتب رسالتك"></textarea>
                </div>
              </div>
            
              <button class="button expanded">أرسل</button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-right" data-equalizer-watch>
        <div class="baseline">
            <img src="{{ asset('zurb/img/logo.png') }}" alt="" style="width: 52px;height: 41px;">
                      <h4>{{ __('trans.about') }} </h4>
          <p> {{ __('trans.footer_info') }} </p>
          <p>01270537832</p>
          <p>info@insurance.com</p>
         
        </div>
      </div>

      
      
    </footer>

    <div class="marketing-site-footer-bottom">
    <div class="row large-unstack align-middle">
    <div class="grid-x  " data-equalizer data-equalize-on="medium" >

      <div class="medium-6">
        <p>{{ __('trans.copy_right') }} </p>
      </div>
      <div class="medium-6">
        <ul class="menu marketing-site-footer-bottom-links">
        <li><a rel="nofollow" href="#" class="social" target="_blank"><i class="fi-social-twitter"></i></a></li>
        <li><a rel="nofollow" href="#" class="social" target="_blank"><i class="fi-social-facebook"></i></a></li>
        <li><a rel="nofollow" href="#" class="social" target="_blank"><i class="fi-social-youtube"></i></a></li>
        <li><a rel="nofollow" href="#" class="social" target="_blank"><i class="fi-social-instagram"></i></a></li>
  
        </ul>
      </div>
    </div>
  </div>
  
  </div>
  </div>
  
  

 <!-- Styles -->
 <link href="{{ asset('zurb/css/foundation.css') }}" rel="stylesheet">
 <link href="{{ asset('zurb/css/app.css') }}" rel="stylesheet">
 @if ( __('trans.dir') == 'rtl')
 <link href="{{ asset('zurb/css/customrtl.css') }}" rel="stylesheet">
 @else 
 <link href="{{ asset('zurb/css/customltr.css') }}" rel="stylesheet">
               
 @endif
 <link href="{{ asset('zurb/css/animate.css') }}" rel="stylesheet">

 <!-- Scripts -->
 <script src="{{ asset('zurb/js/vendor/jquery.js') }}" ></script>
 <script src="{{ asset('zurb/js/vendor/what-input.js') }}" ></script>
 <script src="{{ asset('zurb/js/vendor/foundation.js') }}" ></script>
 <script src="{{ asset('zurb/js/app.js') }}" ></script>
   
   
</html>
