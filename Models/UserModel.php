<?php

class UserModel
{
    private $db;
    private $login;
    private $pass;
    private $admin;
    private $id;

    public function __construct($login = null, $pass = null, $admin = null, $id = null)
    {
        $this->setId($id);
        $this->setPass($pass);
        $this->setLogin($login);
        $this->setAdmin($admin);
        $this->db = DBHelper::getInstance();
    }

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function setAdmin($admin)
    {
        $this->admin = (bool) $admin;
        $this->admin = (bool) $admin;
        return $this;
    }

    public function setLogin(string $login)
    {
        $this->login = $login;
        return $this;
    }

    public function setPass(string $pass)
    {
        $this->pass = ($this->id) ? $pass : md5($pass);
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function getPass(): ?string
    {
        return $this->pass;
    }

    public static function findByLogin(string $login)
    {
        $db = DBHelper::getInstance();
        $query = "SELECT * FROM `users` WHERE `login` = '$login' LIMIT 1";
        $user = $db->query($query)->fetch_assoc();
        if (!$user) {
            die("NOT FOUND");
        }

        return (new self($user['login'], $user['pass'], $user['admin'], $user['id']));
    }

    public static function findById(int $id)
    {
        $db = DBHelper::getInstance();
        $query = "SELECT * FROM `users` WHERE `id` = '$id' LIMIT 1";
        $user = $db->query($query)->fetch_assoc();
        if (!$user) {
            die("NOT FOUND");
        }

        return (new self($user['login'], $user['pass'], $user['admin'], $user['id']));
    }


    public function delete()
    {
        if (!$this->id) {
            die("ID IS NOT SET");
        }
        $this->db->query("DELETE FROM `users` WHERE `id` = {$this->id} LIMIT 1");
        return (bool) $this->db->affected_rows;
    }

    public function save()
    {
        return $this->id ? $this->update() : $this->create();
    }

    private function create()
    {
        $query = "
          INSERT INTO `users` 
          SET 
            `login` = '$this->login',
            `pass` = '$this->pass',
            `admin` = 0";

        $this->db->query($query);
        $this->setId($this->db->insert_id);
        return (bool) $this->db->insert_id;
    }


    private function update()
    {
        $query = "
          UPDATE `users` 
          SET 
            `login` = '$this->login',
            `pass` = '$this->pass',
            `admin` = 0
          WHERE `id` = {$this->id} LIMIT 1";

        $this->db->query($query);

        return (bool) $this->db->affected_rows;
    }

    public function toArray()
    {
        return [
            'login' => $this->getLogin(),
            'pass' => $this->getPass(),
            'id' => $this->getId(),
            'admin' => (bool) $this->admin
        ];
    }

    public function checkPassword($pass)
    {
        return md5($pass) === $this->pass;
    }
}