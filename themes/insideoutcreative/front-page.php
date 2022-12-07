<?php get_header();

// start of header
echo '<section class="position-relative">';
echo '<div class="container-fluid">';
echo '<div class="row">';
echo '<div class="col-md-5 p-0 text-center pt-5 pb-5">';

echo '<div class="d-flex h-100 align-items-center justify-content-center">';
echo '<div>';
$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto logo','style'=>'max-width:450px;']);
}

echo '<div class="p-lg-5 pt-5 pb-5">';


echo '<div class="pl-lg-5 pr-lg-5 pl-md-3 pr-md-3">';
echo '<h1 class="pt-3 pb-3 mb-0 text-accent-secondary" style="font-size:220px;line-height:0.5;">' . get_the_title() . '</h1>';

if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;
endif;

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';

echo '<div class="col-md-7 p-0">';
the_post_thumbnail('full',array('class'=>'w-100 h-100 d-md-block d-none img-featured','style'=>'top:0;left:0;'));
the_post_thumbnail('full',array('class'=>'w-100 h-auto position-relative d-md-none d-block','style'=>''));
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
// end of header

// start of intro
if(have_rows('icons','options')):
echo '<section class="pt-2 pb-2 position-relative box-shadow z-1">';
echo '<div class="container">';
echo '<div class="row align-items-center">';
// echo '<div class="col-12">';

    // echo '<div class="col-md-7">';
    // echo '<div class="row">';
    while(have_rows('icons','options')): the_row();
    $svg = get_sub_field('svg');
        $link = get_sub_field('link');
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
    echo '<div class="col-lg-3 col-6 col-icons mb-lg-0 mt-lg-0 mt-2 mb-2">';
    
    if($link_url == '#'){
        echo '<div class="d-flex align-items-center">';
        echo '<div class="mr-3" style="height:20px;width:20px;">';
        echo $svg;
        echo '</div>';
        echo '<span>' . $link_title . '</span>';
        echo '</div>';
    } else {
        echo '<a href="' . $link_url . '" target="' . $link_target . '" class="d-flex align-items-center">';
        echo '<div class="mr-3" style="height:20px;width:20px;">';
        echo $svg;
        echo '</div>';
        echo '<span class="small text-black">' . $link_title . '</span>';
        echo '</a>';
    }
    
    echo '</div>';
    endwhile; 
    // echo '</div>';
    // echo '</div>';
    
    // echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
endif;
// end of intro

// start of quote
echo '<section class="position-relative bg-light" style="padding-top:100px;padding-bottom:100px;">';
echo '<div class="container">';
echo '<div class="row justify-content-center align-items-center">';

echo '<div class="col-lg-8 text-center">';

echo '<p class="bold h3">';
echo '“Great things are not done by impulse,
but by a series of small things brought together over time.”';
echo '</p>';
echo '<span class="font-italic pt-4">- Vincent Van Gogh</span>';

echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
// end of quote

// start of gallery
echo '<section class="position-relative" style="padding-top:100px;padding-bottom:100px;">';
echo '<div class="container">';
echo '<div class="row justify-content-center align-items-center">';

echo '<div class="col-12 text-center">';
echo do_shortcode('[divider class="w-100"]');
echo '</div>';

echo '<div class="col-lg-3 col-6 text-center">';
echo wp_get_attachment_image(73,'full','',['class'=>'w-100 p-4','style'=>'height:250px;object-fit:contain;']);
echo '</div>';
echo '<div class="col-lg-3 col-6 text-center">';
echo wp_get_attachment_image(72,'full','',['class'=>'w-100 p-4','style'=>'height:250px;object-fit:contain;']);
echo '</div>';
echo '<div class="col-lg-3 col-6 text-center">';
echo wp_get_attachment_image(75,'full','',['class'=>'w-100 p-4','style'=>'height:250px;object-fit:contain;']);
echo '</div>';
echo '<div class="col-lg-3 col-6 text-center">';
echo wp_get_attachment_image(74,'full','',['class'=>'w-100 p-4','style'=>'height:250px;object-fit:contain;']);
echo '</div>';

echo '<div class="col-12 text-center">';
echo do_shortcode('[divider class="w-100"]');
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
// end of gallery

// start of contact
echo '<section class="pt-5 pb-5 position-relative" style="background:#ebebeb;" id="contact-form">';
echo '<div class="position-absolute" style="top:0px;left:0;" id="contact"></div>';
echo '<div class="container">';
echo '<div class="row justify-content-start align-items-start">';

// echo '<div class="col-12 pb-4">';
// echo wp_get_attachment_image(76,'full','',['class'=>'h-auto w-auto','style'=>'max-width:300px;']);
// echo '</div>';

echo '<div class="col-md-6">';
echo wp_get_attachment_image(76,'full','',['class'=>'h-auto w-auto','style'=>'max-width:300px;']);
echo '<div class="pt-5"></div>';
echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');
// echo get_sub_field('content');
echo '</div>';

echo '<div class="col-md-6">';

if($logo){
    echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto logo pt-5','style'=>'']);
    }

echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
// end of contact

// // how to use new image hover effect
// echo '<div class="col-6 col-intro-gallery col mb-1 p-1 overflow-h">';
// echo '<div class="position-relative img-hover w-100">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'object-fit:cover;']);
// echo '</a>';
// echo '</div>';
// echo '</div>';

// // popup trigger
// echo '<span class="btn bg-white text-accent apply-now open-modal" id="apply-now" style="">Apply Now</span>';

// // popup content
// echo '<div class="modal-content apply-now position-fixed w-100 h-100 z-3">';
// echo '<div class="bg-overlay"></div>';
// echo '<div class="bg-content">';
// echo '<div class="bg-content-inner">';
// echo '<div class="close" id="">X</div>';
// echo '<div>';
// echo get_field('popup_content');
// echo '</div>';
// echo '</div>';

// echo '</div>';
// echo '</div>';

get_footer(); ?>