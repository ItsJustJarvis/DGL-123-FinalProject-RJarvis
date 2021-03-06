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
        Date:           12/08/2021  

        USAGE INSTRUCTIONS:

        1. Create a new database in phpMyAdmin named: rjarvis_simpsons_archive
        2. Import rjarvis_simpsons_archive.sql dump file located in repository
        3. Load webpage: localhost/dgl-123-finalproject-rjarvis

    -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>RJarvis Simpsons Archive</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <?php require "characters.php"; ?>
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
                                <form method="POST" action="">
                                    <h3 class="form__heading">Select characters to show</h3>
                                    <ul class="form__items">
                                        <?php list_characters(); ?>
                                    </ul>
                                    <input class="form__button" type="submit" value="Show Characters" name="show" />
                                </form>
                                <form action="add_character.php">
                                    <h3>Want to add a new character to the list?</h3>
                                    <input type="submit" value="Add New Character">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="characters__container layout-container">
                    <div class="characters__row layout-row">
                        <ul class="characters__items">
                            <?php showCharacterCards() ?>
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