<?php
/*
*<title>タグを出力する
*/
add_theme_support('title-tag');
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');
register_post_type('item', [
    'labels' => [
        'name' => '商品',
        'singular_name' => '商品',
        'add_new' => '商品を追加',
        'add_new_item' => '商品を追加',
        'edit_item' => '商品を編集',
        'new_item' => '新しい商品',
        'all_items' => 'すべての商品',
        'view_item' => '商品をみる',
        'search_items' => '商品を探す',
        'not_found' => '商品は見つかりませんでした',
        'not_found_in_trash' => 'ゴミ箱は空です',
        'parent_item_colon' => '',
        'menu_name' => '商品'
    ],
    'public' => true,
    'has_archive' => true,
    'hierarchical' => true,
    'supports' => [
        'title',
        'editor',
        'page-attributes',
        'thumbnail'
    ],
    'menu_position' => 1,
    'menu_icon' => 'dashicons-cart'
]);

?>
