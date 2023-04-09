<?php 
    include 'header.php';
    include './classes/shows.classes.php';
    include './classes/episodes.classes.php';
?>

    <!-- Breadcrumb -->
    <section class="p-5">
        <nav style="--bs-breadcrumb-divider: '>';">
            <ol class="breadcrumb px-5 mx-5">
              <li class="breadcrumb-item"><a href="shows.php" class="text-decoration-none">Shows</a></li>

                <?php
                
                 $title = $_GET['title'];
                 $title_id = $_GET['animeID'];
                 $title_image = $_GET['img'];

                 echo '<li class="breadcrumb-item active" aria-current="page">' .$title. '</li>';
                
                ?>

              
            </ol>
        </nav>
    </section>

    <section class="container justify-content-center my-2">
        <div class="card mb-3 border-secondary">

            <?php
            
                echo '<img src="' .$title_image. '" alt="" class="card-img-top" style="height: 300px; object-fit:cover; object-position: 30% top;">';
            
            ?>
        
        </div>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-hit="all" type="button">Show all episodes</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-hit="filler" type="button">Show Filler episodes</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-hit="canon" type="button">Show Canon episodes</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-hit="mixed" type="button">Partial Filler episodes</button>
            </div>
        </nav>

        <table class="table table-striped table-light">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                </tr>
            </thead>

            <!-- Table Body: Display from DB -->
            <tbody class="table-body">
                
                <?php
                
                    $episodesGet = new Episodes($title_id);
                    $episodes = $episodesGet->getEpisodes($title_id);
                    

                    $epSize = count($episodes);
                    $counter = 0;

                    while ($counter < $epSize) {
                        echo '
                        <tr>
                            <th scope="row">'.$episodes[$counter]['ep_num']. '</th>
                            <td>' .$episodes[$counter]['ep_title'] . '</td>
                            <td><span class="type">'. $episodes[$counter]['ep_type']. '</span></td>
                        </tr>';

                        $counter++;
                    }
                
                ?>
            </tbody>
        </table>

    </section>

<?php include 'footer.php';?>