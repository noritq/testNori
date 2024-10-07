@extends('layouts/common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin__content">
    <div class="admin__content-heading">
        <h2>Admin</h2>
    </div>
    <div class="admin__content-form">
        <div class="admin__content-form__index">
            <form action="">
                <input class="admin__content-form__name" type="text" placeholder="名前やメールアドレスを入力してください">
                <select class="admin__content-form__gender" name="gender" id="">
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">その他</option>
                </select>
                    <select class="admin__content-form__detail" name="detail" defaultValue="選択してください">
                    <option disabled selected>お問い合わせの種類</option>
                    <option value="商品のお届けについて">商品のお届けについて</option>
                    <option value="商品の交換いついて">商品の交換について</option>
                    <option value="商品トラブル">商品トラブル</option>
                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                    <option value="その他">その他</option>
                </select>
                <input class="admin__content-form__date" type="date">
                <button>検索</button>
            </form>
            <div class="admin__content-export">
            <form action=""><button>エクスポート</button></form>
            </div>
            <div class="admin__content-list">
                <table class="admin__content-list__detail">
                    <tr class="admin__content-table__header">
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせの内容</th>
                        <th></th>
                    </tr>
                    <tr class="admin__content-table__detail">
                        <td><input type="name" placeholder="山田太郎"></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>


@endsection