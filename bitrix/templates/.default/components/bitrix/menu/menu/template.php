<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)): ?>
    <nav id="navigation" role="navigation" aria-label="Главное меню">
        <ul role="menubar" class="clearfix">
            <? foreach ($arResult as $arItem): ?>
                <li role="menuitem" class="border-top-blue">
                    <a href="<?= $arItem["LINK"] ?>">
                        <i class="icon<?= ($arItem["PARAMS"]['class']) ? ' '.$arItem["PARAMS"]['class'] : ''; ?>"></i>
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <? endforeach ?>
        </ul>
    </nav>
<? endif ?>
