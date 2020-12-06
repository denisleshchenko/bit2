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
?>


<!-- Blog Details Hero  Section Begin -->
    <section class="blog-hero-section set-bg spad" data-setbg="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="bh-text">
                        <span>Fashion</span>
                        <h2><?= $arResult["NAME"] ?></h2>
                        <ul>
                            <li>By Colorlib</li>
                            <li>February 21, 2019</li>
                            <li>No Comments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero Section End -->

<!-- Blog Details Section Begin -->
    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="bd-text">
                        <? echo $arResult["DETAIL_TEXT"]; ?>
                        <div class="tag-share">
                            <div class="tags">
                                <a href="#">Camera</a>
                                <a href="#">Photography</a>
                                <a href="#">Tips</a>
                            </div>
                            <div class="social-share">
                                <span>Share:</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                        <div class="blog-author">
                            <img src="img/blog/details/bd-posted.jpg" alt="">
                            <h5>Shane Lynch</h5>
                            <p>Aliquip ex ea commodo consequat. Duis aute irure dolor in<br /> reprehenderit in
                                voluptate velit esse cillum bore et dolore magna aliqua. </p>
                            <div class="bt-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="leave-comment">
                            <h2>Leave A Comment</h2>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Messages"></textarea>
                                        <button type="submit" class="site-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

<?/*
<div class="news-detail">
<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>
        
    <? endif ?>
    <? if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]): ?>
        <span class="news-date-time"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span>
    <? endif; ?>
    <? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]): ?>
        <h3><?= $arResult["NAME"] ?></h3>
    <? endif; ?>
    <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arResult["FIELDS"]["PREVIEW_TEXT"]): ?>
        <p><?= $arResult["FIELDS"]["PREVIEW_TEXT"];
    unset($arResult["FIELDS"]["PREVIEW_TEXT"]); ?></p>
    <? endif; ?>
    <? if ($arResult["NAV_RESULT"]): ?>
        <? if ($arParams["DISPLAY_TOP_PAGER"]): ?><?= $arResult["NAV_STRING"] ?><br /><? endif; ?>
        <? echo $arResult["NAV_TEXT"]; ?>
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?><br /><?= $arResult["NAV_STRING"] ?><? endif; ?>
    <? elseif ($arResult["DETAIL_TEXT"] <> ''): ?>
        <? echo $arResult["DETAIL_TEXT"]; ?>
<? else: ?>
        <? echo $arResult["PREVIEW_TEXT"]; ?>
    <? endif ?>
    <div style="clear:both"></div>
    <br />
    <?
    foreach ($arResult["FIELDS"] as $code => $value):
        if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code) {
            ?><?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?
            if (!empty($value) && is_array($value)) {
                ?><img border="0" src="<?= $value["SRC"] ?>" width="<?= $value["WIDTH"] ?>" height="<?= $value["HEIGHT"] ?>"><?
            }
        } else {
            ?><?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?><?
        }
        ?><br />
    <? endforeach;
    foreach ($arResult["DISPLAY_PROPERTIES"] as $pid => $arProperty):
        ?>

        <?= $arProperty["NAME"] ?>:&nbsp;
        <? if (is_array($arProperty["DISPLAY_VALUE"])): ?>
            <?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
        <? else: ?>
            <?= $arProperty["DISPLAY_VALUE"]; ?>
        <? endif ?>
        <br />
    <?
    endforeach;
    if (array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y") {
        ?>
        <div class="news-detail-share">
            <noindex>
                <?
                $APPLICATION->IncludeComponent("bitrix:main.share", "", array(
                    "HANDLERS" => $arParams["SHARE_HANDLERS"],
                    "PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
                    "PAGE_TITLE" => $arResult["~NAME"],
                    "SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                    "SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                    "HIDE" => $arParams["SHARE_HIDE"],
                        ), $component, array("HIDE_ICONS" => "Y")
                );
                ?>
            </noindex>
        </div>
        <?
    }
    ?>
</div>
 * */?>