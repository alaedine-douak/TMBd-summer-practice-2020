<?php

$ch_genre_movie = curl_init();

curl_setopt($ch_genre_movie , CURLOPT_URL, "https://api.themoviedb.org/3/genre/movie/list?api_key=".$api_key);
curl_setopt($ch_genre_movie , CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch_genre_movie , CURLOPT_HEADER, FALSE);
curl_setopt($ch_genre_movie , CURLOPT_HTTPHEADER, array("Accept: application/json"));

$response_genre_movie  = curl_exec($ch_genre_movie );
curl_close($ch_genre_movie );
$genre_movie = json_decode($response_genre_movie );


