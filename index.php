<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orar</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>    

<?php
date_default_timezone_set('EET');
$day="Tuesday";//date("l");

switch($day){
    case "Monday":
        $array=array("Matematica","Matematica","Geografie","Informatica","Informatica","Engleza");
    break;
    case "Tuesday":
        $array=array("Informatica","Informatica","Biologie","Romana","Fizica","Fizica");
    break;
    case "Wednesday":
        $array=array('Informatica','Informatica','Sport','Franceza','Matematica','Engleza','Fizica');
    break;
    case "Thursday":
        $array=array('Economie','Dirigentie','Romana','Romana','Istorie');
    break;
    case "Friday":
        $array=array('Matematica','Holocaust','Romana','Informatica','Franceza','Chimie','Religie');
    break;
}
?>

<div class="container py-4">
    <table class="table table-bordered border-primary border-2">
        <thead>
            <tr class="table-primary">
                <th scope="col">Ora</th>
                <?php
                $h=8;
                foreach($array as $x){
                    if ($h<11){
                        echo "<th scope=\"col\">",$h,":00","-",$h+=1,":50","</th>";
                    }
                    else{
                        echo "<th scope=\"col\">",$h,":10","-",$h+=1,":00","</th>";
                    }
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php print $day ?></th>
                <?php 
                foreach($array as $x){
                    echo "<td>",$x,"</td>";
                }
                ?>
            </tr>
        </tbody>
    </table>
</div>

<?php
$hour=date("H");
$minute=date("i");
?>

<div class="container text-center">
    <div class="big-text">
        <?php
        $h=8;
        foreach($array as $x){
            if($hour>7 && $hour<15){
                if($hour<11){
                    if($minute>=50){
                        print "pauza";
                        break;
                    }
                    else{
                        echo $array[$hour-$h];
                        break;
                    }
                }
                else{
                    if($minute<=10){
                        print "pauza";
                        break;
                    }
                    else{
                        echo $array[$hour-$h];
                        break;
                    }
                }
            }
            else{
                print "nu esti la scoala";
                break;
            }
        }
        ?>
    </div>
    <div class="small-text"><?php echo $hour,":",$minute; ?></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>