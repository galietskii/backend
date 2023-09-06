<?php
if (function_exists('acf_register_block_type')) {
    acf_register_block_type(array(
        'name' => 'hero-section',
        'title' => __('Hero Section'),
        'render_template' => '/inc/blocks/hero-section.php', // Путь к файлу шаблона блока
        'category' => 'common', // Категория блока
        'icon' => 'shield', // Иконка блока
        'keywords' => array('acf', 'custom', 'block'),
    ));
}