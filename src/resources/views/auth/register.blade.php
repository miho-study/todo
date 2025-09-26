@extends('layouts.guest')

@section('content')
<div class="container">
    <h1>新規登録</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">名前</label>
            <input id="name" type="text" name="name" required autofocus>
        </div>

        <div>
            <label for="email">メールアドレス</label>
            <input id="email" type="email" name="email" required>
        </div>

        <div>
            <label for="password">パスワード</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
        </div>

        <div>
            <label for="password_confirmation">パスワード確認</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>

        <button type="submit">登録</button>
    </form>
</div>
@endsection
