<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Новости науки</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body style="display: flex; height: 100vh; align-items: center">
<div class="row" style="width: 400px">
    <form class="col s12">
        <h1>Вход</h1>
        <div class="row">
            <div class="input-field col s12">
                <input id="login" type="text" class="validate" name="login">
                <label for="login">Логин</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="password">
                <label for="password">Пароль</label>
            </div>
        </div>
        <div class="row">
            <div class=" input-field col s6 row">
                <a href="{{route('login')}}">Есть аккаунт</a>
            </div>
            <div class="input-field col s6">
                <button class="btn waves-effect waves-light right-align col s12" type="submit">Зарегистироваться</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
