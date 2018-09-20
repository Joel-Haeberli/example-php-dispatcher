<?

//All calls to the page are starting here

include 'DispatcherService.php';

$result = dispatch(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY));

echo($result);