@section('content')
<div class="container">

            @if (count(Auth::user()->applications))
                <div class="row">
                    <div class="col-md-9">
                        <h1>My Applications</h1>
                    </div>
                    <div class="col-md-3 text-right">
                        <a class="btn btn-primary btn-block btn-virgil apps-create-button" href="/dashboard/application/create">REGISTER AN APPLICATION</a>
                    </div>
                </div>
                <div class="row">        
                    <div class="col-md-12">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Token's</th>
                                <th>Created</th>
                            </tr>
                            @foreach (Auth::user()->applications as $application)
                                <tr>
                                    <td>
                                        <a href="/dashboard/application/{{$application->uuid}}/update">{{$application->name}}</a>
                                    </td>
                                    <td>
                                        {{$application->description}}
                                    </td>
                                    <td>
                                        @foreach ($application->tokens as $token)
                                        {{$token->token}} <br />
                                        @endforeach
                                    </td>
                                    <td>
                                        {{$application->created_at}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>                                    
                    </div>
                </div>

            @else
            <div class="apps-empty-container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <img src="/img/app-icon.png">
                        <h2>Welcome to Virgil Security!</h2>
                        <p>Register your application and generate a token to get started. For additional help <br /> go to the <a href="/documents/csharp/quickstart">Developers page</a>, choose your language and follow the guides.</p>
                    </div>
                    <div class="col-md-12">
                        <a class="btn btn-primary btn-virgil apps-create-button" href="/dashboard/application/create">REGISTER AN APPLICATION</a>
                    </div>
                </div>
            </div>
            @endif
</div>
@stop