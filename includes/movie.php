<style>
    <?php include '../css/site.css';?>
</style>

<?php
include '../conf/info.php';
$current_movie_id = $_GET['id'];
include_once '../api/api_movie_id.php';

$title = $movie_id->title;
require_once 'header.php';
?>

    <?php
        if(isset($_GET['id'])){
            $current_movie_id = $_GET['id'];
        }
    ?>

    <?php
        function minutes_to_hours($time, $format = '%02d:%02d')
        {
            if ($time < 1) {
                return;
            }
            $hours = floor($time / 60);
            $minutes = ($time % 60);
            return sprintf($format, $hours, $minutes);
        }
    ?>

    <div class="movie-review">
        <img src="<?php echo $img_url; ?><?php echo $movie_id->poster_path; ?>" class="poster-img">
        <div class="movie-card-review">
            <img src="<?php echo $img_url_original; ?><?php echo $movie_id->backdrop_path; ?>" class="background-img">
            <div class="movie-detail">
                <div class="movie-detail-title">
                    <div class="title"><?php echo $movie_id->title; ?><span><?php echo minutes_to_hours($movie_id->runtime,'%02d h %02d min')  ; ?></span></div>
                    <div class="tagline"><?php echo $movie_id->tagline; ?></div>
                    <div class="rating"><?php echo $movie_id->vote_average.'/10'; ?></div>
                    <span class="likes"><?php echo $movie_id->vote_count; ?></span>
                </div>
            </div>
        </div>
        <div class="movie-description">
            <div class="column1">
                <?php
                foreach ($movie_id->genres as $genre){
                    echo '<div class="tags">'.$genre->name.'</div>';
                }
                ?>
            </div>
            <div class="column2">
                <p><?php echo $movie_id->overview; ?></p>
            </div>
        </div>
    </div>




<?php require_once "footer.php";?>



