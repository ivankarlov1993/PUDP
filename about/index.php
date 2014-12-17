<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Об отделении");
?>
    <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_RECURSIVE" => "Y",
            "PATH" => "/include/about.php"
        )
    );?>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>