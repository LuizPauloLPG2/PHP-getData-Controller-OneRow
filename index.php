<?php

require "./conexao.php";

class User
{

    public static function all()
    {
        return Db::init()->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
    }

}

$users = User::all();

foreach ($users as $user) {
    echo $user['name'];
}
