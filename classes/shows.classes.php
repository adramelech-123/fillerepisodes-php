<?php

require_once 'dbh.classes.php';

class Shows extends DBH {

    public function getShows() {
        $sql = "SELECT * FROM animelist ORDER BY anime_name ASC";
        $stmt = $this->connect()->prepare($sql);

        $stmt->execute();

        $shows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $shows; 
    }
}

$shows = new Shows();
$showdata = $shows->getShows();

// print_r($showdata);


// $showSize = count($showdata);
// $counter = 0;

// while ($counter < $showSize) {
//     echo $showdata[$counter]['anime_name'];
//     $counter++;
// }







