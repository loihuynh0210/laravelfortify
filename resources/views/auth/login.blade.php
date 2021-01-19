<x-guest-layout>
    <div class="radius5" id="loginWrapper">
        <h1 class="mb20">
            <a href="/admin/" id="logo">
                <img alt="CB-STANDARD" src="/admin/img/cybridge/logo.gif"/>
            </a>
        </h1>
        <form class="mb20" method="POST" action="{{ isset($guard) ? route('admin.login') : route('login') }}">
            @csrf
            @if (count($errors) >0)
                <ul class="error">
                    @foreach($errors->all() as $error)
                        <li>
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
             @endif
            <p class="mb5">
                <label>
                    <x-jet-input id="email" placeholder="ユーザー名" class="loginInput" type="email" name="email" :value="old('email', 'leon@cybridge.jp')" autofocus />
                </label>
            </p>
            <p class="mb5">
                <label>
                    <x-jet-input placeholder="パスワード" id="password" class="loginInput" value="12345678" type="password" name="password" autocomplete="current-password" />
                </label>
            </p>
            <p class="mb10">
                <span class="checkbox">
                    <x-jet-input id="rememberme" type="checkbox" name="remember" :value="old('rememberme', true)"
                    autofocus />
                    <x-jet-label for="rememberme" value="{{ __('ログイン状態を保存する') }}" />
                </span>
            </p>
            <p class="submit">
                <x-jet-button class="button login auto mb0">{{ __('ログインする') }}</x-jet-button>
            </p>
        </form>
        <div class="boxText">
            @if (Route::has('password.request'))
            <p class="textLink" id="nav">
                <a href="{{ route('password.request') }}">
                    {{ __('管理画面トップはこちらから?') }}
                </a>
            </p>
            @endif
            <p class="text">
                ※ログインボタンをクリックすると、エラー時のシェイクアニメーションが作動するようになっています。お好みで調整して利用してください。
            </p>
        </div>
    </div>
</x-guest-layout>
