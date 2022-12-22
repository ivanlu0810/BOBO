<!DOCTYPE html>
<html>
<body>

<?php
//https://data.gov.tw/dataset/32205
//由網路上讀取xml
$xml資料=file_get_contents("https://media.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.xml");
//把xml資料轉成xml物件
$xml物件=simplexml_load_string($xml資料);
//把xml物件轉成json物件
$json物件=json_encode($xml物件);
//把json物件轉到陣列
$o=json_decode($json物件,true);
//print_r($o["Infos"]) ;
//die();
foreach($o["Infos"]["Info"] as $v){
    echo "名稱：",$v["Name"],"<br/><br/>";
    echo "介紹：",$v["Toldescribe"],"<br/><br/>";
    echo "地址：",$v["Add"],"<br/><br/>";
    echo "電話：",$v["Tel"],"<br/><br/><br/>";

}
?>

</body>
</html>