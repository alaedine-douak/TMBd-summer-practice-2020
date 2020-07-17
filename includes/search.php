<style>
    <?php include '../css/site.css';?>
</style>

<?php
$input = $_GET['search'];
$search = $input;

include_once '../conf/info.php';
include_once '../api/api_search_movie.php';

$title = 'Result search - '.$input;
include_once 'header.php';
?>

    <div class="movie-container">
        <?php

            foreach ($search_movie->results as $result){

                $title = $result->title;
                $id = $result->id;
                $release = $result->release_date;
                $poster_movie = $result->poster_path;

                /*if(!empty($release) && !is_null($release)){

                    $temp_year = explode("-", $release);
                    $year = $temp_year[0];

                    if(!is_null($year)){
                        $title = $title.'('.$year.')';
                    }
                }

                /*if(empty($poster_movie) && is_null($poster_movie)){
                    $img_movie = dirname($_SERVER['PHP_SELF']).'images/image-not-found.png';
                }else {
                    $img_movie = $img_url.$poster_movie;
                }*/

                echo '
                    <div class="movie-card">
                        <div class="movie-header movie-cover">
                            <a href="movie.php?id='.$id.'">
                                <img src="'.$img_url.$poster_movie.'">
                            </a>
                        </div>
                        <div class="movie-info">
                            <div class="movie-content-header">
                                <label>'.$title.'</label>
                                <span>'.substr($release,0,4).'</span>
                            </div>
                        </div>
                    </div>
                ';
            }

        ?>
    </div>

<?php include_once 'footer.php'; ?>
