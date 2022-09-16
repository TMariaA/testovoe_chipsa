<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
    <p class="section-menu">
<?php foreach ($arResult as $arItem):?>
   <a href="<?=$arItem["SECTION_URL"]?>"><?=$arItem["SECTION_NAME"]?></a>
<?endforeach;?>
    </p>
