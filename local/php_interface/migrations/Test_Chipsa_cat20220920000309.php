<?php

namespace Sprint\Migration;


class Test_Chipsa_cat20220920000309 extends Version
{
    protected $description = "миграция категорий инфоблока(разделы новостей)";

    protected $moduleVersion = "4.1.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'chipsa_test_news',
            'chipsa_test_news'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'машины',
    'CODE' => 'cars',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => '1',
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
  1 => 
  array (
    'NAME' => 'животные',
    'CODE' => 'animal',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => '2',
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
  2 => 
  array (
    'NAME' => 'пк и комплектующие',
    'CODE' => 'tech',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => '3',
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
  ),
)        );
    }

    public function down()
    {
        //your code ...
    }
}
