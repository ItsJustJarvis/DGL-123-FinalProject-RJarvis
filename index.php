<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 
        Document Details:

        Course:         DGL-123 - PHP
        Assignment:     Final Project
        Filename:       index.php
        Author:         Reeve Jarvis
        Student#:       N0189975
        Date:           12/03/2021  
    -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simpsons Archives</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <header id="masthead" class="site-header layout-container">
        <a href="index.php">
            <img class="site-header__logo" src="images/logo.svg" alt="Logo" />
        </a>
    </header>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <div id="main" class="site-main">
                <div class="form__container layout-container">
                    <div class="form__row layout-row">
                        <div class="form__itemsContainer">
                            <div class="form__imageContainer">
                                <img src="images/simpsons.jpg" alt="Simpsons" class="form__image" />
                            </div>

                            <div class="form__card">
                                <h3 class="form__heading">Select characters to show</h3>

                                <form method="POST" action="">
                                    <ul class="form__items">
                                        <li class="form__item">
                                            <label for="homer"> Homer Simpson </label>

                                            <input id="homer" type="checkbox" name="homer" />
                                        </li>
                                        <li class="form__item">
                                            <label for="marge"> Marge Simpson </label>

                                            <input id="marge" type="checkbox" name="marge" />
                                        </li>
                                        <li class="form__item">
                                            <label for="bart"> Bart Simpson </label>

                                            <input id="bart" type="checkbox" name="bart" />
                                        </li>
                                        <li class="form__item">
                                            <label for="lisa"> Lisa Simpson </label>

                                            <input id="lisa" type="checkbox" name="lisa" />
                                        </li>
                                        <li class="form__item">
                                            <label for="maggie"> Maggie Simpson </label>

                                            <input id="maggie" type="checkbox" name="maggie" />
                                        </li>
                                        <li class="form__item">
                                            <label for="moe"> Moe Szyslak </label>

                                            <input id="moe" type="checkbox" name="moe" />
                                        </li>
                                    </ul>

                                    <input class="form__button" type="submit" value="Show Characters" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="characters__container layout-container">
                    <div class="characters__row layout-row">
                        <ul class="characters__items">
                            <?php include "characters.php" ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let audio = document.querySelectorAll(".audio");
        audio.forEach(element => element.volume = 0.5);
    </script>
</body>

</html>