<!DOCTYPE html>
<html lang="en">
<head>
    <title>NextwaveXpress</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
    <meta name="title" content="Rocket - Landing 3 Page"/>
    <meta name="author" content="Themesberg"/>
    <meta name="description"
          content="Rocket is a premium SaaS Bootstrap 4 Dashboard template featuring over 27 presentational and technical pages including pricing, support, team, careers and many more."/>
    <meta name="keywords"
          content="bootstrap, bootstrap template, saas website template, saas bootstrap template, saas bootstrap 4 template, saas bootstrap theme, saas bootstrap 4 theme, dashboard, saas dashboard, themesberg"/>
    <link rel="canonical" href="https://themes.getbootstrap.com/product/rocket/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://demo.themesberg.com/rocket"/>
    <meta property="og:title" content="Rocket - Landing 3 Page"/>
    <meta property="og:description"
          content="Rocket is a premium SaaS Bootstrap 4 Dashboard template featuring over 27 presentational and technical pages including pricing, support, team, careers and many more."/>
    <meta property="og:image"
          content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/rocket/rocket-preview.jpg"/>
    <meta property="twitter:card" content="summary_large_image"/>
    <meta property="twitter:url" content="https://demo.themesberg.com/rocket"/>
    <meta property="twitter:title" content="Rocket - Landing 3 Page"/>
    <meta property="twitter:description"
          content="Rocket is a premium SaaS Bootstrap 4 Dashboard template featuring over 27 presentational and technical pages including pricing, support, team, careers and many more."/>
    <meta property="twitter:image"
          content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/rocket/rocket-preview.jpg"/>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}"/>
    <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}"/>
    <link rel="mask-icon" href="{{ asset('assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="theme-color" content="#ffffff"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('vendor/@fontawesome-free/css/all.min.css') }}" crossorigin="anonymous">
    <link type="text/css" href="{{ asset('assets/css/prism.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/css/rocket.css') }}" rel="stylesheet"/>
    <!-- Bootstrap CSS -->

    <link type="text/css" href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>

    <!-- Styles -->
    <style>

        .btn-primary-faint {
            color: #101f56;
            background-color: #deeaff;
            border-color: #deeaff;
            box-shadow: 0 2px 18px rgba(0, 0, 0, .02);
        }
    </style>

</head>
<body style="background-color:#f3f2ff;">
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-light bg-white  mb-4">
    <div class="container position-relative">
        <a class="navbar-brand mr-lg-3" href="index.html">
            <img class="navbar-brand-dark" src="./assets/img/illustrations/nextwavexpress.png" alt="NextwaveXpress">
            <img class="navbar-brand-light" src="./assets/img/illustrations/nextwavexpress.png" alt="NextwaveXpress">
        </a>
        <div class="navbar-collapse collapse" id="navbar-default-primary">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="index.html">
                            <img src="./assets/img/illustrations/nextwavexpress.png" alt="NextwaveXpress">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <i class="fas fa-times" data-toggle="collapse" role="button"
                           data-target="#navbar-default-primary" aria-controls="navbar-default-primary"
                           aria-expanded="false" aria-label="Toggle navigation"></i>
                    </div>
                </div>
            </div>

            <ul class="navbar-nav navbar-nav-hover ml-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="login.html">
                        <button class="btn btn-white">Signup</button>
                    </a>
                </li>
            </ul>

        </div>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse"
                    data-target="#navbar-default-primary" aria-controls="navbar-default-primary"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>

@if ($errors->any())
    <div class="container">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill"/>
                </svg>
                <div>
                    {{ $error }}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    </div>
@endif
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path
            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path
            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path
            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
</svg>
@yield('content')

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/headroom.min.js') }}"></script>
<script src="{{ asset('assets/js/countUp.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('assets/js/prism.js') }}"></script>
<script src="{{ asset('assets/js/chartist.min.js') }}"></script>
<script src="{{ asset('assets/js/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('assets/js/rocket.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>
