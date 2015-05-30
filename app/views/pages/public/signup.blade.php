@section('title')
    Virgil | Sign Up
@show

@section('content')
    <div class="page signup">
        <section class="page-heading container">
            <h2>Sign Up</h2>
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
                        <div class="col-xs-48 form-item">
                            <input class="form-input expand" type="text" name="company_name" placeholder="Company Name (optional)"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-48 form-footer text-center">
                        <button class="btn-virgil btn-transparent form-submit">CREATE ACCOUNT</button>
                    </div>
                </div>
            </div>
        </form>

        <section class="container check-email hide">
            Please check your email address for confirmation.
        </section>

        <section class="container text-center">
            By creating an account you agree to the Virgil Security<br/>
            {{--<a href="/term-of-service">Terms of Service</a> & <a href="/privacy-policy">Privacy Policy</a>--}}
            <a href="javascript: void(0);">Terms of Service</a> & <a href="javascript: void(0);">Privacy Policy</a>
        </section>

        <section class="container text-center">
            <p>Already have an account? <a href="/signin">Sign in</a></p>
        </section>
    </div>
@stop