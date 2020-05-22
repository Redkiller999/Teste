<?php
require_once ('MovieDB.php');
$new = file_get_contents('https://api.themoviedb.org/3/movie/top_rated?api_key=b9594ee9ee78fec276f89408d4f846f9');
$new = json_decode($new, true)['results'];

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Filmes</title>
<!--css swiper -->
<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/styles.css">

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/script.js"></script>

</head>
<body>
<section class="panel">
				<h2>Top Rated</h2>
				<div class="topslider">
					<div class="swiper-container">
						<div class="swiper-wrapper">
                            <?php
                            foreach ($new as $movie) {
                               echo '<div class="swiper-slide"><a href="movie.php?id='.$movie['id'].'"><img src="https://image.tmdb.org/t/p/w185'.$movie.['poster_path'].'"><h3 class="hometitle">'.$movie['title'].'</h3></a></div>';
                           
                        }
                        ?>    
                 </div>
                </div>
</body>
</html> 