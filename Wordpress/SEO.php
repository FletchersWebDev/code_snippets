<?php
//Make the custom fields required and set to global pages and posts.
?>
<title><?php the_field('seo_page_title');?></title>
<meta name="description" content="<?php the_field('seo_page_description');?>">
<meta name="keywords" content="<?php the_field('seo_page_keywords');?>">
<meta property="og:title" content="<?php the_field('seo_social_title');?>">
<meta property="og:description" content="<?php the_field('seo_social_description');?>">
<meta property="og:image" content="<?php the_field('seo_social_image');?>">
<meta property="og:url" content="<?php the_field('seo_page_url');?>"> 