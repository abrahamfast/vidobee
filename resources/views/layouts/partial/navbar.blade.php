<div class="navbar-container">
    <nav class="navbar navbar-expand-lg navbar-light" data-sticky="top">
        <div class="container">
            <a class="navbar-brand navbar-brand-dynamic-color fade-page" href="{{ route('home') }}">
                <img width="130px" alt="vidobee" src="assets/img/logos/vidobee.png">
            </a>
            <div class="d-flex align-items-center order-lg-3">
                <btn-modal target="#free-upload" classname="btn btn-primary ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3"></btn-modal>
                <button aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navigation-menu" data-toggle="collapse" type="button">
                    <img alt="Navbar Toggler Open Icon" class="navbar-toggler-open icon icon-sm" data-inject-svg src="assets/img/icons/interface/icon-menu.svg">
                    <img alt="Navbar Toggler Close Icon" class="navbar-toggler-close icon icon-sm" data-inject-svg src="assets/img/icons/interface/icon-x.svg">
                </button>
            </div>
            <div class="collapse navbar-collapse order-3 order-lg-2 justify-content-lg-end" id="navigation-menu">
                <ul class="navbar-nav my-3 my-lg-0">
                    <li class="nav-item">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link" href="{{ route('home') }}" role="button">Home</a>
                    </li>
                    <li class="nav-item">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link" href="{{ route('about') }}" role="button">About</a>
                    </li>
                    <li class="nav-item">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link" href="{{ route('contact') }}" role="button">ContactUs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>