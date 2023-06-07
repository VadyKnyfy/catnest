<?php
/*
require 'src/Delivery/NovaPoshtaApi2.php';
$np = new \LisDev\Delivery\NovaPoshtaApi2('9bb07e98ade6d6363735201091da805e');
$city = $np->getCity('Киев', 'Киевская');
$result = $np->getCities();
$result =$np->findCityByRegion($result,'Днепропетровская');
//print_r($result[0]);

foreach ($result as $item) {
    if (isset($item['Description'])) {
        $descriptions[] = $item['Description'];
    }
}

print_r($descriptions);
/*foreach($result as $data){
    echo($data['Description'].'<br>');
}*/
//$sities = $result['data'];
?>
<?php
/*$apiKey = '9bb07e98ade6d6363735201091da805e';
$apiUrl = 'https://api.novaposhta.ua/v2.0/json/';

$data = array(
    "apiKey" => $apiKey,
    "modelName" => "Address",
    "calledMethod" => "getCities",
    "methodProperties" => array(
        // Здесь могут быть дополнительные свойства метода, если требуется
    )
);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data)
    )
);

$context  = stream_context_create($options);
$response = file_get_contents($apiUrl, false, $context);
$result = json_decode($response, true);

$cities = array();

// Обработка результата
if ($result['success']) {
    $cities = $result['data'];
} else {
    echo "Ошибка: " . $result['errors'][0];
}*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Выбор области, города и отделения</title>
</head>
<body>
    <h2>Выберите область, город и отделение:</h2>

    <form>
        <select id="region">
             <option value="" disabled selected>Выберите область</option>
    <option value="Вінницька">Вінницька</option>
    <option value="Волинська">Волинська</option>
    <option value="Дніпропетровська">Дніпропетровська</option>
    <option value="Донецька">Донецька</option>
    <option value="Житомирська">Житомирська</option>
    <option value="Закарпатська">Закарпатська</option>
    <option value="Запорізька">Запорізька</option>
    <option value="Івано-Франківська">Івано-Франківська</option>
    <option value="Київська">Київська</option>
    <option value="Кіровоградська">Кіровоградська</option>
    <option value="Луганська">Луганська</option>
    <option value="Львівська">Львівська</option>
    <option value="Миколаївська">Миколаївська</option>
    <option value="Одеська">Одеська</option>
    <option value="Полтавська">Полтавська</option>
    <option value="Рівненська">Рівненська</option>
    <option value="Сумська">Сумська</option>
    <option value="Тернопільська">Тернопільська</option>
    <option value="Харківська">Харківська</option>
    <option value="Херсонська">Херсонська</option>
    <option value="Хмельницька">Хмельницька</option>
    <option value="Черкаська">Черкаська</option>
    <option value="Чернівецька">Чернівецька</option>
    <option value="Чернігівська">Чернігівська</option>
            <!-- Добавьте другие области здесь -->
        </select>

        <select id="city">
            <option value="">Выберите город</option>
            <!-- Пустой список городов, будет обновляться при выборе области -->
        </select>

        <select id="warehouse">
            <option value="">Выберите отделение</option>
            <!-- Пустой список отделений, будет обновляться при выборе города -->
        </select>
    </form>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script>
        $(document).ready(function() {
            // Обработчик события при выборе области
            $('#region').change(function() {
                console.log("ахуел");
                var region = $(this).val();
                if (region) {
                    // Очистка списка городов и отделений
                    $('#city').html('<option value="">Выберите город</option>');
                    $('#warehouse').html('<option value="">Выберите отделение</option>');

                    // Запрос к серверу для получения списка городов
                    $.ajax({
                        url: '../php/new_post.php', // Путь к файлу обработчику на сервере
                        type: 'POST',
                        data: { region: region, functionName:'getCities'},
                        dataType: 'json',
                        success: function(response) {
                            $.each(response, function(key, value) {
                                $('#city').append('<option value="' + value + '">' + value + '</option>');
                            });
                        }
                    });
                } 
            });
            
            $('#city').change(function() {
                var city = $(this).val();
                if (city) {
                    // Очистка списка отделений
                    $('#warehouse').html('<option value="">Выберите отделение</option>');

                    // Запрос к серверу для получения списка отделений
                    $.ajax({
                        url: '../php/new_post.php', // Путь к файлу обработчику на сервере
                        type: 'POST',
                        data: { city: city, region:  $('#region option:selected').text(), functionName:'getWarehouse'},
                        dataType: 'json',
                        success: function(response) {
                            // Добавление отделений в список
                            $.each(response, function(key, value) {
                                $('#warehouse').append('<option value="' + value + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    // Город не выбран, очистка списка отделений
                    $('#warehouse').html('<option value="">Выберите отделение</option>');
                }
            });
        });
            </script>
    </body>
</html>


