
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
  <title>2025年流行キャラ占い　紫式部</title>
  <!-- InstanceEndEditable -->
  <link href="css/reset.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-46094940-1', 'adjust.ne.jp');
    ga('send', 'pageview');

  </script>
  <!-- InstanceBeginEditable name="head" -->
  <!-- InstanceEndEditable -->
</head>

<body>


  <!--ソーシャルボタン-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v18.0"
  nonce="dPr5Eks8"></script>


  <div id="wrapper">

    <header>
      <h1><img src="images/h1_img01.png" alt="HAPPY NEW YEAR 2025" width="780" height="140"></h1>
      <!-- InstanceBeginEditable name="header" -->
      <!-- InstanceEndEditable -->
    </header>

    <article id="mainContent">
      <!-- InstanceBeginEditable name="mainContent" -->
      <section class="uranai-kekka mb25 pb10">

        <div class="uranai-kekka-innner">
          <div class="kekka"><img src="images/title_img01.png" width="91" height="47" alt=""></div>
          <h1><img src="images/{{ $fortune->image }}" width="764" height="825" alt=""></h1>
          <div id="animation-container"><img src="images/bg_light.png" width="390" height="390" alt=""></div>
        </div><!--uranai-kekka-innner-->

        <div class="uranai-text">
          <h2><img src="images/h2_img01.gif" width="349" height="39" alt=""></h2>
          <p class="textLeft">
            {{ $fortune->personality }}
          </p>
          <h2><img src="images/h2_img02.png" width="349" height="39" alt=""></h2>
          <p class="textLeft">
            {!! $fortune->fortune !!}
          </p>
          <h2><img src="images/h2_img03.gif" width="349" height="39"></h2>
          <p class="fSizeLL">{{ $fortune->lucky_items }}</p>
        </div>
      </section>

      <div id="btn"><a href="{{ route('welcome') }}"><img src="images/btn_img02.png" width="402" height="78" alt=""
            class="mb20"></a></div>

      <!-- InstanceEndEditable -->
    </article>


    <!--ソーシャルボタン-->
    <div id="snsbtnArea" class="clearfix">
      <div id="snsbtnArea-in">

        <!-- LINE// -->
        <div class="line-it-button" data-lang="ja" data-type="share-a" data-env="REAL"
          data-url="https://nenga.adjust.ne.jp/result_2025_04.html" data-color="default" data-size="small" data-count="true"
          data-ver="3" style="display: none;"></div>
        <script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async"
          defer="defer"></script>
        <!-- //LINE -->
        
        <div class="fb-share-button" data-href="https://nenga.adjust.ne.jp/result_2025_04.html" data-layout="button"
          data-size="small" height="20px"><a target="_blank"
            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnenga.adjust.ne.jp%2Findex_2025.html&amp;src=sdkpreparse"
            class="fb-xfbml-parse-ignore">シェアする</a></div>

        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
        <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + '://platform.twitter.com/widgets.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'twitter-wjs');</script>

        <div class="g-plusone" data-size="medium"></div>
        <script type="text/javascript">
          window.___gcfg = { lang: 'ja' };

          (function () {
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