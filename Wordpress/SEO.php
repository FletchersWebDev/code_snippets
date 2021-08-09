<head>
	
    <?php wp_head(); ?>
	<title><?php if (!empty(get_field('seo_page_title'))){ the_field('seo_title'); } ?></title>
    <meta name="description" content=" <?php if (!empty(get_field('seo_description'))){ the_field('seo_description'); } ?> "/>
    <meta name="keyword" content=" <?php if (!empty(get_field('seo_keyword'))){ the_field('seo_keyword'); } ?> "/>
    <meta property="og:title" content="<?php if (!empty(get_field('social_title'))){ the_field('social_title'); } ?> "/>
    <meta property="og:description" content="<?php if (!empty(get_field('social_description'))){ the_field('social_description'); } ?> "/>
    <meta property="og:image" content=" <?php if (!empty(get_field('social_image'))){ ?> <img src='<?php the_field('social_image'); } ?>' alt='<?php the_field('social_description');?>'/>"/>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
</head>