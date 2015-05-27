@section('header')
    <header class="header container">
        <nav class="navbar navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button"
                            class="navbar-toggle collapsed"
                            data-toggle="collapse"
                            data-target="#virgil-navbar"
                            aria-expanded="false"
                            aria-controls="navbar">
                        <span class="sr-only">Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="img/logo.png" class="header-logo" alt="Virgil"/>
                    </a>
                </div>
                <div id="virgil-navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="/contact-us" class="header-nav-link">CONTACT US</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/downloads" class="header-nav-link">DOWNLOADS</a>
                        </li>
                        <li>
                            <a href="/documents" class="header-nav-link">DOCUMENTATION</a>
                        </li>
                        <li>
                            @if (!is_null($auth_token))
                                <a href="/signin" class="header-nav-link">DASHBOARD</a>
                            @else
                                <a href="/signin" class="header-nav-link">SIGN IN</a>
                            @endif
                        </li>
                        <li class="hidden-xs">
                            <a href="https://www.linkedin.com/company/virgil-security-inc-" class="header-nav-link social">
                                <img src="/img/social-linkedin.png" alt="linkedin"/>
                            </a>
                        </li>
                        <li class="hidden-xs">
                            <a href="https://www.facebook.com/VirgilSec" target="_blank" class="header-nav-link social facebook">
                                <img src="/img/social-facebook.png" alt="facebook"/>
                            </a>
                        </li>
                        <li class="hidden-xs">
                            <a href="https://twitter.com/VirgilSecurity" target="_blank" class="header-nav-link social">
                                <img src="/img/social-twitter.png" alt="twitter"/>
                            </a>
                        </li>
                        <li class="visible-xs social-xs">
                            <div class="row">
                                <div class="col-xs-2 col-xs-offset-9">
                                    <a href="https://www.linkedin.com/company/virgil-security-inc-" class="header-nav-link social">
                                        <img src="/img/social-linkedin.png" alt="linkedin"/>
                                    </a>
                                </div>
                                <div class="col-xs-2">
                                    <a href="https://www.facebook.com/VirgilSec" target="_blank" class="header-nav-link social facebook">
                                        <img src="/img/social-facebook.png" alt="facebook"/>
                                    </a>
                                </div>
                                <div class="col-xs-2">
                                    <a href="https://twitter.com/VirgilSecurity" target="_blank" class="header-nav-link social">
                                        <img src="/img/social-twitter.png" alt="twitter"/>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@section('stop')
