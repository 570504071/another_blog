<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1240">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> 欢迎注册！ </title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div id="signup" class="row" v-cloak>
    <h2>欢迎注册another_blog！</h2>
    <div class="col-sm-offset-3 col-sm-6">
        <p class="text-muted" v-if="form.invite_code">心动不如行动！</p>
        <form class="m-t" role="form" action="{{ route('post_signup') }}" method="POST" @submit="submit">
            {!! csrf_field() !!}
            <div class="form-group" :class="{ 'has-error': form.phone && !isPhoneValidated, 'has-success': isPhoneValidated }">
                <input name="name" type="text" class="form-control" placeholder="your name" v-model="form.name" autocomplete=off required>
            </div>

            <div class="form-group" :class="{ 'has-error': form.phone && !isPhoneValidated, 'has-success': isPhoneValidated }">
                <input name="email" type="text" class="form-control" placeholder="电子邮箱" v-model="form.email" autocomplete="signup-email" required>
            </div>

            <div class="form-group" :class="[ form.password ? 'has-success' : '' ]">
                <input name="password" type="password" class="form-control" placeholder="密码" v-model="form.password" autocomplete="off" required>
            </div>

            <div class="form-group" :class="[ form.password_confirmation && form.password_confirmation == form.password? 'has-success': '',
                form.password_confirmation && form.password_confirmation != form.password ? 'has-error': '' ]">
                <input name="password_confirmation" type="password" class="form-control" placeholder="密码确认" v-model="form.password_confirmation" autocomplete="off" required>
            </div>

            <button type="submit" class="btn btn-lg btn-primary block full-width m-b" data-loading-text="注册中...">完成注册</button>

            <p class="text-muted text-center">
                <small>已注册?</small>&nbsp;&nbsp;<a href="{{ route('get_login') }}">点击登录</a>
            </p>
            <hr>
            <p>
                <small class="text-muted">为了获得最佳的使用体验，推荐您使用<br> 360 浏览器极速模式或谷歌 Chrome </small>
            </p>
        </form>
    </div>
</div>
</body>
</html>

