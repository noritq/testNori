@extends('layouts/common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__content-heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">お名前</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_name">
                <input type="text" name="last_name" placeholder="例:山田">
                <input type="text" name="first_name" placeholder="例:太郎">
             </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">性別</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_gender">
                <input type="radio" name="gender" value="男性" checked>男性
                <input type="radio" name="gender" value="女性">女性
                <input type="radio" name="gender" value="その他">その他
             </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">メールアドレス</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_email">
                <input type="email" name="email" placeholder="例:test@example.com">
             </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">電話番号</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_tel">
                <input type="tel" name="tel_first" placeholder="090">
                <span>-</span>
                <input type="tel" name="tel_second" placeholder="1234">
                <span>-</span>
                <input type="tel" name="tel_third" placeholder="5678">
             </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">住所</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_address">
                <input type="text" name="address" placeholder="東京都渋谷区千駄ヶ谷1-2-3">
             </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">建物名</span>
            </div>
             <div class="form__group-content_building">
                <input type="text" name="building" placeholder="千駄ヶ谷マンション101">
             </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">お問い合わせの種類</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_detail">
                <select name="detail" defaultValue="選択してください">
                    <option disabled selected>選択してください</option>
                    <option value="商品の交換いついて">商品の交換について</option>
                </select>
             </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">お問い合わせ内容</span>
                <span class="form__group-required">※</span>
            </div>
             <div class="form__group-content_content">
                <textarea name="content" placeholder="お問い合わせ内容をご記載くだい"></textarea>
             </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>


@endsection