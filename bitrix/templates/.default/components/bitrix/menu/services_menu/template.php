<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)): ?>
    <nav class="sidebar__nav" role="navigation">
        <h2 id="sidebar__header">Стоматологические услуги</h2>
        <ul role="menu" aria-labelledby="sidebar__header">
            <?foreach($arResult as $arItem):?>
                <li role="menuitem">
                    <a href="<?=$arItem['LINK']?>">
                        <i class="icon" style="background: url('<?=$arItem['PARAMS']['IMAGE']?>') no-repeat "></i>
                        <span class="i-b"><?=$arItem['TEXT']?></span>
                    </a>
                </li>
            <?endforeach;?>
        </ul>
    </nav>
<? endif ?>
