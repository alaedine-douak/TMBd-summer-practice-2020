<?php

$ch_movie_id = curl_init();

curl_setopt($ch_movie_id,CURLOPT_URL, "http://api.themoviedb.org/3/movie/".$current_movie_id."?api_key=".$api_key);
curl_setopt($ch_movie_id, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch_movie_id, CURLOPT_HEADER, FALSE);
curl_setopt($ch_movie_id, CURLOPT_HTTPHEADER, array("Accept: application/json"));

$response_movie_id = curl_exec($ch_movie_id);
curl_close($ch_movie_id);
$movie_id = json_decode($response_movie_id);