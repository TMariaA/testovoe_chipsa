ТЗ
На битриксе реализовать простой новостной сайт:
1. Новости, разбитые по разделам.
2. Меню (bitrix:menu), построенное по разделам.
3. Фильтр новостей (задать пару свойств).
4. Сортировка новостей (дата создания/алфавит).
5. Должно быть 3 страницы - Общий список новостей, Список новостей раздела, Детальная страница новости.
6. Всё должно быть ЧПУ (без $_GET параметров).

Создан инфоблок, разбитый по разделам, находится по пути /testovoe_chipsa/tree/main/local/php_interface/migrations (его можно установить с помощью модуля миграции(он бесплатен)) или установить инфоблок через xml файл /testovoe_chipsa/tree/main/upload (но там значение инфоблока передается через ай ди)

меню, построенное по разделам находится /testovoe_chipsa/tree/main/local/components/test/menu_section

фильтр новостей, ЧПУ проверяются через подключение компонента в index.php. ЧПУ должен совпадать с настройками инфоблока(поэтому проверяется и в настройках инфоблока)

Должно быть 3 страницы - Общий список новостей, Список новостей раздела, Детальная страница новости(реализовано через подключение комплексного компонента)

Сортировка новостей (дата создания/алфавит) реализована через статью https://dev.1c-bitrix.ru/learning/course/index.php?COURSE_ID=43&LESSON_ID=3796 поэтому в  index.php Перед вызовом компонента , section.php, template.php находятся фрагменты кода

