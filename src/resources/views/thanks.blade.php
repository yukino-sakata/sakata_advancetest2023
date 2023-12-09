@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection

@section('content')
<p class="thanks__message">ご意見いただきありがとうございました。</p>

<div class="form__button">
    <button class="form__button-submit" type="submit">トップページへ</button>
</div>
@endsection