<?

if(count($arResult['ITEMS'])>2){
   $rand_keys = array_rand($arResult['ITEMS'], 2);
//  echo $rand_keys[0] . "\n";
//echo $rand_keys[1]. "\n";
}
foreach ($arResult['ITEMS'] as $key=>&$item):
    if($key == $rand_keys[0] || $key == $rand_keys[1]){
$res = CUser::GetByID($item['CREATED_BY']);
$users = $res->Fetch();
$item['USER_PHOTO'] =  CFile::GetPath($users['PERSONAL_PHOTO']);
$date = explode('.', $item['PROPERTIES']['DATA']['VALUE']);
$item['PROPERTIES']['DATA']['VALUE'] = date("F j, Y",mktime(0,0,0,$date[1],$date[0],$date[2]));
if(strlen($item["PREVIEW_TEXT"])>55){
$item["PREVIEW_TEXT"] = substr($item["PREVIEW_TEXT"], 0,strrpos(substr($item["PREVIEW_TEXT"], 0,55)," "));

$item["PREVIEW_TEXT"].= ' ...';
}
if(strlen($item["NAME"])>50){
$item["NAME"] = substr($item["NAME"], 0,strrpos(substr($item["NAME"], 0,35)," "));

$item["NAME"].= ' ...';
}
    }else{
        $arResult['ITEMS'][$key]='';
    }
//debug($date);
endforeach;

unset($item);
$arResult['ITEMS'] = array_diff($arResult['ITEMS'], array(''));
//debug($arResult['ITEMS']);