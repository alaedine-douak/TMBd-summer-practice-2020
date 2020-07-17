<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/site.css"/>

    <title>Welcome to - <?php echo $title; ?></title>
</head>
<body>

    <div class="container">
        <nav class="nav-bar">
            <a href="../index.php" class="nav-bar-title">Movies</a>
            <!--<ul class="">
                <li>
                    <a>play now</a>
                </li>
                <li>
                    <a>latest</a>
                </li>
                <li>
                    <a>Top rated</a>
                </li>
            </ul>-->
            <form action="includes/search.php" method="get" class="search-bar">
                <input type="search" name="search" class="search-input" placeholder="search for a movies ..." required>
                <input type="submit" value="Search" class="search-submit">
            </form>
        </nav>
        <div class="container-content">





