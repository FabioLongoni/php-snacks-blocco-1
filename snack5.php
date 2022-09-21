<?php 
$text = "Il Purgatorio è diviso in sette 'cornici', dove le anime scontano la loro inclinazione al peccato per purificarsi prima di accedere al Paradiso. Al contrario dell'Inferno, dove i peccati si aggravavano maggiore era il numero del cerchio, qui alla base della montagna, nella prima cornice, stanno coloro che si sono macchiati delle colpe più gravi, mentre alla sommità, vicino al Paradiso terrestre, i peccatori più lievi. Le anime non vengono punite in eterno, e per una sola colpa, come nel primo regno, ma scontano una pena pari ai peccati commessi durante la vita.";
$newText = explode('.',$text);
?>

<h1>Purgatorio</h1>
<p><?=$text?></p>


<h1>Paragrafi Purgatorio</h1>
<?php 
for ( $i = 0; $i < count($newText); $i++) {
  $p = $newText[$i];
  ?>
  <p>
    <?php 
      echo "$p";
    ?>
  </p>
  <?php
}
?>


