<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri().'/dist/';
get_header(); ?>
<section class="mv">
<img class="w-100 border-0 img-switch" src="<?php echo $wp_url; ?>/images/mv_pc.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $wp_url; ?>/images/mv_pc.png 1x, <?php echo $wp_url; ?>/images/mv_pc@2x.png 2x">
</section>
<!-- mv -->

<div class="towcolumn sec">
<div class="container">
<div class="main">
<section class="read">
<div class="read__wrap">
<div class="read__wrap__inner">
<h2 class="read__wrap__inner-ttl"><img src="<?php echo $wp_url; ?>/images/about_ttl_pc.png" alt="業者比較" srcset="<?php echo $wp_url; ?>/images/about_ttl_pc.png 1x, <?php echo $wp_url; ?>/images/about_ttl_pc@2x.png 2x"></h2>
<div class="read__wrap__inner-star"><img src="<?php echo $wp_url; ?>/images/about_star.png" alt="星" srcset="<?php echo $wp_url; ?>/images/about_star.png 1x, <?php echo $wp_url; ?>/images/about_star@2x.png 2x"></div>
<h3 class="read__wrap__inner-h3">大阪でトイレつまりの修理を頼むならどこ？</h3>
<p class="read__wrap__inner-p">大阪を中心とした関西エリアでトイレつまりなどの水回りのトラブルの解消を行う業者は数え切れない程たくさんありますが、一体どこにお願いするべきなのでしょうか？
<br>料金が安くて素早く駆けつけてくれる信頼できる業者を探しましょう！
<br>特にトイレつまりのような緊急で修理したいトラブルの場合は、見積りや調査が無料で、24時間いつでも相談ができる業者がおすすめです。
<br>急ぎの場合はメールではなく電話で相談してみましょう。</p>
</div>
</div>
</section>

<?php get_template_part('templates/merchant'); ?>

</div>
<!-- main -->
<div class="side">
<?php get_sidebar(); ?>
</div>
<!-- side -->
</div>
<!-- container -->
</div>
<!-- towcolumn -->
<?php get_footer();
