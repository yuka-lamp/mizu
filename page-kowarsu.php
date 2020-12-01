<?php
/*
template name: クライアント
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
the_post();
?>

<div class="towcolumn">
<div class="container">
<div class="main">
<div class="single">

<section class="single__merchant__mv">
<div id="main_mv" class="slick">
<div class="">
  <img src="<?php echo $wp_url; ?>/dist/images/main_mv_1.jpg" alt="<?php the_title(); ?>の写真1">
</div>
<div class="">
  <img src="<?php echo $wp_url; ?>/dist/images/main_mv_2.jpg" alt="<?php the_title(); ?>の写真2">
</div>
<div class="">
  <img src="<?php echo $wp_url; ?>/dist/images/main_mv_3.jpg" alt="<?php the_title(); ?>の写真3">
</div>
</div>
</div>
</section>

<div class="single__merchant_covid text-center bg-secondary py-3 mb-5">
<p class="m-0 text-primary">新型コロナウイルス対策業者</p>
</div>

<div class="single__merchant__info">
<div class="single__merchant__info-wrap">
<div class="single__merchant__info-txt w-100">
<p class="tag text-white bg-primary">当サイトおすすめ業者</p>
<h3><?php the_title(); ?></h3>
<div class="mb-3 row mx-0">
<div class="col-md">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/main_01.png" alt="<?php the_title(); ?>" srcset="<?php echo $wp_url; ?>/dist/images/main_01.png 1x, <?php echo $wp_url; ?>/dist/images/main_01@2x.png 2x">
</div>
<div class="col-md d-md-block d-none">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/main_02.png" alt="<?php the_title(); ?>" srcset="<?php echo $wp_url; ?>/dist/images/main_02.png 1x, <?php echo $wp_url; ?>/dist/images/main_02@2x.png 2x">
</div>
<div class="col-md d-md-block d-none">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/main_03.png" alt="<?php the_title(); ?>" srcset="<?php echo $wp_url; ?>/dist/images/main_03.png 1x, <?php echo $wp_url; ?>/dist/images/main_03@2x.png 2x">
</div>
</div>
<table>
<tbody>
<tr>
<th>対応エリア</th>
<td>日本全国(最短20分で駆けつけ)</td>
</tr>
<tr>
<th>対応種類</th>
<td>水漏れ・つまり・修理（トイレ、キッチン、お風呂、洗面所、排水管、排水口、給湯器、ポンプ、散水柱、散水栓など）</td>
</tr>
</tbody>
</table>
</div>
</div>
<p class="mt-3 mb-0">電話一本、最短20分で日本全国駆けつけてくれて即日修理！ サービスも幅広く、水回りのお悩みはどんなことも相談可能です。24時間365日対応してくれて、価格もかなり安いのが魅力。累計対応件数は100万件を超える実績ある業者です。</p>
<p class="mt-3 mb-0 font-weight-bold">料金　5,000円〜</p>
<div class="">
  <div class="star text-center">
    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-2">4.9</span><br>
    <a href="#menu2">口コミ 35件</a>
  </div>
</div>
</div>
<!-- single__merchant__info -->
<div class="mt-3 w-100">
<div class="merchant__inner__cta">
  <div class="d-block text-center p-0 mb-1">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign@2x.png 2x">
</div>
<a class="d-block text-center p-0 mb-2" href="tel:0120-275-023">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc@2x.png 2x">
</a>
<a class="d-block text-center p-0" href="<?php echo $home; ?>/form/" target="_blank">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_form_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_form_pc.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_form_pc@2x.png 2x">
</a>
</div>
</div>
<!-- merchant__inner__cta -->
<!-- <div class="single__merchant__menu">
<a href="#menu1">料金・サービス</a>
<a href="#menu2">口コミ</a>
<a href="#menu3">事例紹介</a>
<a href="#menu4">スタッフ</a>
<a href="#menu5">おすすめ情報</a>
</div> -->
<!-- single__merchant__menu -->

<div id="menu2" class="origin__inner mt-4">
<h3><span>口コミ</span></h3>
<div class="origin__inner__wrap">
<div class="origin__inner__wrap-item">
<div class="review">
<p><span class="font-weight-bold mr-3">口コミ評価</span>
<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
<span class="ml-2">4.9<small class="ml-1">(35件)</small></span>
</p>
<div class="review__wrap">
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">無理な勧誘がないから安心</p>
<p>トイレの水漏れの修理をお願いしました。
<br>修理と称して費用をぼったくる業者もありますが、水のトラブルサポートセンターのスタッフさんはどこを何のために修理するのか、原因も合わせて説明してくれました。
<br>無駄なものを売りつけられることもなく、費用も思ったより安かったので、また何かあったらお願いしたいです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">深夜にも関わらず駆けつけてくれた</p>
<p>深夜にいきなりトイレがつまり急ぎで修理を依頼しました。
<br>深夜にも関わらず20分ほどで来てくれて、すぐに修理してくださいました。
<br>どうなることやらと思いましたが、すぐ駆けつけてくれて、きちんと説明もして頂けたので満足です。ありがとうございました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">トイレがピカピカに！</p>
<p>トイレがつまったのですぐに来て頂きました。
<br>経年劣化でトイレのいろいろなところが傷んでいるので修理よりもトイレそのものを交換する方が良いと提案してくださったので、後日交換をしてもらいました。
<br>素人ではわからない最善の方法を提案していただけたので、新品のトイレで今後もトラブルなく過ごせそうです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">水回りは何でも任せられる</p>
<p>水道の水漏れを見てもらうついでに、庭の蛇口やトイレなど気になっていた部分も見てもらいました。
<br>経年劣化があったところは追加で修理を依頼したのですが、見積りの再発行や工事日程の相談など嫌な顔一つせず対応してくれました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">年末も対応してくれた</p>
<p>年末の忙しい時期にもすぐに来てくれました。<br>スピーディーに修理してくれて追加料金がなかったので助かりました。<br>また利用したいです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">スタッフさんの対応が良い</p>
<p>電話するとすぐにスタッフさんが来てくれました。
<br>清潔感のある方で家に入ってもらうのにも抵抗がありませんでした。
<br>トイレつまりの修理を依頼しましたが、水道やお風呂の点検も合わせてお願いできました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">原因不明の水漏れ</p>
<p>朝起きたら洗面所が水浸しになっていたので電話で相談しました。すぐに駆けつけてくれて原因をつきとめてくれました。迅速な対応ありがとうございました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">キャッシュレス対応</p>
<p>paypayで支払いができたのは助かった。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">深夜にも来てくれた</p>
<p>昼夜逆転の生活をしているので依頼できるか心配でしたが、遅い時間でも来てくれてすぐに修理してくれました。もうトイレの水漏れに悩まなくてすみます。ありがとうございました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">コロナ対策ばっちり</p>
<p>このご時世、家に人を呼ぶのは不安でしたが、スタッフさんはマスクを着用してくれて、消毒や除菌もばっちりでした。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">24時間対応が良い</p>
<p>夜勤などがあるため生活が不規則になる職種ですが、夜間も依頼できて水漏れをすぐに解消してもらえた。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">他と比べても一番良い</p>
<p>古い家なのでしょっちゅう水回りのトラブルが起こりますが、電話するとすぐに駆けつけてくれます。以前他の業者にも依頼しましたが、水のトラブルサポートセンターさんは速さや仕事の丁寧さが段違いです！もう他には依頼せず、水のトラブルサポートセンターさん一本でこれからも頼りにしています。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">依頼した場所以外も見てくれる</p>
<p>トイレの水が流れずタンクの修理を依頼したのですが、トイレ全体を確認してタンク以外の不良箇所を見つけてくれました。何度も来てもらう手間が省けて、トイレもきれいになったので助かります。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">スタッフさんの感じが良い</p>
<p>業者さんというと愛想が悪いイメージでしたが、丁寧で感じも良く、気持ちよく工事をお願いすることができました。次もまた何かあれば相談したいです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">対策方法を教えてもらえた</p>
<p>同じトラブルが起こらないようにどう対策するべきか丁寧に説明してもらえたので、安心でした！</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">作業がスムーズ</p>
<p>仕事の時間が迫っていることもあり少し急かしてしまいましたが、時間通りに工事を終えてくれて助かりました。ありがとうございました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">説明が丁寧</p>
<p>台所が水浸しでとにかく急いで電話しました。何もわからない状態でしたが、原因や工事の方法、再発を防ぐ方法まで丁寧に説明していただけました。また何かあればお願いしたいです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">高齢者にも優しい</p>
<p>家族の都合で高齢の祖母に工事の立ち会いをお願いしました。高齢者にもわかるように丁寧に説明してくださったようで、祖母も喜んでいました。信頼できる業者さんを見つけられたので、次もまたお願いしたいです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">感染対策◎</p>
<p>テレワークで家にこもっていたので、知らない人を家にあげたり対面でお話するのは不安でしたが、はじめにコロナ対策の説明をしてくださり、マスクや消毒なども徹底されていました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">とにかく親切！</p>
<p>アフターケアの方法を教えてもらえました。また水漏れが起こったほうが業者さんは儲かりそうなのに、、、誠実さを感じました！</p>
</div>
<!-- .review__inner -->



<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">このご時世にも家に来てくれた</p>
<p>こんな時代なので業者を呼ぶのはためらうし、呼んでも来てくれるのか不安でしたが、感染症対策はしっかり行った状態で修理にきてくれました。<br>家に上がることにかなり配慮してくださって、修理もスムーズで本当に助かりました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">トイレがすぐに直った</p>
<p>家に帰るとトイレの水が流れなくなっていて緊急で修理をお願いしました。<br>仕事をしているので休みの日に合わせて修理をしてもらえたので最短でトイレが直りました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">現金以外で支払いできるのは嬉しい</p>
<p>キャッシュレスの生活をしているので、カード支払いができる業者は助かる</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">WEB割引がお得だった</p>
<p>3,000円も割引をしてもらえたのでかなりお得だった</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">明朝にも対応してもらえた</p>
<p>夜勤明けにトイレの水漏れに気づいてすぐに電話をしました。24時間対応してくれたので私のような昼夜逆転の生活でもお願いできてよかったです。割増料金などもなかったので安心しました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">メールだけで見積りをできた</p>
<p>どうしても電話をするのが苦手だったけどメールだけで相談と見積り依頼ができたので良かった。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">田舎にも来てくれた</p>
<p>あまり人もおらず建物も少ない田舎なので、来てもらうまでには時間がかかると思っていましたが、希望日に最短できてくれました。面倒な作業も嫌な顔ひとつせずに対応してもらいました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">説明が丁寧だった</p>
<p>何が原因でどこをどのように修理して、仕上がりはどのようになるのかをすごく丁寧に説明してくれました。<br>作業もスムーズで、ついでに他の箇所の養生もしてくれました。<br>家の中にいくつか気になる水のトラブルがあるので、またお願いしようかな。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">口コミ通りの対応</p>
<p>作業員さんの対応が良いとの口コミを見て見積りをとりました。<br>電話で相談にのってくれた人も、家に修理にきてくれた人も評判通りの丁寧さでした。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">困ったらプロに任せるのが◎</p>
<p>キッチンのシンクが詰まってしまい、自分でどうにか解決できないかと薬局で修理キットや薬剤を買ってあの手この手を試しましたが無理でした。<br>どうにもならず相談しましたが、さすがプロ。すぐに解決してくれました。<br>こんなことならすぐにプロに相談しておけばよかったです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">気づいていない問題も見つけてくれた</p>
<p>異物が詰まってトイレの水が流れないと思っていましたが、そもそも水を流す力が弱くなっていたり、劣化している部分があることを見つけてくれました。<br>今後のことも考えながら一番コスパが良く時間もかかりにくい修理方法を提案してもらえました。<br>お願いして良かったです。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">評判通りの良い業者</p>
<p>口コミ通り仕事も早くて対応も丁寧だった。予算よりも少し金額は高かったど工事内容も良かったので結果的に大満足です。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">学生にも優しい</p>
<p>初めての一人暮らしで初めて一人で解決しなければいけないトイレのつまりだったので焦ってしまいましたが、丁寧に相談にのってくれて、価格面も親切に対応してくれました。修理の方法も丁寧に教えてくれたので、安心してお願いできました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">5.0</span></p>
<p class="font-weight-bold mb-2">高齢者夫婦です</p>
<p>70代の老夫婦で生活していて、古い家なのであちこちが傷んできていました。特に水道のつまりが深刻で相談させていただきました。電話で相談すると親切にご対応いただき、見積りについてわかりやすく解説してくださいました。息子夫婦に詐欺には気をつけるように言われていたので少し警戒していましたが、水のトラブルサポートセンターさんはかなり安心してお願いできました。工事当日はとても丁寧に説明をしながら進めてくれました。足が悪いので家の中での移動は最小限になるように配慮してくださり、心配な箇所も見ていただきました。修理してもらったところ以外もいくつか問題がありそうなので、また改めて依頼をしようと思います。このたびはありがとうございました。</p>
</div>
<!-- .review__inner -->
<div class="review__inner">
<p class="small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="ml-1">4.0</span></p>
<p class="font-weight-bold mb-2">思ったより安かった！</p>
<p>修理費用はもっとかかると思っていましたが、WEB割引も使えたのでお得でした。
</p>
</div>
<!-- .review__inner -->
</div>
</div>
</div>
</div>
</div>
<!-- #menu2 -->

<div id="menu1" class="origin__inner">
<h3><span>料金・サービス</span></h3>
<div class="origin__inner__wrap">
<div class="origin__inner__wrap-item">
<h4>基本サービス</h4>
<p>
<span class="d-inline-block border py-1 px-2 mr-2 mb-1 font-weight-bold">トイレのつまり修理</span>
<span class="d-inline-block border py-1 px-2 mr-2 mb-1 font-weight-bold">キッチンのつまり修理</span>
<span class="d-inline-block border py-1 px-2 mr-2 mb-1 font-weight-bold">お風呂のつまり修理</span>
<span class="d-inline-block border py-1 px-2 mr-2 mb-1 font-weight-bold">洗面所のつまり修理</span>
<span class="d-inline-block border py-1 px-2 mr-2 mb-1 font-weight-bold">排水管・排水口のつまり修理</span>
<span class="d-inline-block border py-1 px-2 mr-2 mb-1 font-weight-bold">給湯器修理</span>
<span class="d-inline-block border py-1 px-2 mr-2 mb-1 font-weight-bold">ポンプ、散水栓などの修理</span>
<span class="d-inline-block border py-1 px-2 mr-2 mb-1 font-weight-bold">設備工事全般</span>
<span class="d-inline-block border py-1 px-2 mr-2 mb-1 font-weight-bold">通菅工事全般</span>
<span class="d-inline-block border py-1 px-2 mr-2 mb-1 font-weight-bold">水回りのリフォーム</span>
</p>
</div>
<div class="origin__inner__wrap-item">
<h4>特長</h4>
<canvas id="chart" class="mb-3"></canvas>
<div class="merchant__inner__point">
<table>
<tbody>
<tr>
<th><span>POINT1</span>24時間365日対応</th>
<td class="small">電話一本で日本全国すぐにスタッフが駆けつけてくれます。今スグに修理したい突発的な水回りのトラブルも依頼しやすいですよ。</td>
</tr>
<tr>
<th><span>POINT2</span>WEBからの依頼で最大3000円OFF</th>
<td class="small">基本料金5000円（税抜）＋作業料金＋部品代で修理可能。WEBから申し込むと最大3000円の割引があるので、費用を抑えることができます。</td>
</tr>
<tr>
<th><span>POINT3</span>見積もり・出張費・深夜割増はすべて０円</th>
<td class="small">見積もりをとるだけで、調査をしてもらうだけで費用がかかったらという心配は無用です。いくらぐらいで修理できるのか、どのくらい時間がかかるのかなども気軽に相談できます。</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="origin__inner__wrap-item">
<h4>料金</h4>
<p class=" font-weight-bold">基本料金 5,000円(税抜)＋作業料金＋部品代</p>
<p class="small mb-0">※トラブル内容により作業料金は変動します。まずはお見積りさせて頂きます。
<br>※部品の交換が発生する場合、もしくは新たに部品が必要になった場合に発生する料金です。</p>
</div>
<div class="origin__inner__wrap-item">
<h4>対応エリア</h4>
<p>日本全国、出張費0円でお伺いします。
<br><span class="small">（※一部エリアを除く）</span></p>
</div>
</div>
</div>
<!-- #menu1 -->

<div class="mt-3 w-100">
<div class="merchant__inner__cta">
  <div class="d-block text-center p-0 mb-1">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign@2x.png 2x">
</div>
<a class="d-block text-center p-0 mb-2" href="tel:0120-275-023">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc@2x.png 2x">
</a>
<a class="d-block text-center p-0" href="<?php echo $home; ?>/form/" target="_blank">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_form_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_form_pc.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_form_pc@2x.png 2x">
</a>
</div>
</div>

<div id="menu3" class="case origin__inner mt-4">
<h3><span>事例紹介</span></h3>
<div class="origin__inner__wrap">

<div class="origin__inner__wrap-item">
<h4>三重県四日市市のトイレ交換</h4>
<p class="small">経年劣化によりタンク内で水漏れが発生し、修理も可能ですが使用年数を考えて、交換をご提案させていただきました。お見積りにもご納得いただけたので、新しいトイレを手配し後日、作業させて頂きました。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_01_01.png" alt="施工前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_01_02.png" alt="施工後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<tr>
<th class="bg-light font-weight-normal">トラブルの症状</th>
<td class="font-weight-bold">水漏れ</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">トラブルの原因</th>
<td class="font-weight-bold">経年劣化</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">作業時間</th>
<td class="font-weight-bold">2時間</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
<div class="origin__inner__wrap-item">
<h4>宮崎県日向市のトイレ交換</h4>
<p class="small">トイレの排管に詰まりがあったため、便器を脱着し詰まりを解消しました。<br>長らくお使いのトイレだったので交換をご提案したところご依頼頂きましたので、すぐに作業させて頂きました。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_02_01.png" alt="施工前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_02_02.png" alt="施工後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<tr>
<th class="bg-light font-weight-normal">トラブルの症状</th>
<td class="font-weight-bold">トイレつまり</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">トラブルの原因</th>
<td class="font-weight-bold">経年劣化</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">作業時間</th>
<td class="font-weight-bold">3時間</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
<div class="origin__inner__wrap-item">
<h4>東京都世田谷区のトイレ交換</h4>
<p class="small">トイレが詰まる一因として配管の位置があったため、床から壁に変えて快適に使えるようにしました。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_03_01.png" alt="施工前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_03_02.png" alt="施工後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<tr>
<th class="bg-light font-weight-normal">トラブルの症状</th>
<td class="font-weight-bold">トイレつまり</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">トラブルの原因</th>
<td class="font-weight-bold">排水管</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">工期</th>
<td class="font-weight-bold">5時間</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
<div class="origin__inner__wrap-item">
<h4>愛知県豊明市のトイレリフォーム</h4>
<p class="small">異物が詰まっていたため、先ずは便器を外して異物を除去したところ、タンクのの水漏れも発生していました。使用年数も経っていたので、新しい便器への交換をご提案しご要望を頂き作業させて頂きました。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_04_01.png" alt="施工前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_04_02.png" alt="施工後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<tr>
<th class="bg-light font-weight-normal">トラブルの症状</th>
<td class="font-weight-bold">トイレつまり、タンク水漏れ</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">トラブルの原因</th>
<td class="font-weight-bold">経年劣化</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">工期</th>
<td class="font-weight-bold">3時間</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
<div class="origin__inner__wrap-item">
<h4>千葉県佐倉市のトイレとウォシュレット交換</h4>
<p class="small">トイレの内部部品が故障しており、長らくお使いだったので、新しいトイレへの交換を提案しました。
<br>すぐに交換してほしいとご要望を頂き作業させて頂きました。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_05_01.png" alt="施工前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_05_02.png" alt="施工後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<tr>
<th class="bg-light font-weight-normal">トラブルの症状</th>
<td class="font-weight-bold">水漏れ</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">トラブルの原因</th>
<td class="font-weight-bold">経年劣化</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">作業時間</th>
<td class="font-weight-bold">3時間</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
<div class="origin__inner__wrap-item">
<h4>愛知県名古屋市の和式トイレを洋式トイレに交換</h4>
<p class="small">不便なので和式トイレから洋式トイレに変更したいとご依頼を頂きお伺いしました。
<br>トイレの床・壁がタイルになっているので、それも変えてほしいとご要望を頂きお見積もりをお渡ししました。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_06_01.png" alt="施工前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_06_02.png" alt="施工後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<tr>
<th class="bg-light font-weight-normal">トラブルの症状</th>
<td class="font-weight-bold">不便</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">作業時間</th>
<td class="font-weight-bold">3日</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
<div class="origin__inner__wrap-item">
<h4>福岡県福岡市の便器脱着・排水溝洗浄</h4>
<p class="small">詰まり箇所が不明の為、脱着のお見積りをお渡ししました。
<br>外した際に、排水溝の清掃も出来るので、併せてご説明しました。</p>
<div class="origin__inner__wrap__case row">
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工前</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_07_01.png" alt="施工前"></div>
</div>
<div class="origin__inner__wrap__case-item col-md-4">
<p>施工後</p>
<div><img src="<?php echo $wp_url; ?>/dist/images/flow_07_02.png" alt="施工後"></div>
</div>
</div>
<!-- .origin__inner__wrap__case -->
<table class="table table-sm mb-0">
<tr>
<th class="bg-light font-weight-normal">トラブルの症状</th>
<td class="font-weight-bold">詰まり</td>
</tr>
<tr>
<th class="bg-light font-weight-normal">作業時間</th>
<td class="font-weight-bold">2時間</td>
</tr>
</table>
</div>
<!-- .origin__inner__wrap-item -->
</div>
</div>
<!-- #menu3 -->

<div class="flow origin__inner w-100">
  <h3><span>ご利用の流れ</span></h3>
  <div class="origin__inner__wrap">
    <div class="origin__inner__wrap-item">
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>1</div>
        <div class="step-text font-weight-bold">ご相談・お問い合わせ</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>2</div>
        <div class="step-text font-weight-bold">訪問日時の確認</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>3</div>
        <div class="step-text font-weight-bold">現場調査</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>4</div>
        <div class="step-text font-weight-bold">お見積り</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>5</div>
        <div class="step-text font-weight-bold">作業開始</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>6</div>
        <div class="step-text font-weight-bold">作業完了報告・お支払い</div>
      </div>
      <div class="step border-bottom">
        <div class="step-num bg-primary text-white text-center font-weight-bold py-2 border-white border-bottom">step<br>7</div>
        <div class="step-text font-weight-bold">お客様アンケート</div>
      </div>
    </div>
  </div>
</div>
<!-- 流れ -->

<div class="flow origin__inner">
  <h3><span>よくあるご質問</span></h3>
  <div class="origin__inner__wrap">
    <div class="origin__inner__wrap-item">
      <table class="table mb-0">
      <tr>
      <th class="w-100 bg-secondary font-weight-normal"><span class="text-primary mr-2">Q</span> 見積もり依頼に費用はかかるのでしょうか？</th>
      </tr>
      <tr>
      <td class="w-100"><span class="text-primary mr-2">A</span>いいえ、お見積りは無料です。</td>
      </tr>
      <tr>
      <th class="w-100 bg-secondary font-weight-normal"><span class="text-primary mr-2">Q</span> 出張や現場調査に費用は発生しますか？</th>
      </tr>
      <tr>
      <td class="w-100"><span class="text-primary mr-2">A</span>出張費、現場調査費、お見積りは無料です。<br>30分以上の点検については別途料金がかかることがございますので事前にお伝えいたします。</td>
      </tr>
      <tr>
      <th class="w-100 bg-secondary font-weight-normal"><span class="text-primary mr-2">Q</span> 代金の支払い方法は？</th>
      </tr>
      <tr>
      <td class="w-100"><span class="text-primary mr-2">A</span>当日作業終了時に、現金もしくはカードにてお支払いいただけます。<br>後日銀行振込みをして頂くことも可能です。<br>詳しくは【お支払い方法】をご確認ください。</td>
      </tr>
      <tr>
      <th class="w-100 bg-secondary font-weight-normal"><span class="text-primary mr-2">Q</span> 詰まり、水漏れの原因が分からないけど対応してくれますか？</th>
      </tr>
      <tr>
      <td class="w-100"><span class="text-primary mr-2">A</span>はい、お伺いさせていいただき、現場調査してお見積りをご提出いたします。<br>お見積りは無料となります。30分以上かかる場合は事前にご説明させていただきます。</td>
      </tr>
      <tr>
      <th class="w-100 bg-secondary font-weight-normal"><span class="text-primary mr-2">Q</span> 今すぐ来てほしいのですが、可能ですか？</th>
      </tr>
      <tr>
      <td class="w-100"><span class="text-primary mr-2">A</span>現場スタッフの空き状況を確認し、ご連絡いたします。<br>空き状況によっては、行ける場合と行けない場合がございますので、予めご了承ください。</td>
      </tr>
      </table>
    </div>
  </div>
</div>
<!-- よくあるご質問 -->

<div id="menu4" class="origin__inner">
<h3><span>スタッフ</span></h3>
<div class="origin__inner__wrap">
<div class="origin__inner__wrap-item">

<div class="staff">
<div class="staff__inner">
<div class="staff__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/staff_1.png" alt="スタッフ" srcset="<?php echo $wp_url; ?>/dist/images/staff_1.png 1x, <?php echo $wp_url; ?>/dist/images/staff_1@2x.png 2x">
</div>
<div class="staff__inner-info">
<p class="mb-1"><span class="small text-warning">対応エリア：東京</span><span class="ml-2 font-weight-bold">佐藤</span></p>
<p class="small mb-0">トイレやキッチンなどお家で起こる水漏れ・つまりはなんでもお気軽にご相談ください。</p>
</div>
</div>
<!-- .staff__inner -->
<div class="staff__inner">
<div class="staff__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/staff_2.png" alt="スタッフ" srcset="<?php echo $wp_url; ?>/dist/images/staff_2.png 1x, <?php echo $wp_url; ?>/dist/images/staff_2@2x.png 2x">
</div>
<div class="staff__inner-info">
<p class="mb-1"><span class="small text-warning">対応エリア：大阪</span><span class="ml-2 font-weight-bold">植月</span></p>
<p class="small mb-0">急な水回りのトラブルにもすぐ駆けつけます。</p>
</div>
</div>
<!-- .staff__inner -->
<div class="staff__inner">
<div class="staff__inner-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/staff_3.png" alt="スタッフ" srcset="<?php echo $wp_url; ?>/dist/images/staff_3.png 1x, <?php echo $wp_url; ?>/dist/images/staff_3@2x.png 2x">
</div>
<div class="staff__inner-info">
<p class="mb-1"><span class="small text-warning">対応エリア：神奈川</span><span class="ml-2 font-weight-bold">村瀬</span></p>
<p class="small mb-0">24時間365日対応します！お気軽にご相談ください。</p>
</div>
</div>
<!-- .staff__inner -->
</div>

</div>
</div>
</div>
<!-- #menu4 -->

<div id="" class="origin__inner">
<h3><span>会社情報</span></h3>
<div class="origin__inner__wrap">
<div class="origin__inner__wrap-item">
<table class="table mb-0">
<tr>
<th class="font-weight-normal small">社名</th>
<td>株式会社シンエイ</td>
</tr>
<tr>
<th class="font-weight-normal small">店舗責任者</th>
<td>木原 朗広</td>
</tr>
<tr>
<th class="font-weight-normal small">所在地</th>
<td>〒540-0012
<br>大阪市中央区谷町2-4-3 アイエスビル9F</td>
</tr>
<tr>
<th class="font-weight-normal small">設立</th>
<td>平成23年3月15日</td>
</tr>
</table>
</div>
</div>
</div>

<div id="menu5" class="origin__inner">
<h3><span>その他</span></h3>
<div class="origin__inner__wrap">
<div class="origin__inner__wrap-item">
<p class="mb-0 font-weight-bold">新型コロナウイルス対策について</p>
<p class="mb-3">現在、新型コロナウイルス対策として「マスク着用」「除菌消毒」「検温チェック」を実施しております。</p>
<p class="mb-0 font-weight-bold">WEB限定割引実施中！</p>
<p class="mb-0">LINEへの会員登録と画面提示で3,000円割引
<br>「ホームページを見た」と電話で伝えると2,000円割引
<br>修理費用が安い水のトラブルサポートセンターをよりお得に利用できます！</p>
</div>
</div>
</div>
<!-- #menu5 -->

<div class="mt-3 w-100">
<div class="merchant__inner__cta">
  <div class="d-block text-center p-0 mb-1">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_tel_campaign@2x.png 2x">
</div>
<a class="d-block text-center p-0 mb-2" href="tel:0120-275-023">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_tel_pc@2x.png 2x">
</a>
<a class="d-block text-center p-0" href="<?php echo $home; ?>/form/" target="_blank">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/btn_cta_form_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_cta_form_pc.png 1x, <?php echo $wp_url; ?>/dist/images/btn_cta_form_pc@2x.png 2x">
</a>
</div>
</div>

<div class="d-block text-center my-5 w-100">
  <a class="border-primary border-bottom" href="<?php echo $home; ?>">業者一覧に戻る</a>
</div>

<!-- single -->
</div>
<div class="side">
<?php get_sidebar(); ?>
</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
<script>
let ctx = document.getElementById("chart");
let times = 0;
if (window.innerWidth > 768) {
  times = 0.1;
} else {
  times = 0.05;
}
ctx.width = window.innerWidth * 0.1;
ctx.height = window.innerHeight * times;
let radar_chart = new Chart(ctx, {
  type: "radar",
  data: {
    labels: [
      "料金",
      "実績",
      "対応",
      "不用品処分",
      "安全への配慮",
    ],
    datasets: [{
      label: "評価",
      data: [
        95,
        99,
        100,
        100,
        98
      ],
      borderWidth: 1,
      borderColor: 'rgb(7, 48, 123)',
      pointBackgroundColor: 'rgb(7, 48, 123)',
      backgroundColor: 'rgba(7, 48, 123, 0.6)'
    }],
  },
  options: {
      title: {
        display: false,
      },
      legend: {
        display: false
      },
      scale: {
        ticks: {
          beginAtZero: true,
          precision: 5,
          min: 50,
          max: 100,
          stepSize: 10,
        }
      }
    }
});
</script>

<?php get_footer();
