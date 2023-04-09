<?php

require_once 'dbh.classes.php';

class Search extends DBH {

    public function getSearch() {

        if(isset($_POST['submit-search'])) {
            $search = $_POST['search'];
            $sql = "SELECT * FROM animelist WHERE anime_name LIKE '%$search%' ORDER BY anime_name ASC;";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result; 
        }
    
    }
}

$result = new Search();
$search_results = $result->getSearch();

?>