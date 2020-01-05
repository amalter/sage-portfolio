<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    //Loop portfolio CPT
    public function portfolioLoop()
    {
        $portfolio_topics = get_posts([
        'post_type' => 'portfolio_topic',
        'posts_per_page'=>'3',
        'order' => 'ASC',
        ]);
        
        return array_map(function ($post) {
            return [
            'content' => apply_filters('the_content', $post->post_content),
            'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
            'thumbnail_url' => get_the_post_thumbnail_url($post->ID, 'large'),
            'title' => $post->post_title,
            ];
        }, $portfolio_topics);
    }
}
