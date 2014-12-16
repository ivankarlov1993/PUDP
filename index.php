<? define ('MAIN_PAGE', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

<section class="row">

    <aside class="border-top-green aside_right" role="complementary">

        <nav class="sidebar__nav" role="navigation">
            <h2 id="sidebar__header">Стоматологические услуги</h2>
            <ul role="menu" aria-labelledby="sidebar__header">
                <li role="menuitem"><a href="#"><i class="icon icon01"></i> <span class="i-b">Диагностика</span></a></li>
                <li role="menuitem"><a href="#"><i class="icon icon02"></i> <span class="i-b">Профилактика и гигиена</span></a></li>
                <li role="menuitem"><a href="#"><i class="icon icon03"></i> <span class="i-b">Снятие зубного налета</span></a></li>
                <li role="menuitem"><a href="#"><i class="icon icon04"></i> <span class="i-b">Кариес и его лечение</span></a></li>
                <li role="menuitem"><a href="#"><i class="icon icon05"></i> <span class="i-b">Эндодонтия</span></a></li>
                <li role="menuitem"><a href="#"><i class="icon icon06"></i> <span class="i-b">Удаление зубов (экстракция)</span></a></li>
                <li role="menuitem"><a href="#"><i class="icon icon07"></i> <span class="i-b">Обзорное панорамное исследование</span></a></li>
                <li role="menuitem"><a href="#"><i class="icon icon02"></i> <span class="i-b">Отбеливание зубов</span></a></li>
            </ul>
        </nav>

        <div class="sidebar__bottom">
            <a href="#"><i class="icon calendar"></i> Расписание приема врачей</a>
        </div>
    </aside>

    <?$APPLICATION->IncludeComponent("bitrix:news.list", "main_slider", Array(
            "IBLOCK_TYPE" => "2",	// Тип информационного блока (используется только для проверки)
            "IBLOCK_ID" => "3",	// Код информационного блока
            "NEWS_COUNT" => "5",	// Количество новостей на странице
            "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
            "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
            "SORT_BY2" => "NAME",	// Поле для второй сортировки новостей
            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
            "FILTER_NAME" => "",	// Фильтр
            "FIELD_CODE" => array(	// Поля
                0 => "ID",
                1 => "NAME",
                2 => "DETAIL_TEXT",
                3 => "DETAIL_PICTURE",
                4 => "",
            ),
            "PROPERTY_CODE" => array(	// Свойства
                0 => "",
                1 => "",
            ),
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "N",	// Учитывать права доступа
            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "PARENT_SECTION" => "",	// ID раздела
            "PARENT_SECTION_CODE" => "",	// Код раздела
            "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "PAGER_TITLE" => "Новости",	// Название категорий
            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
            "DISPLAY_DATE" => "N",	// Выводить дату элемента
            "DISPLAY_NAME" => "N",	// Выводить название элемента
            "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
        ),
        false
    );?>
</section>

<section class="row wrapped-row clearfix">
    <div class="col price-box border-top-blue" aria-describedby="pb-1">
        <h2 id="pb-1"><a href="">Протезирование зубов</a></h2>
        <p>Самое современное оборудование.</p>
        <p>Без боли и неприятных ощущений.</p>
        <p>За одно посещение стоматолога.</p>
        <div class="price-box__price">от <span>19 999</span> руб.</div>
        <a class="price-box__more rev" href="#">Подробнее →</a>
    </div>
    <div class="col price-box border-top-blue" aria-describedby="pb-2">
        <h2 id="pb-2"><a href="">Имплантация зубов</a></h2>
        <p>Самое современное оборудование.</p>
        <p>Без боли и неприятных ощущений.</p>
        <p>За одно посещение стоматолога.</p>
        <div class="price-box__price">от <span>39 999</span> руб.</div>
        <a class="price-box__more" href="#">Подробнее →</a>
    </div>
    <div class="col video-frame">
        <a href="#"><img src="images/upload/im01.jpg"></a>
    </div>
</section>


<section class="row wrapped-row clearfix">
    <div class="aside_right border-top-green doctors" role="complementary">
        <h3 id="doctor-01" class="col__header">Врачи отделения</h3>
        <ul class="doctor-list" area-labelledby="doctor-01">
            <li class="doctor clearfix">
                <img src="images/upload/d1.jpg" alt="">
                <a href="#" class="h4">Имя и фамилия врача</a>
                <p>Sed molestie augue sit amet leo consequat posuere. Estibu lum ante ipsum primis in faucibus</p>
            </li>
            <li class="doctor clearfix">
                <img src="images/upload/d2.jpg" alt="">
                <a href="#" class="h4">Иванов Иван Иванович</a>
                <p>Cтоматолог-терапевт, кандидат медицинских наук, врач высшей категории</p>
            </li>
            <li class="doctor clearfix">
                <img src="images/upload/d3.jpg" alt="">
                <a href="#" class="h4">Имя и фамилия врача</a>
                <p>Sed molestie augue sit amet leo consequat posuere. Estibu lum ante ipsum primis in faucibus</p>
            </li>
            <li class="doctor clearfix">
                <img src="images/upload/d2.jpg" alt="">
                <a href="#" class="h4">Имя и фамилия врача</a>
                <p>Estibu lum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
            </li>
            <li class="doctor clearfix">
                <img src="images/upload/d3.jpg" alt="">
                <a href="#" class="h4">Имя и фамилия врача</a>
                <p>Sed molestie augue sit amet leo consequat posuere. Estibu lum ante ipsum primis in faucibus</p>
            </li>
        </ul>
        <div class="cntr"><a href="" class="button green-button">Все врачи <br> отделения</a></div>
    </div>
    <div class="col border-top-blue aside_left">
        <div class="col__content clearfix">
            <h1>Общая информация</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
            <figure style="margin:0 0 20px 30px;" class="ftr"><a class="fancybox" href="images/upload/im02.jpg"><img src="images/upload/im02.jpg" style="margin: 0 0 15px 0" alt=""></a> <figcaption class="cntr"><a href="" class="button blue-button">Пример синей кнопки</a></figcaption> </figure>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
            <p>Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
            <p>Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
        </div>
        <div class="col__bottom">
            <a href="#">Пример текстовой гиперссылки →</a>
        </div>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>