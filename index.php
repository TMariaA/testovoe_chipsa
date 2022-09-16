<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
global $APPLICATION;
$APPLICATION->SetTitle("");
?>
<?$APPLICATION->IncludeComponent("test:menu_section", ".default",
    [
        "IBLOCK_TYPE" => "news",
        "IBLOCK_CODE" => "news",
    ]
);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>