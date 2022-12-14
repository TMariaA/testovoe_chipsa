<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc as Loc;
Loc::loadMessages(__FILE__);//фильтрация по алфавиту и по дате создания
?>
<p class="sort" ><?=Loc::getMessage("SORT");?>
    <a class="active button-sort" data-sort = "name" data-method ="asc" ><?=Loc::getMessage("SORT_NAME_ASC");?></a>
    <a class="active button-sort" data-sort = "name" data-method ="desc" ><?=Loc::getMessage("SORT_NAME_DESC");?></a>
    <a class="active button-sort" data-sort = "DATE_CREATE" data-method ="desc"><?=Loc::getMessage("SORT_DATE_DESC");?></a>
    <a class="active button-sort" data-sort = "DATE_CREATE" data-method ="asc"><?=Loc::getMessage("SORT_DATE_ASC");?></a>
</p>
<div  id ="refreshlist" class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
    <p><?=$arItem["DATE_CREATE"]?></p>
    </p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>



