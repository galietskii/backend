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
    acf_register_block_type(array(
        'name' => 'services-section',
        'title' => __('Services Section'),
        'render_template' => '/inc/blocks/services-section.php', // Путь к файлу шаблона блока
        'category' => 'common', // Категория блока
        'icon' => 'shield', // Иконка блока
        'keywords' => array('acf', 'custom', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'reasons-section',
        'title' => __('Reasons Section'),
        'render_template' => '/inc/blocks/reasons-section.php', // Путь к файлу шаблона блока
        'category' => 'common', // Категория блока
        'icon' => 'shield', // Иконка блока
        'keywords' => array('acf', 'custom', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'steps-section',
        'title' => __('Steps Section'),
        'render_template' => '/inc/blocks/steps-section.php', // Путь к файлу шаблона блока
        'category' => 'common', // Категория блока
        'icon' => 'shield', // Иконка блока
        'keywords' => array('acf', 'custom', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'reviews-section',
        'title' => __('Reviews Section'),
        'render_template' => '/inc/blocks/reviews-section.php', // Путь к файлу шаблона блока
        'category' => 'common', // Категория блока
        'icon' => 'shield', // Иконка блока
        'keywords' => array('acf', 'custom', 'block'),
    ));
    acf_register_block_type(array(
        'name' => 'faq-section',
        'title' => __('FAQ Section'),
        'render_template' => '/inc/blocks/faq-section.php', // Путь к файлу шаблона блока
        'category' => 'common', // Категория блока
        'icon' => 'shield', // Иконка блока
        'keywords' => array('acf', 'custom', 'block'),
    ));
}