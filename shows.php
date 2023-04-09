<?php 
    include 'header.php';
    include './classes/shows.classes.php';
?>

<section class="px-2 py-5"> 
    <div class="container">

        <h1>Shows</h1>

        <!-- Input filter search -->
        <div class="input-group">
                <input type="search" id="filterInput" class="form-control " placeholder="Search shows"/>
        </div>

        <!-- Show List -->
        <ul class = "list-group my-4">
            <li class = "list-group-item" id="names">
                <h3 class = "list-group-item-heading">List</h3>

                <?php
                   
                    $showSize = count($showdata);
                    $counter = 0;

                    while ($counter < $showSize) {
                        echo '<li id="anime" class="list-group-item"><a href="showepisodes.php?title='.$showdata[$counter]['anime_name']. '&animeID= '.$showdata[$counter]['anime_id']. '&img=' .$showdata[$counter]['image']. '" class="text-decoration-none">' .$showdata[$counter]['anime_name']. '</a></li>';
                        $counter++;
                    }

                ?>
            </li>
        </ul>

    </div>
</section>

<?php include 'footer.php';?>