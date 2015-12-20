@extends('auth.auth')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>天啦噜！</strong> 出错了囧：<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <body>
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl">
            <a class="navbar-brand block" href="index.php?r=user/logined"><span class="h1 font-bold">Two-factor</span></a>
            <section class="m-b-lg">
                <header class="wrapper text-center">
                    <strong>登录</strong>
                </header>
                <form action="{{ url('auth/login') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input name="email" type="email"  value="{{ old('email') }}" placeholder="邮箱"
                               class="form-control rounded input-lg text-center no-border">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" placeholder="密码" class="form-control rounded input-lg text-center no-border">
                    </div>
                    <div class="checkbox i-checks m-b">
                        <label class="m-l">
                            <input type="checkbox" name="remember" checked=""><i></i>记住我
                        </label>
                    </div>

                    <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i
                                    class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">登录</span></button>
                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center">
                        <small>还没有账号？</small>
                    </p>
                    <a href="{{ url('auth/register') }}" class="btn btn-lg btn-info btn-block rounded">新建一个账号</a>
                </form>
            </section>
        </div>
    </section>
    </body>
@endsection