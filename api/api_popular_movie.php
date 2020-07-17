<?php

$ch_popular_movie = curl_init();

curl_setopt($ch_popular_movie, CURLOPT_URL, "http://api.themoviedb.org/3/movie/popular?api_key=" . $api_key);
curl_setopt($ch_popular_movie, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch_popular_movie, CURLOPT_HEADER, FALSE);
curl_setopt($ch_popular_movie, CURLOPT_HTTPHEADER, array("Accept: application/json"));

$response_popular_movie = curl_exec($ch_popular_movie);
curl_close($ch_popular_movie);
$popular_movies = json_decode($response_popular_movie);