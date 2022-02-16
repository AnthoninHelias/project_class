<?php
include 'Comparable.php';
include 'ISport.php';
include 'Sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'Club.php';
include 'data.php';

$connect = new PDO('mysql:host=127.0.0.1;dbname=gestionclub',username:'root',password:'');
foreach($connect->query('select * from club')as $row)
{
    print_r($row);
}

echo '<h1>Liste des clubs: </h1> <a href="index.php"></a><br>';
foreach($club as $keyclub =>$valueClub)
{
    echo "<a href=result.php?id={$keyclub}>{$keyclub} - {$valueClub->getNomClub()} {$valueClub->getNbPoint()}</a><br>";
}
if(isset($_GET['id'])) {
    echo '<h2>Liste des sport de ' . $club[$_GET['id']]->getNomClub() . '</h2>';
    $sp1 = $club[$_GET['id']]->getLesSports();
    foreach ($sp1 as $keySp1 => $valueSp1) {
        echo $valueSp1->getDescription();
    }
}



echo "<br>
        Formulaire ID Club
        <br>
        <form method='post' name='formIdClub' action='result.php'>
            <label for='club-select'>CLUB:</label>
            <select name='id' id='club-select'>
                <option value=''>--Choisir un club--</option>
                ";
                foreach ($club as $kFormClub => $vFormClub)
                {
                    echo "<option value='".$vFormClub->getIdClub()."'>".$vFormClub->getNomClub()."</option>";
                }
echo "</select>
    
    <button type='submit'>ENVOIE</button>
</form>";

