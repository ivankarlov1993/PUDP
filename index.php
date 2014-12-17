<? define ('MAIN_PAGE', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

<section class="row">
    <aside class="border-top-green aside_right" role="complementary">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "services_menu", Array(
                "ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
                "MENU_THEME" => "site",
                "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                "MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                "CHILD_MENU_TYPE" => "main",	// Тип меню для остальных уровней
                "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            ),
            false
        );?>
        
        <div class="sidebar__bottom">
            <a href="/timetable/">
                <i class="icon calendar"></i>
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_RECURSIVE" => "Y",
                        "PATH" => "/include/work_time.php"
                    )
                );?>
            </a>
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
    <?$APPLICATION->IncludeComponent("bitrix:news.list", "main_page_offers", Array(
            "IBLOCK_TYPE" => "6",	// Тип информационного блока (используется только для проверки)
            "IBLOCK_ID" => "7",	// Код информационного блока
            "NEWS_COUNT" => "2",	// Количество новостей на странице
            "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
            "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
            "SORT_BY2" => "",	// Поле для второй сортировки новостей
            "SORT_ORDER2" => "",	// Направление для второй сортировки новостей
            "FILTER_NAME" => "",	// Фильтр
            "FIELD_CODE" => array(	// Поля
                0 => "",
                1 => "",
            ),
            "PROPERTY_CODE" => array(	// Свойства
                0 => "PRICE",
                1 => "",
            ),
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "N",	// Учитывать права доступа
            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
            "ACTIVE_DATE_FORMAT" => "",	// Формат показа даты
            "SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "PARENT_SECTION" => "",	// ID раздела
            "PARENT_SECTION_CODE" => "",	// Код раздела
            "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "N",
            "DISPLAY_PICTURE" => "N",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "PAGER_TITLE" => "",	// Название категорий
            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
        ),
        false
    );?>
    <div class="col video-frame">
        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_RECURSIVE" => "Y",
                "PATH" => "/include/main_page_video.php"
            )
        );?>
    </div>
</section>

<section class="row wrapped-row clearfix">
    <?$APPLICATION->IncludeComponent("bitrix:news.list", "main_page_doctors", Array(
            "IBLOCK_TYPE" => "4",	// Тип информационного блока (используется только для проверки)
            "IBLOCK_ID" => "5",	// Код информационного блока
            "NEWS_COUNT" => "5",	// Количество новостей на странице
            "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
            "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
            "SORT_BY2" => "",	// Поле для второй сортировки новостей
            "SORT_ORDER2" => "",	// Направление для второй сортировки новостей
            "FILTER_NAME" => "",	// Фильтр
            "FIELD_CODE" => array(	// Поля
                0 => "",
                1 => "",
            ),
            "PROPERTY_CODE" => array(	// Свойства
                0 => "",
                1 => "",
            ),
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "N",	// Учитывать права доступа
            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
            "ACTIVE_DATE_FORMAT" => "",	// Формат показа даты
            "SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "PARENT_SECTION" => "",	// ID раздела
            "PARENT_SECTION_CODE" => "",	// Код раздела
            "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
            "PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "PAGER_TITLE" => "",	// Название категорий
            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
        ),
        false
    );?>
    <div class="col border-top-blue aside_left">
        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_RECURSIVE" => "Y",
                "PATH" => "/include/main_page_text.php"
            )
        );?>

    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>