            </div>
        </div>
        <footer id="footer" role="contentinfo">
            <div class="row wrapped-row">
                <div class="col col__content clearfix">
                    <div class="ftl">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_RECURSIVE" => "Y",
                                "PATH" => "/include/copyright.php"
                            )
                        );?>
                    </div>
                    <div class="ftr">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_RECURSIVE" => "Y",
                                "PATH" => "/include/counters.php"
                            )
                        );?>
                    </div>
                    <ul role="menubar" class="footer__menu">
                        <li role="menuitem"><a href="#">Диагностика</a></li>
                        <li role="menuitem"><a href="#">Профилактика и гигиена</a></li>
                        <li role="menuitem"><a href="#">Снятие зубного налета</a></li>
                        <li role="menuitem"><a href="#">Кариес и его лечение</a></li>
                        <li role="menuitem"><a href="#">Эндодонтия</a></li>
                        <li role="menuitem"><a href="#">Удаление зубов (экстракция)</a></li>
                        <li role="menuitem"><a href="#">Обзорное панорамное исследование</a></li>
                        <li role="menuitem"><a href="#">Отбеливание зубов</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>