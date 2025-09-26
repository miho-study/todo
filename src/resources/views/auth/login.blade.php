@extends('layouts.guest')

@section('content')
<div class="container">
    <h1>ログイン</h1>

    <!-- エラーメッセージ表示 -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">メールアドレス</label>
            <input id="email" type="email" name="email" required autofocus>
        </div>

        <div>
            <label for="password">パスワード</label>
            <input id="password" type="password" name="password" required>
        </div>

        <div>
            <label>
                <input type="checkbox" name="remember"> ログイン情報を記憶する
            </label>
        </div>

        <button type="submit">ログイン</button>
    </form>
</div>
@endsection
