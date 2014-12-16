<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="aside_left">
    <ul class="equipment-ul clearfix">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <? if($arItem['IMAGE'] && $arItem['NAME']): ?>
                <li class="border-top-red">
                    <figure>
                        <img src="<?= $arItem['IMAGE'] ?>" alt="<?= $arItem['NAME'] ?>" />
                        <figcaption>
                            <p> <?= $arItem['PREVIEW_TEXT'] ?> </p>
                        </figcaption>
                    </figure>
                </li>
            <? endif ?>
        <?endforeach;?>
    </ul>
</div>

