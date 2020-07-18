<!DOCTYPE html>
@if (session()->get('locale') == "ar")
<?php app()->setLocale('ar'); ?>
@else
<?php app()->setLocale('en'); 
//session()->set('locale') = "en";

?>
@endif
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ __('trans.dir') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ __('trans.title') }}</title>
    </head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>
<body>

    <body>
        
      
          <div class="top-bar  stacked-for-small" data-sticky id="responsive-menu">
            <div class="top-bar-left">
              <ul class="dropdown menu" data-dropdown-menu>
                <li class=""><a style="padding: 0px;" href="{{ url('/') }}"><img src="{{ asset('zurb/img/logo.png') }}" alt="" style="width: 52px;height: 41px;"></a></li>
              
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
              <ul class="dropdown menu" data-dropdown-menu>

 @if (Route::has('login'))
                    @auth
                    

                    <li>
                        <a href="#" role="menuitem" class="menuSize fontBold">{{ __('trans.welcome', ['name' => Auth::user()->name]) }}</a>
                        <ul class="menu vertical">
                            <li> <a href="{{ url('/home') }}">{{ __('trans.profile') }}</a></li>

                            <a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('trans.logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>                          <li><a href="#">Two</a></li>
                          <li><a href="#">Three</a></li>
                        </ul>
                      </li>
                    @else
                    <li><a href="{{ url('/register') }}" class="menuSize fontBold" >{{ __('trans.create_account') }}</a></li>

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
      
      
      
      <div class="tiny reveal" id="registerModal" data-reveal>
        <!-- ... -->
        <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
      
      <form data-abide novalidate>
        <div class="grid-container">
        <h3 class="text-center">إنشاء حساب</h3>
        <div data-abide-error data-closable class="alert callout" style="display: none;">
      <button class="close-button" aria-label="Close alert" type="button" data-close>
          <span aria-hidden="true">&times;</span>
        </button>
          <p><i class="fi-alert"></i> من فضلك قم بتصحيح الأخطاء.</p>
        </div>
      
          <div class="grid-x grid-padding-x">
          <div class="medium-12 cell">
              <label>أسم المستخدم
                <input type="text" placeholder="أسم المستخدم" required pattern="alpha">
                <span class="form-error">
                  من فضلك أدخل بيانات صحيحه
              </span>
              </label>
            </div>
            <div class="medium-12 cell">
              <label>البريد الإلكتروني
                <input type="text" placeholder="البريد الإلكتروني" required pattern="email">
                <span class="form-error">
                  من فضلك أدخل بريد إلكتروني صحيح
              </span>
              </label>
            </div>
            <div class="medium-12 cell">
            <div class="password-wrapper">
          <label for="password">كلمة السر</label>
          <input type="password" value="" placeholder="كلمة السر" id="password" class="password" required >
          <button class="unmask" type="button" title="Mask/Unmask password to check content">Unmask</button>
        </div>
            </div>
      
            <div class="medium-12 cell">
            <div class="password-wrapper">
          <label for="password">تأكيد كلمة السر</label>
          <input type="password" value="" placeholder="تأكيد كلمة السر" id="password" class="password" required >
          <button class="unmask" type="button" title="Mask/Unmask password to check content">Unmask</button>
        </div>
            </div>
          </div>
        </div>
        <button class="button large expanded" href="#">{{ __('trans.create_account') }}</button>
      </form>
      </div>

  
               

                     
                 
            @yield('content')
    
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
    
</body>
</html>
