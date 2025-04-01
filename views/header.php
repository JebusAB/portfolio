<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>
        <?php
            if(isset($title))
            {
                echo $title;
                $selflink = strtolower($title);
            }
            else
            {
                echo "Homepage";
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
                    <form action="homepage.php">
                        <button class="headerbutton"><h3>Homepage</h3></button>
                    </form>
                </td>
                <td>
                    <form action="skills.php">
                        <button class="headerbutton">Skills</button>
                    </form>
                </td>
                <td>
                    <form action="experiences.php">
                        <button class="headerbutton">Experiences</button>
                    </form>
                </td>
                <td>
                    <form action="hobbies.php">
                        <button class="headerbutton">Hobbies</button>
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