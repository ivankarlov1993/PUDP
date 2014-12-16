<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

        </div>
    </div>
</div>
<div class="aside_left">
    <ul class="doctors-ul clearfix">
        <? foreach($arResult["ITEMS"] as $arItem): ?>
            <? if($arItem['IMAGE'] && $arItem['NAME']): ?>
                <li class="border-top-blue">
                    <figure>
                        <img src="<?= $arItem['IMAGE'] ?>" alt="<?= $arItem['NAME'] ?>"/>
                        <figcaption>
                            <div class="h3"><?= $arItem['NAME'] ?></div>
                            <div class="speciality"><?= $arItem['PREVIEW_TEXT']?></div>
                        </figcaption>
                    </figure>
                </li>
            <? endif ?>
        <? endforeach ?>
    </ul>
</div>

