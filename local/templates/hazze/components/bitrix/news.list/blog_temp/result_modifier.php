<?

foreach ($arResult['ITEMS'] as &$item):
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
//debug($date);
endforeach;

unset($item);