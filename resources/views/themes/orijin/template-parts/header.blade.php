<header class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="orijin-logo">
                    <a href="index.html">
                        <img src="{{ asset('resources/css/images/orijin-logo.png') }}">
                    </a>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @include('themes.orijin.template-parts.menu')
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>