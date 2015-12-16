system.pagenavigation template
====

<p>шаблон для bitrix:system.pagenavigation который подгружает контент</p>
<p>Установка:</p>
<pre>cd site/bitrix/modules/templates/.default/components/bitrix/
mkdir system.pagenavigation
cd system.pagenavigation
git clone https://github.com/kudin/ajax_pagenavigation_template.git ajax </pre>
==== 

<p>Для того чтобы это сработало вешаем дата-атрибут для контейнера с элементами data-ajax="container"
и сам вызов постранички ложим после вывода всех элементов</p>

<p>В настройках нужного компонента устанавливаем "PAGER_TEMPLATE" => "ajax" </p>