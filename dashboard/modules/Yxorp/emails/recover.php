<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

    <title></title></head>
<body>
<div class="container">

    <h1>
        <div style="text-align: center;">{{ $app['app.name'] }}</div>
    </h1>

    <div style="text-align: center;"><a href="{{ $target }}?token={{ $token }}">@lang('Reset Password')</a></div>

</div>
</body>
</html>