<html>
<head>
    <title>Welcome to Login</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

<section class="container">
    <div class="login">
        <h1>Please Login</h1>
        <form name="login" method="POST" action="{{ route('post_login') }}">
            {{ csrf_field() }}
            <p><input type="text" name="email" value="" placeholder="Email"></p>
            <p><input type="password" name="password" value="" placeholder="Password"></p>
            <p class="submit"><input type="submit" name="commit" value="Login"></p>
        </form>
    </div>
</section>

</body>
</html>