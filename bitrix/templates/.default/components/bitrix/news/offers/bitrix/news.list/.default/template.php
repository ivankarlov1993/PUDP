<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
    <?if(!empty($arResult['ITEMS'])):?>
        <?foreach($arResult['ITEMS'] as $arItem):?>
            <div class="col price-box border-top-blue" aria-describedby="pb-4">
                <h2 id="pb-4">
                    <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?=$arItem['NAME']?></a>
                </h2> <br><br>
                <div class="price-box__price">от <span><?=number_format($arItem['PROPERTIES']['PRICE']['VALUE'], 0, '', ' ')?></span> руб.</div>
                <a class="price-box__more" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">Подробнее →</a>
            </div>
        <?endforeach;?>
    <?endif;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
