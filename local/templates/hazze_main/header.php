<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

        use Bitrix\Main\Application;
	use Bitrix\Main\Page\Asset;
	use Bitrix\Main\Localization\Loc;
?>
<html>
<head>
<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>



<? Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/bootstrap.min.css");?>
<? Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/font-awesome.min.css");?>
<? Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/themify-icons.css");?>
<? Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/owl.carousel.min.css");?>
<? Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/magnific-popup.css");?>
<? Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/slicknav.min.css");?>
<? Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/style.css");?>

<?  Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"  rel="stylesheet">')?>

</head>

<body>
    <?$APPLICATION->ShowPanel();?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/logo.php"
                                )
                        );?>                        
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="main-menu mobile-menu">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel1", Array(
                                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                        "MAX_LEVEL" => "2",	// Уровень вложенности меню
                                        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                                        "MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
                                        "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                        "COMPONENT_TEMPLATE" => "horizontal_multilevel"
                                ),
                                false
                        );?>

                        
                        

                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    
 