@section('header')

<nav class="navbar navbar-default navbar-static-top home-bg">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img alt="Brand" class="logo-img" src="/img/logo.png">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">ABOUT VIRGIL</a></li>
                <li><a href="#">HOW IT WORKS</a></li>
                <li class="@if($page == 'apps') active @endif"><a href="/apps">APPS</a></li>
                <li class="@if($page == 'documents') active @endif" ><a href="/documents/csharp/quickstart">DEVELOPERS</a></li>
                <li class="@if($page == 'signin') active @endif" ><a href="/signin">SIGN IN</a></li>
            </ul>
        </div>
    </div>
</nav>

@show
