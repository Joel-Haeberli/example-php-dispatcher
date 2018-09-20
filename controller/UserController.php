<? 

class UserController {

    function getUsers() {
        return "ALL USERS";
    }

    function getUser($id) {
        return "USER WITH ID " . $id;
    }
}