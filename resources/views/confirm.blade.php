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
    <h2 class="text">内容確認</h2>
    <form method="POST" action="/process">
      @csrf
      <dl>
        <div class="form">
          <dt><label for="fullname">お名前</label><span class="choice">*</span></dt>
          <dd>{{$inputs['fullname']}}</dd>
          <dd><input name="fullname" id="fullname" class="write" value="{{$inputs['fullname']}}" type="hidden"></dd>
        </div>
        <div class="form">
          <dt><label for="gender">性別</label><span class="choice">*</span></dt>
          <dd>{{$inputs['gender']}}</dd>
        </div>
        <div class="form">
          <dt><label for="email">メールアドレス</label><span class="choice">*</span></dt>
          <dd>{{$inputs['email']}}</dd>
          <dd><input name="email" id="email" class="write" value="{{ $inputs['email']}}" type="hidden"></dd>
        </div>
        <div class="form">
          <dt><label for="postcode">郵便番号</label><span class="choice">*</span></dt>
          <dd>{{$inputs['postcode']}}</dd>
          <dd><input name="postcode" id="postcode" class="write" value="{{ $inputs['postcode']}}" type="hidden"></dd>
        </div>
        <div class="form">
          <dt><label for="address">住所</label><span class="choice">*</span></dt>
          <dd>{{$inputs['address']}}</dd>
          <dd><input name="address" id="adress" class="write" value="{{ $inputs['address']}}" type="hidden"></dd>
        </div>
        <div class="form">
          <dt><label for="building_name">建物名</label></dt>
          <dd>{{$inputs['building_name']}}</dd>
          <dd><input name="building_name" id="building_name" class="write" value="{{$inputs['building_name']}}" type="hidden"></dd>
        </div>
        <div class="form">
          <dt><label for="opinion">ご意見</label><span class="choice">*</span></dt>
          <dd>{!! nl2br(e($inputs['opinion'])) !!}</dd>
          <dd><input name="opinion" id="opinion" value="{{$inputs['opinion']}}" type="hidden"></dd>
        </div>
      </dl>
      <input type="submit" name="process" value="送信する">
      <button type="submit" name="return" value="return">
        修正する
      </button>

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