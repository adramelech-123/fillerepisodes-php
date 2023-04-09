<?php 
    include 'header.php';
    // require_once './classes/dbh.classes.php';
    include './classes/searches.classes.php';  
?>

<section class="px-2 py-5"> 
    <div class="container">

        <h1>Search Results</h1>

        <!-- Input filter search -->
        <div class="input-group">
                <input type="search" id="filterInput" class="form-control " placeholder="Filter your search"/>
        </div>

        <!-- Show List -->
        <ul class = "list-group my-4">
            <li class = "list-group-item" id="names">
                
                <?php
                   
                   if(isset($_POST['submit-search'])) {
                        
                        $searchSize =  count($search_results);
                        $counter = 0;

                        if($searchSize > 0) {

                            echo "<p class = 'text-muted'>" . $searchSize . ' results found!' . "</p>";

                            while ($counter < $searchSize) {
                                echo '<li id="anime" class="list-group-item"><a id="showitem" href="showepisodes.php?title='.$search_results[$counter]['anime_name']. '&animeID= '.$search_results[$counter]['anime_id']. '&img=' .$search_results[$counter]['image']. '" class="text-decoration-none">' .$search_results[$counter]['anime_name']. '</a></li>';
                                $counter++;
                            }
                        }

                        else {
                            echo "<p class = 'text-muted'>There are no results matching your search!</p>";
                            echo "<a href='shows.php' class='text-decoration-none'>Go to shows list</a>";
                        }
                        
                        
                   }
                    
                ?>
            </li>
        </ul>

    </div>
</section>

<?php include 'footer.php';?>

