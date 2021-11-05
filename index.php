
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="This is culinary blog with the best reciepies and quick searching for the dish based on ingredients you have"/>
    <meta name="keywords" content="reciepies, searching, dish, meal, breakfast, lunch, dinner, delicious,"/>
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>New recipies - GreatRecipies</title>
</head>
<body>
    <header>
            <a href="/">
                <div id="logo">
                    <img src="zdjęcia i inne/logo.png" width="300px"/>
                </div>
            </a>
    </header>

    <section><!--ramka z przyciskami wyboru dnia-->
        <span class="selection-span">
            <a  href="/?page=breakfast" style="color:brown;text-decoration: none;">
                breakfast
            </a>
        </span>
        <span class="selection-span">
            <a href="/?page=lunch" style="color:brown;text-decoration: none;">
                lunch
            </a>
        </span>
        <span class="selection-span">
            <a href="/?page=dinner" style="color:brown;text-decoration: none;">
                dinner
            </a>
        </span>
        <span class="selection-span">
            <a href="/?page=supper" style="color:brown;text-decoration: none;">
                supper
            </a>
        </span>
    </section>
    <?php
    if(isset($_GET['page'])){
        if($_GET['page'] == "dinner"){
            echo 
         '<section1>
            <div>
                <span>
                    <p>
                      TEST
                    </p>
                </span>
                <img src="zdjęcia i inne\testowejedzenie.jpg" width="300px"/>
            </div>
        </section1>';
        }
        else{
            echo '<section1>
            <div>
                <span>
                    <p>
    
                      TEST
                    </p>
                </span>
            </div>
        </section1>';;
        }
    }
    else{
        echo "<h1>nie</h1>";
    }
    ?>
                            <h3><!--powiększenie dystansu pomiędzy ramkami-->
                            </h3>
    <section1><!--ramka z propozycją wyszukiwania-->
        <div>
            <span>
                <p>

                  TEST
                    
                </p>
            </span>

            <img src="zdjęcia i inne/testowejedzenie.jpg" width="80px"/>

        </div>
    </section1>


    <sectiondown><!--obszar na samym dole strony-->
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
