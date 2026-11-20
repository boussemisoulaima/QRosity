<br><br><br><br><br><br>

<h1><?php echo $titre;?></h1><br />

<?php
if (isset($oeuvre)) {

    echo $oeuvre->ovr_id;
    echo " -- ";
    echo $oeuvre->ovr_intitule;

    echo "<br><br>";

    echo "<img src='".base_url()."images/".$oeuvre->ovr_image."' width='300'>";

    echo "<br><br>";

    echo $oeuvre->ovr_text;

}
else {
    echo ("Aucune œuvre connue !");
}
?>
