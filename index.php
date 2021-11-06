
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="This is culinary blog with the best reciepies and quick searching for the dish based on ingredients you have"/>
    <meta name="keywords" content="reciepies, searching, dish, meal, breakfast, lunch, dinner, delicious,"/>
    <link rel="stylesheet" href="http://localhost//CSS/style.css" type="text/css"/>
    <title>New recipies - GreatRecipies</title>
</head>

<body>

    <header>
            <a href="/">
                <div id="logo">
                    <img src="CSS/zdjęcia i inne/logo.png" width="300px"/>
                </div>
            </a>
    </header>

    <section><!--ramka z przyciskami wyboru dnia-->
        <span class="selection-span">
            <a  href="/" style="color:cornsilk;text-decoration: none;">
                All
            </a>
        </span>
        <span class="selection-span">
            <a  href="/?page=breakfast" style="color:cornsilk;text-decoration: none;">
                breakfast
            </a>
        </span>
        <span class="selection-span">
            <a href="/?page=lunch" style="color:cornsilk;text-decoration: none;">
                lunch
            </a>
        </span>
        <span class="selection-span">
            <a href="/?page=dinner" style="color:cornsilk;text-decoration: none;">
                dinner
            </a>
        </span>
        <span class="selection-span">
            <a href="/?page=supper" style="color:cornsilk;text-decoration: none;">
                supper
            </a>
        </span>
    </section>

    <h3><!--powiększenie dystansu pomiędzy ramkami-->
    </h3>

    <section1 class="ramka-na-wyszukiwanie"><!--ramka z propozycją wyszukiwania-->
        <div>
            <span class="przyciski-wyszukiwania">
                <p>
                    <center>
                        Don't have a lot of food in your fridge?
                        <br/>
                        Use ouer search engine:
                        <br/>
                            <a  href="searching.html" style="color:cornsilk;text-decoration: none;">
                                Searching
                            </a>
                    </center>
                </p>
            </span>

            
        </div>
    </section1>

    <h3><!--powiększenie dystansu pomiędzy ramkami-->
    </h3>

    <?php
    if(isset($_GET['page'])){
        if($_GET['page'] == "dinner"){
            echo 
         '<section2>
            <div>
                <span>
                    <p>
                      TEST
                    </p>
                </span>
                <img src="zdjęcia i inne\testowejedzenie.jpg" width="300px"/>
            </div>
        </section2>';
        }
        else{
            echo '<section2>
            <div>
                <span>
                    <p>
    
                      TEST
                    </p>
                </span>
            </div>
        </section2>';;
        }
    }
    else{
        echo "<h1>nie</h1>";
    }
    ?>




    <!--Stopka-->
    <sectiondown>
        <span>
            <div id="">
                &copy GreatRecipies 2021 All rights reserved. Coping and modyfing and spreading without agreement is forbidden.
                <br/>
                Logo is based on logo from:
                    <a href="https://pl.freepik.com/wektory/tlo">freepik.com</a>

            </div>

        </span>
    </sectiondown>

</body>
</html>
