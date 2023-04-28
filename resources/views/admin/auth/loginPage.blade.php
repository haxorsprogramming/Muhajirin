@include('layout.headerAuth')

<body class="bg-primary bg-pattern">
<div class="home-btn d-none d-sm-block">
    <a href="javascript:void(0)"><i class="mdi mdi-home-variant h2 text-white"></i></a>
</div>

<div class="account-pages my-5 pt-5" id="divLogin">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5">
                    <a href="javascript:void(0)" class="logo">
                        <img src="https://nos.jkt-1.neo.id/aditiastorage/asset/logo/almira-tech-full-square.png" height="90" alt="logo"></a>
                    <h5 class="font-size-16 text-white-50 mb-4" style="margin-top: 20px;">Muhajirin Administrator Page</h5>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="p-2">
                            <h5 class="mb-5 text-center">Operator Page</h5>
                            <form class="form-horizontal">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="txtUsername">Username</label>
                                            <input type="text" class="form-control" id="txtUsername" placeholder="Enter username">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="txtPassword">Password</label>
                                            <input type="password" class="form-control" id="txtPassword" placeholder="Enter password">
                                        </div>

                                        <div class="mt-4">
                                            <a class="btn btn-success btn-block waves-effect waves-light" href="javascript:void(0)" onclick="loginAtc()" id="btnLogin">Log In</a>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
<!-- end Account pages -->


@include('layout.footerAuth')
