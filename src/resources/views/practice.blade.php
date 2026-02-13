<form class="form" action="/confirm" method="post">
    @csrf

    <!-- お名前の例 -->
    <div class="form__group">
        <div class="form__label">
            <span class="label__item">お名前</span><span class="label__required">※</span>
        </div>
        <div class="form__input-content">
            <div class="form__input-flex"> {{-- ←横並び用の親 --}}
                <div class="form__input-box">
                    <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}">
                </div>
                <div class="form__input-box">
                    <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}">
                </div>
            </div>
            @error('last_name')<p class="error-msg">{{ $message }}</p>@enderror
        </div>
    </div>

    <!-- 電話番号の例 -->
    <div class="form__group">
        <div class="form__label">
            <span class="label__item">電話番号</span><span class="label__required">※</span>
        </div>
        <div class="form__input-content">
            <div class="form__input-flex">
                <div class="form__input-box"><input type="text" name="tel1" placeholder="090"></div>
                <span class="hyphen">-</span>
                <div class="form__input-box"><input type="text" name="tel2" placeholder="1234"></div>
                <span class="hyphen">-</span>
                <div class="form__input-box"><input type="text" name="tel3" placeholder="5678"></div>
            </div>
        </div>
    </div>

    <!-- 送信ボタン -->
    <div class="form__button">
        <button type="submit" class="submit-btn">確認画面</button>
    </div>
</form>