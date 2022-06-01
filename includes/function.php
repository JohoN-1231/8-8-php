<?

$route = isset($_GET['route']) ? $_GET['route'] : "home";

$pages = [
    "home" => ["name" => "Главная", "icon" => "fal fa-home"],
    "calc" => ["name" => "Калькулятор", "icon" => "fas fa-calculator-alt"],
    "contact" => ["name" => "Контакты", "icon" => "fal fa-address-book"],
    "guest" => ["name" => "Гостевая книга", "icon" => "fal fa-books"],
    "slide" => ["name" => "Слайдер", "icon" => "far fa-presentation"],
    "table" => ["name" => "Таблица умножения", "icon" => "fas fa-times"],
    "test" => ["name" => "Тест", "icon" => "fal fa-vial"],
    "login" => ["name" => "Вход"],
    "registration" => ["name" => "Регистрация"],
];

$pageTitle = isset($pages[$route]) ? $pages[$route]['name'] : '';

$monthsRu = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь',
'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
$currentMonth = $monthsRu[date('n')-1];

$pageDate = date("Сегодня d $currentMonth Y год");
include_once("db.php");
$userInfo = userInfo();
$getPhotos = getPhotos();
?>