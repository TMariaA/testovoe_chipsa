<?php
\Bitrix\Main\Loader::includeModule('iblock');
class menuSection extends CBitrixComponent
{
    public function executeComponent()
    {
        $rsParentSection = CIBlockSection::GetList(
            ['name' => 'asc'],
            ['IBLOCK_TYPE'=>$this->arParams["IBLOCK_TYPE"],'IBLOCK_CODE' => $this->arParams["IBLOCK_CODE"], 'ACTIVE' => 'Y']
        );
        while ($arParentSection = $rsParentSection->GetNext())
        {
            $this->arResult[] =[ "SECTION_NAME"=>$arParentSection["NAME"],
                "SECTION_URL"=>$arParentSection["SECTION_PAGE_URL"],
            ];
        }
        $this->includeComponentTemplate("");
    }
}