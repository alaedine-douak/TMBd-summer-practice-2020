<?php

$ch_search_movie = curl_init();

curl_setopt($ch_search_movie, CURLOPT_URL, "http://api.themoviedb.org/3/search/movie?api_key=".$api_key."&query=".$search);
curl_setopt($ch_search_movie, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch_search_movie, CURLOPT_HEADER, FALSE);
curl_setopt($ch_search_movie, CURLOPT_HTTPHEADER, array("Accept: application/json"));

$response_search_movie = curl_exec($ch_search_movie);
curl_close($ch_search_movie);
$search_movie = json_decode($response_search_movie);
