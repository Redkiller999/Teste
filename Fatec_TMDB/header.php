<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php echo $title ?> - 
      <?php echo $sitename ?> | 
    </title>
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <h1>
      <?php echo $sitename ?>
    </h1>
    <p>
      <small>"
        <?php echo $tagline ?>"
      </small>
    </p>
    <form action="search.php" method="get">
      <input type="text" name="search" placeholder="Insira o Título Aqui" required>
      <select name="channel" required>
        <option value="movie" selected="selected">Filme
        </option>
        <option value="tv">TV Show
        </option>
      </select>
      <button type="submit">Buscar
      </button>
   