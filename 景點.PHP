<body>
<?php
$抓到的資料=file_get_contents("https://media.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.json");

//echo $抓到的資料;
$o=json_decode($抓到的資料,true);
    print_r($o["XML_Head"]);
    die();

$link=mysqli_connect('localhost','root','','opendata');
//設定資料庫連線編碼
mysqli_set_charset($link,'utf8');
//用 for each 指令把陣列每筆資料都處理一遍
//foreach ($陣列名稱 as 項目) {}
foreach ($o["XML_Head"]["Infos"]["Info"] as $v) {
    echo "景點名稱=$v[Name]<br/>";
    //寫入資料庫
    //mysqli_query($link,"INSERT INTO `花果` (`流水號`, `日期`, `名稱`, `平均價格`, `交易量`) VALUES (NULL, '$v[交易日期]', '$v[作物名稱]', '$v[平均價]', '$v[交易量]');") or die(mysqli_error($link));

}
?>
</body>