<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Venditor.io</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <meta name="google-site-verification" content="qya7P0bsF13yVyIc_qskhVOMYLG9OoUjcP2D5nmXIuk" />
        <link href={{asset('css/style.css')}} rel="stylesheet" type="text/css">
        <style>
            html, body {
                font-family: 'Raleway', sans-serif;
                
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
            <div class="navbar">
                <div class="w-container">
                    <div class="w-row">
                       <div class="left-nav w-col w-col-6 w-col-small-6 w-col-tiny-6">
                          <a class="w-inline-block w--current" href="http://venditor.io/">
                             <div class="brand">Venditor.io</div>
                          </a>
                       </div>
                       <div class="right-nav w-col w-col-6 w-col-small-6 w-col-tiny-6 text-right">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @if (Auth::check())
                                        <a href="{{ url('/home') }}">Dashboard</a>
                                    @else
                                        <a href="{{ url('/login') }}">Login</a>
                                        <a href="{{ url('/register') }}">Register</a>
                                    @endif
                                </div>
                            @endif
                       </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="hero section">
                     <div class="container w-container">
                        <h1>Get a list of the newest companies weekly.&nbsp;<br>Be their first.</h1>
                        <div class="sign-up-form w-form">
                           <form class="w-clearfix" data-name="Signup Form" action="//Venditor.us15.list-manage.com/subscribe/post?u=ab3589eef26df1695eb7966c4&amp;id=76fb4ac35f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"><input autofocus="autofocus" class="field w-input" data-name="Email" maxlength="256" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email address" required="required" type="email"><input class="button w-button" data-wait="Please wait..." name="subscribe" type="submit" value="Subscribe"></form>
                           <div class="success-message w-form-done">
                              <p>Thanks!&nbsp;</p>
                           </div>
                           <div class="error-message w-form-fail"></div>
                        </div>
                     </div>
                  </div>
                  <div class="grey section" data-anchor="slide1">
                     <div class="w-container">
                        <h2 class="grey-heading">All potential clients in one place.</h2>
                        <p>40 000+ companies from all Finland</p>
                        <img class="infinite" src={{asset('images/finland.png')}} width="187">
                     </div>
                  </div>
                  <div class="section">
                     <div class="w-container">
                        <h2 class="grey-heading">Mobile Access.</h2>
                        <p>All needed information about your client in your pocket</p>
                        <div class="image-crop"><img class="phone-image" sizes="(max-width: 479px) 80vw, 381px" src={{asset('images/phone.png')}}></div>
                     </div>
                  </div>
                  <div class="social-section">
                     <div class="w-container"><a class="footer social-btn w-inline-block" href="#"><img src={{asset('images/twitter.svg')}}></a><a class="footer social-btn w-inline-block" href="https://www.facebook.com/Venditorofficial"><img src={{asset('images/facebook-black.svg')}}></a><a class="footer social-btn w-inline-block" href="mailto:info@venditor.io"><img src={{asset('images/email.svg')}}></a></div>
                  </div>
            </div>
        </div>
        <script src={{asset('js/jquery.min.js')}} type="text/javascript"></script>
    </body>
</html>
