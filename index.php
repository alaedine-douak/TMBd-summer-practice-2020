
<?php
include 'conf/info.php';

$title = "TMdb Summer practice 2020";
require_once 'includes/header.php';

include_once 'api/api_popular_movie.php';
include_once 'api/api_genre_movie.php';
?>

    <div class="select-sub-nav">
        <div class="dropdown-genre">
            <select class="genre-select" id="selected-genre" onchange="getGenreValue()">
                <option value="">select genre of movie ...</option>
                <?php
                    foreach ($genre_movie->genres as $genre_movie){
                        echo '<option value="'.$genre_movie->id.'">'.$genre_movie->name.'</option>';
                    }
                ?>
            </select>
        </div>
        <div class="dropdown-year">
            <select class="year-select" id="selected-year">
                <option value="">select year of movie ...</option>
                <?php
                    for($i = 1980; $i <= 2020; $i++){
                        echo '<option value="'.$i.'" >'.$i.'</option>';
                    }
                ?>
            </select>
        </div>
    </div>




    <div class="movie-container">
        <?php
            foreach ($popular_movies->results as $movies){

                $poster = '';

                if($movies->poster_path == null) {
                    $poster = '';
                }else {
                    $poster = $img_url.$movies->poster_path;
                }

                echo '
                    <div class="movie-card">
                        <div class="movie-header movie-cover">
                            <a href="includes/movie.php?id='. $movies->id.'">
                                <img src="'.$poster.'">
                            </a>
                        </div>
                        <div class="movie-info">
                            <div class="movie-content-header">
                                <label>'.$movies->title.'</label>
                                <span>'.substr($movies->release_date,0,4).'</span>
                            </div>
                        </div>
                    </div>
                ';
            }
        ?>
    </div>






<?php require_once "includes/footer.php"; ?>

