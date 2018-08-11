<?php

class CategoryModel
{
    private $db;
    private $name;
    private $weight;
    private $id;

    const TABLE = "categories";

    public function __construct($name = null, $weight = null, $id = null)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setWeight($weight);
        $this->db = DBHelper::getInstance();
    }

    public function setId(?int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = htmlspecialchars(ucfirst($name));
        return $this;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = (int) $weight;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public static function findById(int $id)
    {
        $db = DBHelper::getInstance();
        $query = "SELECT * FROM `" . self::TABLE . "` WHERE `id` = '$id' LIMIT 1";
        $category = $db->query($query)->fetch_assoc();
        if (!$category) {
            die("NOT FOUND");
        }

        return (new self($category['name'], $category['weight'], $category['id']));
    }


    public function delete()
    {
        if (!$this->id) {
            die("ID IS NOT SET");
        }
        $this->db->query("DELETE FROM `" . self::TABLE . "` WHERE `id` = {$this->id} LIMIT 1");
        return (bool) $this->db->affected_rows;
    }

    public function save()
    {
        return $this->id ? $this->update() : $this->create();
    }

    private function create()
    {
        $query = "
          INSERT INTO `" . self::TABLE . "` 
          SET 
            `name` = '$this->name',
            `weight` = '$this->weight'";

        $this->db->query($query);
        $this->setId($this->db->insert_id);
        return (bool) $this->db->insert_id;
    }


    private function update()
    {
        $query = "
          UPDATE `" . self::TABLE . "` 
          SET 
            `name` = '$this->name',
            `weight` = '$this->weight' WHERE `id` = '{$this->id}' LIMIT 1";


        $this->db->query($query);

        return (bool) $this->db->affected_rows;
    }

    public function toArray()
    {
        return [
            'name' => $this->getName(),
            'weight' => $this->getWeight(),
            'id' => $this->getId(),
        ];
    }

    public static function getAll()
    {
        $db = DBHelper::getInstance();
        $query = "SELECT * FROM `" . self::TABLE . "` ORDER BY `weight` DESC";
        return $db->query($query)->fetch_all(MYSQLI_ASSOC) ?? [];
    }
}