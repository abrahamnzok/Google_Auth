<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Login Sign Up Form Redesigned</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700">
    <link rel="stylesheet" href="assets/css/google-style-login.css">
</head>

<body>
    <div class="row">
        <div class="col-md-6">
            <div class="login-card login"><img src="assets/img/logo-login.png" class="profile-img-card">
                <p class="profile-name-card"> </p>
                <form class="form-signin"><span class="reauth-email"> </span>
                    <input class="form-control" type="email" required="" placeholder="Email address" autofocus="" id="inputEmail">
                    <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword">
                    <div class="checkbox">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Remember me</label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Log in</button>
                </form><a href="#" class="forgot-password">Forgot your password?</a></div>
        </div>
        <div class="col-md-6">
            <div class="signin-card"><img src="assets/img/Unknown.png" class="profile-img-card">
                <p class="profile-name-card"> </p>
                <form class="form-signin"><span class="reauth-email"> </span>
                    <input class="form-control" type="text" placeholder="User ID">
                    <input class="form-control" type="email" required="" placeholder="Email address" autofocus="" id="inputEmail">
                    <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword">
                    <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword">
                    <div class="checkbox">
                        <div class="checkbox disabled">
                            <label>
                                <input type="checkbox">Remember me</label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
