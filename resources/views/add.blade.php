<html>
<head>
    <title>Welcome to Your Blog</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
<section class="container">

    @if(Auth::check())
        <div class="content">
            <h1>这里是发布文章的页面，欢迎您的投稿， {{Auth::user()->name}} !</h1>

            <form action="{{ route('logout') }}" method="post">
                {{ csrf_field() }}
                这里是<button type="submit">退出</button>按钮
            </form>

            <form name="add_post" method="POST" action="{{ route('post_add') }}">
                {{ csrf_field() }}
                <p><input type="text" name="title" placeholder="Post Title" value=""/></p>
                <p><textarea name="content" placeholder="Post Content"></textarea></p>
                <p><input type="submit" name="submit" /></p>
            </form>
        </div>

    @else
        <div>
            <h1>please <a href="{{ route('get_login') }} ">login</a></h1>
        </div>
    @endif

</section>
</body>