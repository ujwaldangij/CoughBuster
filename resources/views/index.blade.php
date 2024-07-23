<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Login">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    {{-- <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script> --}}
    <meta name="generator" content="Nicepage 6.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>
<body data-home-page="Home.html" data-home-page-title="Home" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-custom-color-2 u-section-1" id="sec-221f">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
            <img class="u-image u-image-circle u-preserve-proportions u-image-1" src="images/Screenshot2024-07-19220820.png" alt="" data-image-width="162" data-image-height="156">
            <img class="u-image u-image-circle u-preserve-proportions u-image-2" src="images/Screenshot2024-07-19220820.png" alt="" data-image-width="162" data-image-height="156">
            <img class="u-image u-image-circle u-preserve-proportions u-image-3" src="images/Screenshot2024-07-19220820.png" alt="" data-image-width="162" data-image-height="156">
            <img class="u-image u-image-circle u-preserve-proportions u-image-4" src="images/Screenshot2024-07-19220820.png" alt="" data-image-width="162" data-image-height="156">
            <img class="u-image u-image-circle u-preserve-proportions u-image-5" src="images/Screenshot2024-07-19220820.png" alt="" data-image-width="162" data-image-height="156">
            <img class="u-image u-image-circle u-preserve-proportions u-image-6" src="images/Screenshot2024-07-19220820.png" alt="" data-image-width="162" data-image-height="156">
            <img class="u-image u-image-circle u-preserve-proportions u-image-7" src="images/Screenshot2024-07-19220820.png" alt="" data-image-width="162" data-image-height="156">
            <img class="custom-expanded u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-expanded-width-lg u-expanded-width-xl u-image u-image-contain u-image-default u-image-8" src="images/logo.png" alt="" data-image-width="566" data-image-height="301">
            <img class="u-image u-image-circle u-preserve-proportions u-image-9" src="images/Screenshot2024-07-19220820.png" alt="" data-image-width="162" data-image-height="156">
            <img class="u-image u-image-circle u-preserve-proportions u-image-10" src="images/Screenshot2024-07-19220820.png" alt="" data-image-width="162" data-image-height="156">
            <img class="u-image u-image-circle u-preserve-proportions u-image-11" src="images/Screenshot2024-07-19220820.png" alt="" data-image-width="162" data-image-height="156">
            <img class="u-image u-image-circle u-preserve-proportions u-image-12" src="images/Screenshot2024-07-19220820.png" alt="" data-image-width="162" data-image-height="156">
            <div class="u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xl u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius u-shape-round u-white u-group-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                    <div class="u-black u-container-style u-expanded-width u-group u-radius u-shape-round u-group-2">
                        <div class="u-container-layout u-container-layout-2">
                            <h2 class="u-align-center u-text u-text-default u-text-1">Login<span class="u-text-body-alt-color"></span></h2>
                        </div>
                        <div class="u-preserve-proportions-child" style="padding-top: 12.57%;"></div>
                    </div>
                    <div class="u-form u-form-1">
                        <form action="{{ url('/login') }}" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" method="post">
                            @csrf
                            <div class="u-form-group">
                                <label for="email-2399" class="u-label">Employee code</label>
                                <input type="text" placeholder="Enter a valid employee code" id="email-2399" name="email" class="u-border-2 u-custom-font u-font-arial u-input u-input-rectangle u-input-1" value="{{ old('email') }}" required>
                                @error('email')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="u-form-group">
                                <label for="text-5c49" class="u-label">Password</label>
                                <input type="password" placeholder="Enter Password" id="text-5c49" name="password" class="u-border-2 u-custom-font u-font-arial u-input u-input-rectangle u-input-2" required>
                                @error('password')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            @if(session('error'))
                                <p class="error-message">{{ session('error') }}</p>
                            @endif
                            <div class="u-form-group">
                                <button type="submit" class="u-border-2 u-btn u-button-style u-custom-color-1 u-btn-1">Login</button>
                            </div>
                            <div class="u-form-group">
                                <button type="button" class="u-border-2 u-btn u-button-style u-custom-color-2 u-btn-2">Forgot Password?</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
