<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]) { ?>
<div class="shownext">
    <a data-ajax="loadNextPage" href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"><?=$arResult['NavTitle']?></a>
</div>
<?
} 