@section('doc-header')
<div class="dev-header">
    <div class="container">
        <div class="dev-header-title">
            <h1>Getting Started with C#/.NET</h1>
            <h3>This documentation will help you get started developing secure applications.</h3>
        </div>
    </div>
    <nav class="navbar navbar-default dev-navbar hidden-xs">
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="@if($reference == 'quickstart') active @endif"><a href="/documents/csharp/quickstart">Quickstart</a></li>
                    <li class="@if($reference == 'crypto-lib') active @endif"><a href="/documents/csharp/crypto-lib" >Crypto Library</a></li>
                    <li class="@if($reference == 'sdk') active @endif"><a href="/documents/csharp/sdk">SDK</a></li>
                    <li class="@if($reference == 'keys-service') active @endif"><a href="/documents/csharp/keys-service" >Keys Service</a></li>
                    <li class="@if($reference == 'downloads') active @endif"><a href="/documents/csharp/downloads" >Downloads</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="dev-navbar-sm visible-xs">
        <div class="container ">
            <div class="list-group">
                <a href="/documents/csharp/quickstart" class="list-group-item @if($reference == 'quickstart') active @endif">Quickstart</a>
                <a href="/documents/csharp/crypto-lib" class="list-group-item @if($reference == 'crypto-lib') active @endif">Crypto Library</a>
                <a href="/documents/csharp/sdk" class="list-group-item @if($reference == 'sdk') active @endif">SDK</a>
                <a href="/documents/csharp/keys-service" class="list-group-item @if($reference == 'keys-service') active @endif">Keys Service</a>
                <a href="/documents/csharp/downloads" class="list-group-item @if($reference == 'downloads') active @endif">Downloads</a>
            </div>
        </div>
    </div>
</div>
@show