<?php
require '../dev/src/Delivery/NovaPoshtaApi2.php';
$np = new \LisDev\Delivery\NovaPoshtaApi2('9bb07e98ade6d6363735201091da805e');
function getAreas(){
    
}
function getCities($area){
    global $np;
   $result =$np->findCityByRegion($np->getCities(),$area);
   $cityest = array();
   $cityes = array();
   foreach ($result as $item) {
    if (isset($item['Description'])) {
        $cityest[] = $item['Description'];
    }}
    return $cityest;
}
function getWarehouses($cityname,$area){
    global $np;
$city = $np->getCity($cityname, $area);
$result = $np->getWarehouses($city['data'][0]['Ref'])['data'];
$warehouses = array();
foreach ($result as $item) {
    if (isset($item['Description'])) {
        $warehouses[] = $item['Description'];
    }
}
return $warehouses;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['functionName'] === 'getCities') {
        $area = $_POST['region']; // Получение переданного значения "Дніпропетровська"
        $cities = getCities($area); // Вызов функции getCities() с переданным значением
        echo json_encode($cities); // Возвращение результата в формате JSON
    } elseif ($_POST['functionName']  === 'getWarehouse') {
         $area = $_POST['region']; // Получение переданного значения "Дніпропетровська"
         $city = $_POST['city'];
        $warehouses = getWarehouses($city,$area); // Вызов функции getCities() с переданным значением
        echo json_encode($warehouses); // Возвращение результата в формате JSON
    } else {
  echo("404");
    }

}
?>