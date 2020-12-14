<?php
    require 'api.php'
    $movie = $TopRated = file_get_contents('https://api.themoviedb.org/3/discover/movie?api_key=5ec279387e9aa9488ef4d00b22acc451&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_genres=true
    '.$_GET['page']);
    $movie = $TopRated = json_decode($TopRated, true);

?>
