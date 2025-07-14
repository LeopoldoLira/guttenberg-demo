<?
$PRICING_TABLE__NAME = get_field('plan_name');
$PRICING_TABLE___PRICE = get_field('price');
$PRICING_TABLE__FEATURES = get_field('features');
$PRICING_TABLE__BUTTON = get_field('button');
?>


<div class='pricing-table' >
    <h2><?=$PRICING_TABLE__NAME;?></h2>
    <p class='price'><?=$PRICING_TABLE___PRICE;?></p>

    <? if ($PRICING_TABLE__FEATURES):?>
        <ul class='features'>
            <? foreach ($PRICING_TABLE__FEATURES as $feature):?>
                <li><?=$feature['feature_item'];?></li>    
            <? endforeach ?>
        </ul>
    <? endif ?>

    <? if ($PRICING_TABLE__BUTTON):?>
        <a href='<?=$PRICING_TABLE__BUTTON['url'];?>' class='button'>
            <?=$PRICING_TABLE__BUTTON['title'];?>
        </a>
    <? endif ?>
</div>