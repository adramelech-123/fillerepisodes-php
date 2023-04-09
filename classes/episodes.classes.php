<?php

require_once 'dbh.classes.php';

class Episodes extends DBH {

    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getEpisodes($title) {
        $sql = "SELECT * FROM episodes WHERE anime_id = ? ORDER BY ep_num ASC";
        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$title]);

        $episodeData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $episodeData; 
    }
}
