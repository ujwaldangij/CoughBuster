<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Your Answer is Correct, Opps Your Answer is Incorrect">
    <meta name="description" content="Register Healthcare Professionals (HCP) with detailed information including qualifications and hospital affiliation.">
    <title>Register HCP</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/registerhcp.css') }}" media="screen">
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    {{-- <script src="{{ asset('js/nicepage.js') }}" defer></script> --}}
    <meta name="generator" content="Nicepage 6.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/logo.png"
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Register HCP">
    <meta property="og:type" content="website">
</head>

<body data-path-to-root="./" class="u-body u-xl-mode" data-lang="en">
    <header class="u-clearfix u-custom-color-3 u-header" id="sec-1554">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
            <a href="#" class="u-image u-logo u-image-1" data-image-width="566" data-image-height="301">
                <img src="{{ asset('images/logo.png') }}" class="u-logo-image u-logo-image-1">
            </a>
            <form action="#" method="get"
                class="u-border-1 u-border-grey-30 u-expanded-width-xs u-search u-search-left u-white u-search-1">
                <button class="u-search-button" type="submit">
                    <span class="u-search-icon u-spacing-10">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966">
                            <use xlink:href="#svg-dbb6"></use>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg-dbb6" viewBox="0 0 56.966 56.966"
                            class="u-svg-content">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                            </path>
                        </svg>
                    </span>
                </button>
                <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
            </form>
        </div>
    </header>
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-4ace">
        <div class="custom-expanded u-align-center u-container-style u-group u-radius u-shape-round u-white u-group-1">
            <div class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
                <div class="u-black u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius u-shape-round u-group-2">
                    <div class="u-container-layout u-valign-top-xs u-container-layout-2">
                        <h3 class="u-text u-text-default u-text-1">About The Initiative</h3>
                    </div>
                </div>
                <div class="u-carousel u-carousel-duration-250 u-carousel-fade u-form u-form-1" data-interval="0"
                    data-u-ride="false" id="carousel-5d05">
                    <form action="{{ route('registerhcp.submit') }}" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px;">
                        @csrf
                        <div class="u-carousel-inner" role="listbox">
                            <div class="u-carousel-item u-form-step u-slide u-active text-center">
                                <div id="carousel-text-content"></div>
                            </div>
                            <div class="u-carousel-item u-form-step u-slide">
                                <div class="u-form-group u-label-none u-form-group-2">
                                    <label for="text-0f05" class="u-label">Input</label>
                                    <input type="text" placeholder="Enter DVC Code" id="text-0f05" name="dvc_code"
                                        class="u-border-2 u-custom-font u-font-arial u-input u-input-rectangle u-input-1">
                                </div>
                                <div class="u-form-group u-form-name u-label-none u-form-group-3">
                                    <label for="name-96b1" class="u-label">Name</label>
                                    <input type="text" placeholder="Enter HCP Name" id="name-96b1" name="hcp_name"
                                        class="u-border-2 u-custom-font u-font-arial u-input u-input-rectangle u-input-2" required>
                                </div>
                                <div class="u-form-group u-label-none u-form-group-4">
                                    <label for="qualification" class="u-label">Qualification</label>
                                    <input type="text" placeholder="Enter HCP Qualification" id="qualification" name="qualification"
                                        class="u-border-2 u-custom-font u-font-arial u-input u-input-rectangle u-input-3" required>
                                </div>
                                <div class="u-form-group u-label-none u-form-group-5">
                                    <label for="city" class="u-label">City</label>
                                    <input type="text" placeholder="Enter HCP City" id="city" name="city"
                                        class="u-border-2 u-custom-font u-font-arial u-input u-input-rectangle u-input-4" required>
                                </div>
                                <div class="u-form-group u-label-none u-form-group-6">
                                    <label for="hospital" class="u-label">Hospital / Clinic Name</label>
                                    <input type="text" placeholder="Enter Hospital / Clinic Name" id="hospital" name="hospital"
                                        class="u-border-2 u-custom-font u-font-arial u-input u-input-rectangle u-input-5" required>
                                </div>
                            </div>
                        </div>
                        <div class="u-align-left u-form-group u-form-submit u-label-none">
                            <a href="#" class="u-btn u-btn-step u-btn-step-prev u-button-style u-custom-color-3 u-hidden u-btn-1">BACK</a>
                            <a href="#" class="u-btn u-btn-step u-btn-step-next u-button-style u-custom-color-3 u-hidden u-btn-2">NEXT</a>
                            <button type="submit" class="u-btn u-btn-submit u-button-style u-custom-color-3 u-hidden u-btn-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            const textContent = `Cough is one of the common clinical conditions observed in clinical practice. Most widely adopted diagnostic modality for patient evaluation is hearing to the cough sounds. Although easy to hear but it’s always challenging to evaluate the specic sound & make appropriate clinical interpretation and diagnosis. Cough Buster is a digital initiative of Wockhardt, the makers of Brozedex, Brozedex-LS & Brozedex Kid. Wockhardt takes pride in bringing up an in-clinic initiative for clinical evaluations & interpretation of cough sounds. This is a quick & easy application developed with an objective of providing key insights about the various cough sounds so as to improve diagnostic evaluation of cough in clinical practice.`;
            
            const carouselTextContent = document.getElementById('carousel-text-content');
            carouselTextContent.innerHTML = textContent;

            const prevButton = document.querySelector('.u-btn-step-prev');
            const nextButton = document.querySelector('.u-btn-step-next');
            const submitButton = document.querySelector('.u-btn-submit');
            const formSteps = document.querySelectorAll('.u-form-step');

            let currentStep = 0;

            function updateCarousel() {
                formSteps.forEach((step, index) => {
                    step.classList.toggle('u-active', index === currentStep);
                });

                prevButton.classList.toggle('u-hidden', currentStep === 0);
                nextButton.classList.toggle('u-hidden', currentStep === formSteps.length - 1);
                submitButton.classList.toggle('u-hidden', currentStep !== formSteps.length - 1);
            }

            prevButton.addEventListener('click', () => {
                if (currentStep > 0) {
                    currentStep--;
                    updateCarousel();
                }
            });

            nextButton.addEventListener('click', () => {
                if (currentStep < formSteps.length - 1) {
                    currentStep++;
                    updateCarousel();
                }
            });

            updateCarousel();
        });
    </script>
</body>

</html>
