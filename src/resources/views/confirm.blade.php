@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')
    <header class="header">
        <div class="header__inner">
            <h1 class="header__title">
                内容確認
            </h1>
        </div>
    </header>

    <form class="confirm__form" action="/contacts" method="post">
    @csrf
        <div class="confirm__table">
            <table class="confirm__content">
                <tr>
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="fullname" value="{{$contact['first_name'] }} {{ $contact['last_name'] }}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="{{$contact['gender']}}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="text" name="email" value="{{$contact['email']}}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th class="confirm-table__header">郵便番号</th>
                    <td class="confirm-table__text">
                        <input type="text" name="postcode" value="{{$contact['postcode']}}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{$contact['address']}}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building_name" value="{{$contact['building_name']}}" readonly/>
                    </td>
                </tr>
                <tr>
                    <th class="confirm-table__header--textarea">ご意見</th>
                    <td class="confirm-table__textarea">
                        <textarea name="opinion" readonly>{{$contact['opinion']}}</textarea>
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
    <div class="fix__link">
        @csrf
        <button type="button" onClick="history.back()" class="fix-link__button" name="back" >修正する</button>
    </div>

@endsection