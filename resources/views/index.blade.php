<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
</head>

<body>
  <div class="content">
    <h2 class="text">お問い合わせ</h2>
    <form method="POST" action="/confirm">
      @csrf
      <dl>
        <div class="form">
          <dt><label for="fullname">お名前</label><span class="choice">*</span></dt>
          <dd><input name="fullname" id="fullname" class="write" value="{{ old('fullname') }}" type="text"></dd>
          <dd>
            <p class="example">例）山田太郎</p>
          </dd>
          @error('fullname')
          <dd>
            <p>{{$message}}</p>
          </dd>
          @enderror
        </div>
        <div class="form">
          <dt><label for="gender">性別</label><span class="choice">*</span></dt>
          <dd>
            <input type="radio" name="gender" value="男性" checked="checked" class="write"><span>男性</span>
            <input type="radio" name="gender" value="女性" class="write"><span>女性</span>
          </dd>
          @error('gender')
          <dd>
            <p>{{$message}}</p>
          </dd>
          @enderror
        </div>
        <div class="form">
          <dt><label for="email">メールアドレス</label><span class="choice">*</span></dt>
          <dd><input name="email" id="email" class="write" value="{{ old('email') }}" type="email"></dd>
          <dd>
            <p class="example">例）test@example.com</p>
          </dd>
          @error('email')
          <dd>
            <p>{{$message}}</p>
          </dd>
          @enderror
        </div>
        <div class="form">
          <dt><label for="postcode">郵便番号</label><span class="choice">*</span></dt>
          <dd><input name="postcode" id="postcode" class="write" value="{{ old('postcode') }}" type="text"></dd>
          <dd>
            <p class="example">例）123-4567</p>
          </dd>
          @error('postcode')
          <dd>
            <p>{{$message}}</p>
          </dd>
          @enderror
        </div>
        <div class="form">
          <dt><label for="address">住所</label><span class="choice">*</span></dt>
          <dd><input name="address" id="adress" class="write" value="{{ old('address') }}" type="text"></dd>
          <dd>
            <p class="example">例)東京都渋谷区千駄ヶ谷1-2-3</p>
          </dd>
          @error('address')
          <dd>
            <p>{{$message}}</p>
          </dd>
          @enderror
        </div>
        <div class="form">
          <dt><label for="building_name">建物名</label></dt>
          <dd><input name="building_name" id="building_name" class="write" value="{{ old('building_name') }}" type="text"></dd>
          <dd>
            <p class="example">例）千駄ヶ谷マンション101</p>
          </dd>
          @error('building_name')
          <dd>
            <p>{{$message}}</p>
          </dd>
          @enderror
        </div>
        <div class="form">
          <dt><label for="opinion">ご意見</label><span class="choice">*</span></dt>
          <dd><textarea name="opinion" id="opinion" class="write2" value="{{ old('opinion') }}"></textarea></dd>
          @error('opinion')
          <dd>
            <p>{{$message}}</p>
          </dd>
          @enderror
        </div>
      </dl>
      <input type="submit" value="確認" class="button">
    </form>
  </div>
</body>

</html>
<style>
  *,
  *:before,
  *:after {
    box-sizing: border-box;
  }

  .content {
    margin: 10% auto;
    width: 500px;
  }

  .text {
    text-align: center;
  }

  .choice {
    color: crimson;
    margin-left: 5px;
  }

  .example {
    color: rgb(151, 148, 148);
    margin-left: 28%;
    margin-top: -5%;
    font-size: 12px;
  }

  form dl dt {
    width: 165px;
    padding: 10px 0;
    float: left;
    clear: both;
  }

  form dl dd {
    padding: 10px 0;
  }
  .button {
    display: block;
    text-align: center;
    margin: 10% auto;
    width: 300px;
    background-color: #000;
    color: #fff;
    padding: 10px;
    cursor: pointer;
  }
</style>