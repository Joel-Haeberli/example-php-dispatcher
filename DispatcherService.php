<?

include 'Dispatcher.php';
include 'controller/UserController.php';
include 'controller/CategoryController.php';

function dispatch($querypart) {
    $dispatcher = new Dispatcher($querypart);

    $cmd = $dispatcher->getCommand();
    $arguments = $dispatcher->getArguments();

    switch ($cmd) {
        case "getUsers":
            $c = new UserController();
            return $c->getUsers();
        case "getUser":
            $c = new UserController();
            return $c->getUser(10);
        case "getCategories":
            $c = new CategoryController();
            return $c->getCategories();
        case "getCategory":
            $c = new CategoryController();
            return $c->getCategory(20);
        default:
            echo "NO COMMAND '" . $cmd . "' DEFINED";
    }
}