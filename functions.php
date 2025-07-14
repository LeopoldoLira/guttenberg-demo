<?
add_action('acf/init', 'register_acf_block_types');
function register_acf_block_types(){
    acf_register_block_type(array(
        'name' => 'pricing-table',
        'title' => __('Pricing Table'),
        'description' => __('A custom Pricing Table Block.'),
        'render_template' => 'template-parts/blocks/pricing-table/pricing-table.php',
        'category' => 'formatting',
        'icon' => 'money',
        'keywords' => array('pricing','table', 'plan'),
        'mode' => 'edit',
        'supports' => ['align' => false],
    ));
}

?>