<html>
<head>
    <title>Welcome to Your Blog</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<section class="container">
    <div class="content">
        <h1>这里是添加文章页面，欢迎您的投稿， {{Auth::user()->name}} ! - <b>这里是退出按钮</b></h1>
        <form name="add_post" method="POST" action="{{ route('post_add') }}">
            {{ csrf_field() }}
            <p><input type="text" name="title" placeholder="Post Title" value=""/></p>
            <p><textarea name="content" placeholder="Post Content"></textarea></p>
            <p><input type="submit" name="submit" /></p>
        </form>
    </div>
</section>