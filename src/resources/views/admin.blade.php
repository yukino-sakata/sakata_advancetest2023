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
                <form class="search-form" action="/search" method="get">
                @csrf
                    <div class="search-form__items-row">
                        <div class="search-form__name">
                            <p class="search-form__header">お名前</p>
                            <input class="search-form__name-input" type="text" name="search_name">
                        </div>
                        <div class="search-form__gender">
                            <p class="search-form__header--gender">性別</p>
                            <div class="search-form__gender-item">
                                <label class="search-form__gender-label" for="0">
                                    <input class="search__gender-input" type="radio" name="search_gender" id="0" value="全て" checked="checked" />
                                    <span class="gender-label">全て</span>
                                </label>
                            </div>
                            <div class="search-form__gender-item">
                                <label class="search-form__gender-label" for="1">
                                    <input class="search__gender-input"         type="radio" name="search_gender" id="1" value="男性" />
                                    <span class="gender-label">男性</span>
                                </label>
                            </div>
                            <div class="search-form__gender-item">
                                <label class="search-form__gender-label" for="2">
                                    <input class="search__gender-input" type="radio" name="search_gender" id="2" value="女性" />
                                        <span class="gender-label">女性</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="search-form__items-row">
                        <div class="search-form__date">
                            <p class="search-form__header">登録日</p>
                            <input class="search-form__date-input" type="date"  name="search_date__from">
                            <p class="search_date__text">〜</p>
                            <input class="search-form__date-input" type="date" name="search_date__to">
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
                <a href="/admin" class="fix__link" name="back" >リセット</a>
                </form>
            </div>
            <!--検索フォーム-->
            <!--テーブル-->
            <div class="table-container">
                <table class="contact-table">
                    <tr class="contact__header">
                        <th class="contact-header__item--id">ID</th>
                        <th class="contact-header__item--name">お名前</th>
                        <th class="contact-header__item--gender">性別</th>
                        <th class="contact-header__item--email">メールアドレス</th>
                        <th class="contact-header__item--opinion">ご意見</th>
                    </tr>
                        @foreach ($contacts as $contact)
                    <tr class="contact__detail">
                        <td class="contact-detail__item--id">{{ $contact->id }}</td>
                        <td class="contact-detail__item--name">{{ $contact->fullname }}</td>
                        <td class="contact-detail__item--gender">{{ $contact->gender }}</td>
                        <td class="contact-detail__item--email">{{ $contact->email }}</td>
                        <td class="contact-detail__item--opinion">
                            <span class="tooltip" data-tooltip="{{ $contact->opinion }}">{{ $contact->opinion }}</span>
                        </td>
                        <td class="delete__item">
                            <form class="delete__button" action="/delete?id={{$contact->id}}" method="POST">
                                @csrf
                                <button class="delete__button-submit" type="submit">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>

        </div>
    </main>

</body>


</html>