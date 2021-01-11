<?php

class User
{
    public $sql;

    public function addUser(string $login, string $password)
    {
        if (strlen($login) > 12 || strlen($login) < 3) {
            return false;
        }
        if (strlen($login) > 6 || strlen($login) < 4) {
            return false;
        }
        $this->sql = "INSERT INTO users VALUES('', {$login}, {$password})";

        return true;
    }
}

$user = new User();
$result = $user->addUser('Misha', '1234');
echo $user->sql;
echo '<br>';
echo $result;
