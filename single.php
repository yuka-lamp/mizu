<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri().'/dist/';
get_header(); ?>
<div class="towcolumn sec">
<div class="container">
<div class="main">
<div class="blog-main">
<?php if (have_posts()): while (have_posts()):
the_post();
$id = get_the_ID();
$t = get_the_title();
$p = get_the_permalink();
$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
?>
<article>
<figure class="d-block mb-4 p-0">
<img class="w-100" src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
</figure>
<h2 class="font-weight-bold h3 mb-3"><?php echo $t; ?></h2>
<time class="d-block small text-right" data-time="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
<div class="link-ranking">
<p>＼　<span>水のトラブル</span>の相談なら　／</p>
<h2>トイレつまり修理業者<br>比較サイト</h2>
<a class="btn btn-warning" href="<?php echo $home; ?>/mizusupport/">おすすめの修理業者を今すぐ確認！</a>
</div>
<div class="blog-main__inner">
<?php the_content(); ?>
<div id="postBody">
<?php if (get_field('contents_repeat')): ?>
<?php while (the_repeater_field('contents_repeat')): ?>
<div class="<?php if (get_sub_field('middle_image_type') == null): ?>clmNoImg<?php else: ?><?php the_sub_field('middle_image_type'); ?><?php endif; ?>">
<?php if (get_sub_field('middle_title')): ?>
<h2 class="clmTitle"><?php the_sub_field('middle_title'); ?></h2>
<?php endif; ?>
<!--画像の表示-->
<?php $imgSelect = get_sub_field('middle_image_select'); ?>
<?php if ($imgSelect == 'img' || empty($imgSelect)) : ?>
<?php if (get_sub_field('middle_image')): ?>
<?php $subImg = get_sub_field('middle_image'); ?>
<img src="<?php echo $subImg['url']; ?>" alt="<?php echo $subImg['alt']; ?>"/>
<?php endif; ?>
<?php elseif ($imgSelect == 'url') : ?>
<img src="<?php echo get_sub_field('middle_image_url'); ?>" alt=""/>
<?php endif; ?>
<?php the_sub_field('middle_contents'); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
</article>
<?php endwhile; endif; ?>
</div>
<div class="link-ranking">
<p>＼　<span>水のトラブル</span>の相談なら　／</p>
<h2>トイレつまり修理業者<br>比較サイト</h2>
<a class="btn btn-warning" href="<?php echo $home; ?>/mizusupport/">おすすめの修理業者を今すぐ確認！</a>
</div>
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
