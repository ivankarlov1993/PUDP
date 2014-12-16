<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<pre>
<?//print_r($arResult);?>
</pre>
<section class="image-slider" aria-labelledby="advantages">
    <div id="main-slider">
        <h2 id="advantages">5 очевидных преимуществ</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <? foreach($arResult['ITEMS'] as $k => $arItem): ?>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <div class="slider-image-inner" style="background-image:url(<?= $arItem['IMAGE'] ?>)">
                                <h3 id="sl-header-1">
                                    <i class="icon round"><?= $k ?></i>
                                    <span class="i-b"><?= $arItem['NAME'] ?></span>
                                </h3>
                            </div>
                        </div>
                        <div class="slide-descr">
                             <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                        </div>
                    </div>
                <? endforeach ?>
            </div>
        </div>
        <div class="sl-navigation">
            <span class="nav-arrow arrow-left"></span>
            <span class="nav-arrow arrow-right"></span>
            <div id="main-pagination">
                <span class="swiper-pagination-switch">1</span>
                <span class="swiper-pagination-switch">2</span>
                <span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch">3</span>
                <span class="swiper-pagination-switch">4</span>
                <span class="swiper-pagination-switch">5</span>
            </div>
        </div>
    </div>
</section>