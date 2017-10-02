<!doctype html>
<html lang="en">
<head>
    @include('layouts.head')
</head>

{{-- #f4f3ef --}}

<body style="background-color:#66615B">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Le Forme</a>
            </div>
        </div>
    </nav>

    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <a href="/orders" class="btn btn-fill btn-danger center-block mb-10" style="text-decoration:none;color:#fff">SKIP LOG IN</a>
                            <form>
                                <div class="card pt-10 pr-20 pl-20 pb-10">
                                    <div class="card-header">
                                        <h3 class="card-title mt-10 mb-20">Login</h3>
                                    </div>
                                    <div class="card-content">
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" placeholder="Enter email" class="form-control input-border">
                                        </div>
                                        <div class="form-group mb-20">
                                            <label>Password</label>
                                            <input type="password" placeholder="Password" class="form-control input-border">
                                        </div>
                                    </div>
                                    <div class="card-footer text-center mt-20 mb-10">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd ">Let's go</button>
                                        <div class="forgot">
                                            <a href="#" style="color:#333; opacity:.3;">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer footer-transparent">
                <div class="container">
                    <div class="copyright" style="color:#fff; opacity:.7;">
                        &copy; @php echo date('Y'); @endphp | Moticorp Creative Team
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @include('layouts.scripts')

</body>
</html>