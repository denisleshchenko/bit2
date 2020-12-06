<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
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
//debug($arResult["ITEMS"]);
?>
 <? foreach ($arResult["ITEMS"] as $arItem): ?>
<?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
<div class="col-lg-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
    <div class="blog-item">
        <div class="row">
            <div class="col-lg-6">
                <div class="bi-pic set-bg" data-setbg="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"></div>
            </div>
            <div class="col-lg-6">
                <div class="bi-text">
                    <ul>
                        <li><i class="fa fa-calendar-o"></i><?=$arItem['PROPERTIES']['DATA']['VALUE']?></li>
                        <li><i class="fa fa-commenting-o"></i> 0</li>
                    </ul>
                    <h4><a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a></h4>
                    <p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
                    <div class="bt-author">
                        <div class="ba-pic">
                            <img src="<?=$arItem['USER_PHOTO']?>" alt="">
                        </div>
                        <div class="ba-text">
                            <h5><?=$arItem['CREATED_USER_NAME']?></h5>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<? endforeach; ?>

<?/*
<div class="news-list">
    
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <p class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
    <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
        <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img
                            class="preview_picture"
                            border="0"
                            src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                            width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
                            height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                            alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                            title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                            style="float:left"
                            /></a>
        <? else: ?>
                    <img
                        class="preview_picture"
                        border="0"
                        src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                        width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
                        height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                        alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                        title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                        style="float:left"
                        />
                    <? endif; ?>
            <? endif ?>
            <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                <span class="news-date-time"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
            <? endif ?>
            <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                    <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><b><? echo $arItem["NAME"] ?></b></a><br />
                <? else: ?>
                    <b><? echo $arItem["NAME"] ?></b><br />
                <? endif; ?>
            <? endif; ?>
            <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                <? echo $arItem["PREVIEW_TEXT"]; ?>
        <? endif; ?>
        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
            <div style="clear:both"></div>
            <? endif ?>
            <? foreach ($arItem["FIELDS"] as $code => $value): ?>
            <small>
            <?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?>
            </small><br />
            <? endforeach; ?>
            <? foreach ($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
            <small>
                <?= $arProperty["NAME"] ?>:&nbsp;
                <? if (is_array($arProperty["DISPLAY_VALUE"])): ?>
                    <?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
                <? else: ?>
                <?= $arProperty["DISPLAY_VALUE"]; ?>
            <? endif ?>
            </small><br />
    <? endforeach; ?>
    </p>
<? endforeach; ?>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <br /><?= $arResult["NAV_STRING"] ?>
<? endif; ?>
</div>
*/?>