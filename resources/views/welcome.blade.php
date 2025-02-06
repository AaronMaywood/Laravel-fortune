
<!DOCTYPE HTML>
<html lang="ja"><!-- InstanceBegin template="/Templates/base.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<link rel="stylesheet" media="all" type="text/css" href="css/pc.css" />
<!-- ※デフォルトのスタイル（style.css） -->
<link rel="stylesheet" media="all" type="text/css" href="css/tb.css" />
<!-- ※タブレット用のスタイル（tablet.css） -->
<link rel="stylesheet" media="all" type="text/css" href="css/sp.css" />
<!-- ※スマートフォン用のスタイル（smart.css） -->
<!-- InstanceBeginEditable name="doctitle" -->
<title>2025年「流行キャラ占い」</title>
<!-- InstanceEndEditable -->
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46094940-1', 'adjust.ne.jp');
  ga('send', 'pageview');

</script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
@if ($errors->get('year') || $errors->get('month') || $errors->get('day') )
  <p style="color:white;background:red;text-align:center;padding:16px;">入力エラーがあります。エラーメッセージに従って入力値を見直してください。</p>
@endif


<!--ソーシャルボタン-->

<!-- facebook// -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v18.0"
  nonce="dPr5Eks8"></script>
<!-- //facebook -->

<div id="wrapper">

  <header>
<h1><img src="images/h1_img01.png" alt="HAPPY NEW YEAR 2025!!" width="780" height="140"></h1>
  <!-- InstanceBeginEditable name="header" -->
    <p><img src="images/h2_img01.png" width="780" height="90" alt="今年もよろしくお願いいたします"><img class="mt15" src="images/text_img.png" width="780" height="180" alt="年の初めはアジャスト「流行キャラ占い」で今年の運勢を占ってみませんか？あなたどんな「流行キャラ」!?"></p>  <!-- InstanceEndEditable --></header>

  <article id="mainContent">
<!-- InstanceBeginEditable name="mainContent" -->
<!--占いフォーム部分-->
<section class="uranai-form mb15">
  <h1><img  class="mb10" src="images/title_img.png" width="770" height="246" alt="2025年のあなたの運勢がわかる！！「流行りキャラ占い」"></h1>
  <p class="mb20"><img src="images/text_img02.png" width="418" height="40" alt="生年月日を入力してください。"></p>
  <form method="GET" action="{{ route('kabbala') }}" class="mb10">

    <p class="mb15">
      <input type="text" name="year" class="form-flam01">
      年</p>
      @if ($errors->get('year'))
          <ul style="margin:0px 0px 20px;background:red;color:white;padding:10px;display:inline-block;">
              @foreach ((array) $errors->get('year') as $message)
                  <li>{{ $message }}</li>
              @endforeach
          </ul>
      @endif
    <p class="mb15">
      <select name="month" class="form-flam02">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
      月</p>
      @if ($errors->get('month'))
          <ul class="text-sm text-red-600 space-y-1">
              @foreach ((array) $errors->get('month') as $message)
                  <li>{{ $message }}</li>
              @endforeach
          </ul>
      @endif
    <p>
      <select name="day" class="form-flam02">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
      </select>
      日</p>
      @if ($errors->get('day'))
          <ul class="text-sm text-red-600 space-y-1">
              @foreach ((array) $errors->get('day') as $message)
                  <li>{{ $message }}</li>
              @endforeach
          </ul>
      @endif
    <input type="image" src="images/btn_img01.png" alt="占う" class="btn-uranau">
  </form>
  <p class="party_info">カバラ数秘術鑑定：斉藤 啓一　イラスト：五十嵐 晃　キャラクター選定：株式会社アジャスト</p>
<!--
  <div id="btn"><a href="result01.html"><img src="image/btn_img01.png" width="291" height="60" alt=""></a></div> -->
</section>
<!-- InstanceEndEditable --></article>


<!--ソーシャルボタン-->
<div id="snsbtnArea" class="clearfix">
<div id="snsbtnArea-in">

<!-- <span class="line">
<script type="text/javascript" src="//media.line.naver.jp/js/line-button.js?v=20131101" ></script>
<script type="text/javascript">
new jp.naver.line.media.LineButton({"pc":false,"lang":"ja","type":"a"});
</script>
</span> -->

<!-- LINE// -->
<div class="line-it-button" data-lang="ja" data-type="share-a" data-env="REAL"
  data-url="https://nenga.adjust.ne.jp/index_2025.html" data-color="default" data-size="small" data-count="true"
  data-ver="3" style="display: none;"></div>
<script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async"
  defer="defer"></script>
<!-- //LINE -->

<div class="fb-share-button" data-href="https://nenga.adjust.ne.jp/index_2025.html" data-layout="button" data-size="small" height="20px"><a
    target="_blank"
    href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnenga.adjust.ne.jp%2Findex_2025.html&amp;src=sdkpreparse"
    class="fb-xfbml-parse-ignore">シェアする</a></div>


<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<div class="g-plusone" data-size="medium"></div>
<script type="text/javascript">
  window.___gcfg = {lang: 'ja'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

</div>
</div>
<!--ソーシャルボタンend-->

<article class="bnr-ag">
  <p>求められる情報を求める人へ</p>
  <h2>ADjust Group</h2>
  <ul class="bnr-wrap">
    <li class="big"><a href="http://www.adjust.ne.jp/" target="_blank"><img src="images/bnr_adjust.png" alt="ウェブ制作・システム開発 株式会社アジャスト"></a></li>
    <li><a href="http://adjustacademy.com/" target="_blank"><img src="images/bnr_academy.png" alt="ウェブデザイナー・ディレクター養成 アジャストアカデミー"></a></li>
    <li><a href="https://adjustcareer.com/" target="_blank"><img src="images/bnr_career.png" alt="あなたの未来がここにある！アジャストキャリア"></a></li>
    <li><a href="https://strander.jp/" target="_blank"><img src="images/bnr_strander.png" alt="人やビジネスを、つなげるような仕事を 株式会社ストランダー"></a></li>
    <li><a href="http://socialcast.jp/" target="_blank"><img src="images/bnr_sc.png" alt="動画配信・販売システム ソーシャルキャスト"></a></li>
    <li><a href="https://owlcast.jp/" target="_blank"><img src="images/bnr_oc.png" alt="オンラインスクール構築システム オウルキャスト"></a></li>
    <li><a href="https://fidfid.shop/" target="_blank"><img src="images/bnr_fid.png" alt="ファストファッション販売サイト ファッションイズダンシング"></a></li>
    <li><a href="https://anytime.adjust.ne.jp/" target="_blank"><img src="images/bnr_anytime.png" alt="「改正派遣法」対応！関連スキルに特化したeラーニング エニィタイムラーニング"></a></li>
    <li><a href="http://honnomura.com/" target="_blank"><img src="images/bnr_book.png" alt="デジタルコンテンツ企画・制作・販売 ブックヴィレッジ"></a></li>
  </ul>
</article>
</div>
<!--end/wrapper-->
  <footer>
    <p>&copy; 2025 ADjust Co.,Ltd. All Right Reserved.</p>
  </footer>
</body>
</html>