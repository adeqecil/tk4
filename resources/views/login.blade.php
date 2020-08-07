<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Check Stock - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    {{-- Custom CSS --}}
    <link href="{{ url('assets/css/styles.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 my-5 shadow">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row form-login">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="h2">
                                        <h2>Check Stock</h2>
                                    </div>
                                    @if(session('status'))
                                        <div class="alert alert-danger">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form class="login" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Enter Email or Username..." name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                placeholder="Password" name="password">
                                        </div>
                                        <button type="submit" class="btn button-login btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
