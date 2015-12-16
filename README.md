system.pagenavigation template
====

<p>шаблон для bitrix:system.pagenavigation который подгружает контент</p>
<p>Установка:</p>
<pre>cd site/bitrix/modules/templates/.default/components/bitrix/
mkdir system.pagenavigation
cd system.pagenavigation
git clone https://github.com/kudin/ajax_pagenavigation_template.git ajax  
==== 

<p>Для того чтобы это сработало вешаем дата-атрибут для контейнера с элементами data-ajax="container"
и сам вызов постранички ложим после вывода всех элементов</p>
 
<p>Пример:</p>
<pre>
<div class="news-list" data-ajax="container"> 
    <?
    foreach ($arResult["ITEMS"] as $arItem) {
               // вывод элементов
     } ?> 
    <?=$arResult["NAV_STRING"]?> 
</div> 
</pre>
 
<p>В настройках нужного компонента устанавливаем "PAGER_TEMPLATE" => "ajax" </p>