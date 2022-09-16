<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Main\Localization\Loc as Loc;
Loc::loadMessages(__FILE__);
$arComponentParameters = [
        "PARAMETERS" => [
        "IBLOCK_TYPE" => [
            "PARENT" => "BASE",
            "NAME" =>Loc::getMessage("IBLOCK_TYPE"),
            "TYPE" => "STRING",
        ],
        "IBLOCK_CODE" => [
            "PARENT" => "BASE",
            "NAME" => Loc::getMessage("IBLOCK_CODE"),
            "TYPE" => "STRING",
        ],
        ]
]
?>