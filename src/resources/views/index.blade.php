@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <header class="header">
        <div class="header__inner">
            <h1 class="header__title">
                お問い合わせ
            </h1>
        </div>
    </header>

    <div class="contact-form__content">
      <form class="form">
        <!--名前-->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="contact-form__name-input" type="text" name="first_name" value="{{ old('name') }}" />
                    <input class="contact-form__name-input" type="text" name="last_name" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>
        <!--名前-->
        <!--性別-->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-radio-container">
                    <div class="form__input--radio">
                        <label class="input-label__select-gender" for="men">
                            <input class="contact-form__gender-input" type="radio" name="gender" value="{{ old('gender') }}" />
                                <span class="gender-label">男性</span>
                        </label>
                    </div>
                    <div class="form__input--radio">
                        <label class="input-label__select-gender" for="men">
                            <input class="contact-form__gender-input" type="radio" name="gender" value="{{ old('gender') }}" />
                                <span class="gender-label">女性</span>
                        </label>
                    </div>
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>
        <!--性別-->
        <!--メールアドれス-->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="contact-form__item-input" type="email" name="email" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>
        <!--メールアドれス-->
        <!--郵便版後-->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="contact-form__item-input" type="postcode" name="postcode" value="{{ old('postcode') }}" />
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>
        <!--郵便番号-->
        <!--住所-->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="contact-form__item-input" type="text" name="address" value="{{ old('address') }}" />
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>
        <!--住所-->
        <!--建物名-->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input class="contact-form__item-input" type="text" name="building_name" value="{{ old('building_name') }}" />
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>
        <!--建物名-->
        <!--ご意見-->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ご意見</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea class="contact-form__item-input" name="content" value="{{ old('content') }}"></textarea>
            </div>
          </div>
        </div>
        <!--ご意見-->
        <!--確認ボタン-->
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        </div>
        <!--確認ボタン-->
      </form>
    </div>

@endsection