<?php 

include_once "classes/Player.php";

class Employees 
{
    /**
     * Get the list of users
     */
    public function getEmployees() {
        $employees = array(
            array(
              "id" => 1,
              "name" => "Alex Hoffmann",
              "age" => 34,
              "salary" => 9700.00
            ),
            array(
              "id" => 2,
              "name" => "Robert Mueller",
              "age" => 27,
              "salary" => 8700.00
            ),
            array(
              "id" => 3,
              "name" => "Martin Wasserkocher",
              "age" => 32,
              "salary" => 9500.00
            ),
          );
        return $employees;
    }

    /**
     * Get the list of Heat players
     */
    public function getHeatPlayers() {
        global $db;
        $res = $db->query("SELECT name, age, speed, accuracy FROM players");

        // translating from generic object to a Player object
        $players = [];
        foreach($res as $r) {
            $players[] = new Player($r->name, $r->age, $r->speed, $r->accuracy);
        }

        return $players;
    }

    /**
     * Save a new Heat player
     */
    public function addHeatPlayer($player) {
        global $db;
        $db->query("
            INSERT INTO players (`name`, `age`, `speed`, `accuracy`) 
            VALUES ('{$player->name}', {$player->age}, {$player->speed}, {$player->accuracy})");
    }
}
