<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Your Answer is Correct, Opps Your Answer is Incorrect">
    <meta name="description" content="">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer></script>
    <meta name="generator" content="Nicepage 6.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/logo.png"
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Dashboard">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>
<body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
    <header class="u-clearfix u-custom-color-3 u-header u-header" id="sec-1554">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
            <a href="#" class="u-image u-logo u-image-1" data-image-width="566" data-image-height="301">
                <img src="{{ asset('images/logo.png') }}" class="u-logo-image u-logo-image-1">
            </a>
            <div class="u-align-right u-header-buttons hidden">
                <form action="#" method="get" class="u-border-1 u-border-grey-30 u-expanded-width-xs u-search u-search-left u-white u-search-1">
                    <button class="u-search-button" type="submit">
                      <span class="u-search-icon u-spacing-10">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xlink:href="#svg-dbb6"></use></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-dbb6" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
                      </span>
                    </button>
                    <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
                  </form>
                <a  href="{{ route('logout',1) }}" style="
                    background-color: #f44336; /* Red color for logout button */
                    color: white;
                    border: none;
                    padding: 10px 20px;
                    font-size: 16px;
                    cursor: pointer;
                    border-radius: 5px; /* Optional: Rounded corners */
                " onmouseover="this.style.backgroundColor='#d32f2f'" onmouseout="this.style.backgroundColor='#f44336'">
                    Logout
                </a>
            </div>
        </div>
    </header>

    <section class="u-clearfix u-grey-10 u-section-1" id="sec-4ace">
        <div class="custom-expanded u-align-center u-container-style u-group u-shape-rectangle u-white u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <h3 class="u-text u-text-custom-color-3 u-text-1">HCP List</h3>
                <a href="{{ route('registerhcp',1) }}" class="u-btn u-button-style u-custom-color-3 u-btn-1">ADD HCP</a>
                


                        {{-- <h5 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-text u-text-default u-text-2">ROSHAN MANOJ JHA</h5>
                        <div class="custom-expanded data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1">
                            <div class="u-gutter-0 u-layout">
                                <div class="u-layout-row">
                                    <div class="u-container-style u-layout-cell u-size-15 u-layout-cell-1">
                                        <div class="u-container-layout u-valign-middle u-container-layout-3">
                                            <a href="#" class="u-btn u-button-style u-custom-color-3 u-btn-2">Attempt SET 1</a>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-layout-cell u-size-15 u-layout-cell-2">
                                        <div class="u-container-layout u-container-layout-4">
                                            <a href="#" class="u-btn u-button-style u-custom-color-3 u-btn-3">Attempt SET 2</a>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-layout-cell u-size-15 u-layout-cell-3">
                                        <div class="u-container-layout u-valign-middle u-container-layout-5">
                                            <a href="#" class="u-btn u-button-style u-custom-color-3 u-btn-4">Attempt SET 3</a>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-layout-cell u-size-15 u-layout-cell-4">
                                        <div class="u-container-layout u-container-layout-6">
                                            <a href="#" class="u-btn u-button-style u-custom-color-3 u-btn-5">Attempt SET 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        @foreach($attemptSets as $index => $set)
                        <div class="custom-expanded u-border-2 u-border-custom-color-3 u-container-align-center-xs u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-group u-radius u-shape-round u-white u-group-2">
                            <div class="u-container-layout u-container-layout-2">
                        <h5 class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-text u-text-default u-text-2">{{ $set->hcp_name }}</h5>
                        <div class="custom-expanded data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1">
                            <div class="u-gutter-0 u-layout">
                                <div class="u-layout-row">
                                        <div class="u-container-style u-layout-cell u-size-15 u-layout-cell-{{ $index + 1 }}">
                                            <div class="u-container-layout u-valign-middle u-container-layout-{{ $index + 3 }}">
                                                <a href="" class="u-btn u-button-style u-custom-color-3 u-btn-{{ $index + 2 }}">Attempt SET {{ $set->attempt }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach

                        
            </div>
        </div>
        <div class="u-container-style u-expanded-width u-group u-radius u-shape-round u-white u-group-3">
            <div class="u-container-layout u-container-layout-7">
                <img class="u-absolute-hcenter-sm u-absolute-hcenter-xl u-absolute-hcenter-xs u-expanded-height u-image u-image-default u-image-1" src="{{ asset('images/Screenshot2024-07-19225537.png') }}" alt="" data-image-width="983" data-image-height="99">
            </div>
        </div>
    </section>
</body>
</html>
