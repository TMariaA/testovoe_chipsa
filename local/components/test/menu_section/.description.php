<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Main\Localization\Loc as Loc;
Loc::loadMessages(__FILE__);
$arComponentDescription = [
    "NAME" =>Loc::getMessage("NAME_COMPONENT"),
    "PATH" => [
        "ID" =>Loc::getMessage("ID_PATH_COMPONENT"),
        "NAME" =>Loc::getMessage("NAME_PATH_COMPONENT"),
    ],
];
?>