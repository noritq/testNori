@extends('layouts/common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register-form__content">
    <div class="register-form__heading">
        <h2>Register</h2>
    </div>
    <div class="register-form__input">
        <div class="register-form__form" >
        <form action="/register" method="post">
            @csrf
            <div class="register-form__input-item">
                <p>お名前</p>
                <input type="text" name="name" placeholder="例 山田 太郎">
            </div>
            <div class="register-form__input-item">
                <p>メールアドレス</p>
                <input type="email" name="email" placeholder="test@example.com">
            </div>
            <div class="register-form__input-item">
                <p>パスワード</p>
                <input type="text" name="pass">
            </div>
            <div class="register-form__button">
                <button>登録</button>
            </div>
        </form>
        </div>
    </div>
    <div register-form__login>
        <form action="/login" method="get">
            <button class="register-form__login-submit">login</button>
        </form>
    </div>

</div>

@endsection