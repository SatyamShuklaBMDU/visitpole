<!DOCTYPE html>
<html>

<head>
    <title>Dashboard login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('upload/css/style.css') }}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;1,100;1,200;1,300;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('upload/css/bootstrap.min.css') }}">
</head>

<body style="background: #222;font-family: 'Poppins', sans-serif;">
    <section class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6"></div>
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                    <div class="form-container">
                        <h3 class="title">Admin Login</h3>
                        <form class="form-horizontal" action="{{ url('login') }}" method="POST">
                            @csrf
                            <div class="form-icon">
                                <i class="fa fa-user-circle"></i>
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" value="{{ old('email') }}"
                                    placeholder="Username" name="email">
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" value="{{ old('password') }}"
                                    placeholder="Password" name="password">
                            </div>
                            <button class="btn signin" name="submit">Login</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6"></div>
            </div>
        </div>
    </section>
</body>

</html>
