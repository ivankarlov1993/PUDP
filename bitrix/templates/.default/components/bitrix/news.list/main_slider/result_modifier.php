<?
foreach ($arResult['ITEMS'] as &$arItem) {
    if ($arItem['PREVIEW_PICTURE']) {
        $file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width' => 746, 'height' => 344), BX_RESIZE_IMAGE_EXACT);
        $arItem['IMAGE'] = $file['src'];
    }
}