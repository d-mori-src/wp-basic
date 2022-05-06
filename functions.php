<?php

add_theme_support('post-thumbnails');

function add_prev_posts_link_class() {
    return 'class="prevLink"';
}
add_filter( 'previous_posts_link_attributes', 'add_prev_posts_link_class' );

function add_next_posts_link_class() {
    return 'class="nextLink"';
}
add_filter( 'next_posts_link_attributes', 'add_next_posts_link_class' );

// function create_post_type_1() {
//     register_post_type( 'news', // 投稿タイプ名の定義
//         array(
//             'labels' => array(
//             'name' => __( '新着情報' ), // 表示する投稿タイプ名
//             'singular_name' => __( '新着情報' )
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'menu_position' => 5,
//             'show_in_rest'  => true,

//             // GlaphQL用設定
//             'show_in_graphql' => true,
//             'graphql_single_name' => 'newsItem',
//             'graphql_plural_name' => 'news'
//         )
//     );
// }
// add_action('init', 'create_post_type_1');

/* 投稿アーカイブページの作成 */
// function post_has_archive( $args, $post_type ) {
//     if ( 'news' == $post_type ) {
//         $args['rewrite'] = true;
//         $args['has_archive'] = 'news'; //任意のスラッグ名
//     }
//     return $args;
// }
// add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// function add_article_post_rewrite_rules( $post_rewrite ) {
//     $return_rule = array();
//     foreach ( $post_rewrite as $regex => $rewrite ) {
//         $return_rule['article/' . $regex] = $rewrite;
//     }
//     return $return_rule;
// }
// add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );