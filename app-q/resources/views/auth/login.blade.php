<!DOCTYPE html>

































<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/item/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->


<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{'admin'}}/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-login-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 15:41:34 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/">
    
    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5DDHKGP');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{'admin'}}/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{'admin'}}/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{'admin'}}/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{'admin'}}/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{'admin'}}/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{'admin'}}/css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{'admin'}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{'admin'}}/vendor/libs/typeahead-js/typeahead.css" /> 
    <!-- Vendor -->
<link rel="stylesheet" href="{{'admin'}}/vendor/libs/%40form-validation/form-validation.css" />

    <!-- Page CSS -->
    <!-- Page -->
<link rel="stylesheet" href="{{'admin'}}/vendor/css/pages/page-auth.css">

    <!-- Helpers -->
    <script src="{{'admin'}}/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{'admin'}}/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{'admin'}}/js/config.js"></script>
    
</head>

<body>

  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Content -->

<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="index.html" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">

                <img style="width: 67px;height:auto" src="{{asset("web")}}/images\pan.png">
        
        </span>
 
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">مرحباً بك 👋</h4>
          <p class="mb-4">من فضلك ادخل الايميل وكلمة المرور</p>

          <form method="POST" action="{{ route('login') }}">
            @csrf
               <div class="mb-3">
              <label for="email" class="form-label">الايميل</label>
      
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email" name="email" placeholder="Enter your {{ __('Email Address') }}" autofocus>
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">كلمة المرور</label>
                {{-- <a   href="{{ route('password.request') }}">
                    <small> {{ __('Forgot Your Password?') }}  </small>
                </a> --}}
               
              </div>
              <div class="input-group input-group-merge">
                <input id="password" type="password" placeholder="**********" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                 
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">

                <input class="form-check-input" type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember-me">
                                        تذكرني
                                    </label>
              </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary d-grid w-100">
                    تسجيل الدخول
                </button>

              
            </div>
          </form>

         <p class="text-center">
            <span>New on our platform?</span>
            <a href="{{ route('register') }}">
              <span>{{ __('Register') }}</span>
            </a>
          </p> 

         
          
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
</div>

<!-- / Content -->

  
 

  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  
  <script src="{{'admin'}}/vendor/libs/jquery/jquery.js"></script>
  <script src="{{'admin'}}/vendor/libs/popper/popper.js"></script>
  <script src="{{'admin'}}/vendor/js/bootstrap.js"></script>
  <script src="{{'admin'}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="{{'admin'}}/vendor/libs/hammer/hammer.js"></script>
  <script src="{{'admin'}}/vendor/libs/i18n/i18n.js"></script>
  <script src="{{'admin'}}/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="{{'admin'}}/vendor/js/menu.js"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{'admin'}}/vendor/libs/%40form-validation/popular.js"></script>
<script src="{{'admin'}}/vendor/libs/%40form-validation/bootstrap5.js"></script>
<script src="{{'admin'}}/vendor/libs/%40form-validation/auto-focus.js"></script>

  <!-- Main JS -->
  <script src="{{'admin'}}/js/main.js"></script>
  

  <!-- Page JS -->
  <script src="{{'admin'}}/js/pages-auth.js"></script>
  
</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-login-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 15:41:35 GMT -->
</html>

<!-- beautify ignore:end -->

