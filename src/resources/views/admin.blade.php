<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <title>管理システム</title>
</head>
<body>
    <header class="header__content">
        <div class="header__inner">
            <p class="header__title">
                管理システム
            </p>
        </div>
    </header>

    <main>
        <div class="content">
        <!--検索フォーム-->
            <div class="content__search-form">
                <form class="search-form">
                @csrf
                    <div class="search-form__items-row">
                        <div class="search-form__name">
                            <p class="search-form__header">お名前</p>
                            <input class="search-form__name-input" type="text" name="search_name">
                        </div>
                        <div class="search-form__gender">
                            <p class="search-form__header--gender">性別</p>
                            <div class="search-form__gender-item">
                                <label class="search-form__gender-label">
                                    <input class="search__gender-input" type="radio" name="gender" id="0" value="全て" checked="checked" />
                                    <span class="gender-label">全て</span>
                                </label>
                            </div>
                            <div class="search-form__gender-item">
                                <label class="search-form__gender-label">
                                    <input class="search__gender-input"         type="radio" name="gender" id="1" value="男性" />
                                    <span class="gender-label">男性</span>
                                </label>
                            </div>
                            <div class="search-form__gender-item">
                                <label class="search-form__gender-label">
                                    <input class="search__gender-input" type="radio" name="gender" id="2" value="女性" />
                                        <span class="gender-label">女性</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="search-form__items-row">
                        <div class="search-form__date">
                            <p class="search-form__header">登録日</p>
                            <input class="search-form__date-input" type="calendar"  name="search_date__from">
                            <p class="search_date__text">〜</p>
                            <input class="search-form__date-input" type="calendar" name="search_date__to">
                        </div>
                    </div>
                    <div class="search-form__items-row">
                        <div class="search-form__email">
                            <p class="search-form__header">メールアドレス</p>
                            <input class="search-form__email-input" type="text" name="search_email">
                        </div>
                    </div>
                    <div class="form__button">
                        <button class="form__button-submit" type="submit">検索</button>
                    </div>
                <a href="/" class="fix__link" name="back" >リセット</a>
                </form>
            </div>
            <!--検索フォーム-->
            <!--テーブル-->
            <div class="contact-table">
                <table class="content__contact">
                    <tr class="contact__header">
                        <th class="contact-header__item">ID</th>
                        <th class="contact-header__item">お名前</th>
                        <th class="contact-header__item">性別</th>
                        <th class="contact-header__item">メールアドレス</th>
                        <th class="contact-header__item">ご意見</th>
                    </tr>
                    @foreach ($contacts as $contact)
                    <tr class="contact__detail">
                        <td class="contact-detail__item">{{ $contact->id }}</td>
                        <td class="contact-detail__item">{{ $contact->name }}</td>
                        <td class="contact-detail__item">{{ $contact->gender }}</td>
                        <td class="contact-detail__item">{{ $contact->email }}</td>
                        <td class="contact-detail__item">{{ $contact->opinion }}</td>
                        <td class="delete__item">
                            <div class="delete__button">
                                <button class="delete__button-submit" type="submit">削除</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </main>

</body>


</html>