<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>
        <?php
        if(isset($title))
        {
            echo $title;
            if($title=="Accueil")
            {
                $selflink = "homepage";
            }
            elseif($title=="Compétences")
            {
                $selflink = "skills";
            }
            elseif($title=="Expériences")
            {
                $selflink = "experiences";
            }
            elseif($title=="Loisirs")
            {
                $selflink = "hobbies";
            }
            else
            {
                $selflink = "homepage";
            }
        }
        else
        {
            echo "Accueuil";
            $selflink = "homepage";
        }
        ?>
    </title>
    <link rel="stylesheet" href="res\style.css">
</head>
<body>
<div>
    <table class="headertable">
        <tr>
            <td>++++++++</td>
            <td>
                <form action="homepage-fr.php">
                    <button class="headerbutton"><h3>Accueil</h3></button>
                </form>
            </td>
            <td>
                <form action="skills-fr.php">
                    <button class="headerbutton">Compétences</button>
                </form>
            </td>
            <td>
                <form action="experiences-fr.php">
                    <button class="headerbutton">Expériences</button>
                </form>
            </td>
            <td>
                <form action="hobbies-fr.php">
                    <button class="headerbutton">Loisirs</button>
                </form>
            </td>
            <td>
                    <ul class="languagepicker roundborders">
                        <a href="<?php echo $selflink?>.php"><li><img src="http://i64.tinypic.com/fd60km.png"/>English</li></a>
                        <a href="<?php echo $selflink?>-fr.php"><li><img src="http://i65.tinypic.com/300b30k.png"/>Français</li></a>
                    </ul>
            </td>
            <td>++++++++</td>
        </tr>
    </table>
</div>
<br>