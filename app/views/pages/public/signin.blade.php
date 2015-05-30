@section('title')
    Virgil | Sign In
@show

@section('content')
    <div class="page signin">
        <section class="page-heading container">
            <h2>Sign In</h2>
        </section>

        <form class="container">
            <div class="row">
                <div class="col-xs-44 col-xs-offset-2 col-sm-24 col-sm-offset-12">
                    <div class="row">
                        <div class="col-xs-48 form-item">
                            <input class="form-input expand" type="text" name="email" placeholder="Your Email Address"/>
                        </div>
                        <div class="col-xs-48 form-item">
                            <input class="form-input expand" type="password" name="password" placeholder="Your Password"/>
                        </div>
                        <div class="col-xs-48 form-item text-center">
                            <a href="/reset">Forgot Password</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-48 form-footer text-center">
                        <button type="submit" class="btn-virgil btn-transparent form-submit">SIGN IN</button>
                    </div>
                </div>
            </div>
        </form>

        <section class="container text-center">
            <p>I'm not a registered user. <a href="/signup">Sign up for free</a></p>
        </section>
    </div>
@stop