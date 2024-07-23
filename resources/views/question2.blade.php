<!DOCTYPE html>
<html lang="en" style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Your Answer is Correct, Opps Your Answer is Incorrect">
    <meta name="description" content="">
    <title>Questions</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/questions.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer></script>
    <meta name="generator" content="Nicepage 6.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Questions">
    <meta property="og:type" content="website">
    <!-- CSRF Token Meta Tag -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">

    <header class="u-clearfix u-custom-color-3 u-header u-header" id="sec-1554">
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
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="svg-dbb6" x="0px" y="0px" viewBox="0 0 56.966 56.966"
                            style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23 s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92 c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17 s-17-7.626-17-17S14.61,6,23.984,6z">
                            </path>
                        </svg>
                    </span>
                </button>
                <input class="u-search-input" type="search" name="search" placeholder="Search">
            </form>
        </div>
    </header>

    <section class="u-clearfix u-grey-10 u-section-1" id="sec-4ace">
        <div class="custom-expanded u-align-center u-container-style u-group u-radius u-shape-round u-white u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <div class="u-black u-container-style u-expanded-width u-group u-radius u-shape-round u-group-2">
                    <div class="u-container-layout u-valign-top u-container-layout-2">
                        <h3 class="u-text u-text-default u-text-1">Quiz</h3>
                    </div>
                </div>
                <section id="quiz-section">
                    <form id="quiz-form" method="POST" action="{{ route('check.answer2') }}">
                        @csrf
                        @foreach ($questions as $question)
                        <input type="hidden" name="id" value="{{ $questions[0]->id }}">
                        <div class="question">
                            <p class="text-bold text-danger">{{ $question->question }}</p>
                            @php
                            $options = json_decode($question->options, true); // Decode JSON string to array
                            @endphp
                            @foreach ($options as $optionKey => $optionValue)
                            <label>
                                <input type="radio" name="question_{{ $question->id }}" value="{{ $optionKey }}">
                                {{ $optionValue }}
                            </label><br>
                            @endforeach
                        </div>
                        @endforeach
                        <button type="submit" class="" style="background: red !important;margin: 20px ">Submit</button>

                    </form>
                </section>
            </div>
        </div>
        <div class="u-container-style u-expanded-width u-group u-radius u-shape-round u-white u-group-3">
            <div class="u-container-layout u-container-layout-3">
                <img class="u-absolute-hcenter-sm u-absolute-hcenter-xl u-absolute-hcenter-xs u-expanded-height u-image u-image-default u-image-1"
                    src="{{ asset('images/Screenshot2024-07-19225537.png') }}" alt="" data-image-width="983"
                    data-image-height="99">
            </div>
        </div>
    </section>

    <footer class="u-align-center u-clearfix u-custom-color-3 u-footer u-footer" id="sec-1545">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-text u-text-1">© 2024</p>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            // Set up the CSRF token in the AJAX setup
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#quiz-form').on('submit', function(e) {
                e.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    url: '{{ route('check.answer') }}',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        alert('Correct Answers: ' + response.correct + '\nIncorrect Answers: ' + response.incorrect);
                        window.location.href = '{{ url('thank-you') }}'; // Redirect to thank you page
                    },
                    error: function(response) {
                        alert(response.responseJSON.message || 'An error occurred.');
                    }
                });
            });
        });
    </script>
</body>

</html>
