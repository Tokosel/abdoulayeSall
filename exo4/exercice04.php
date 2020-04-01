<!DOCTYPE html>
<html>
<head>
	<title>Exercice 04</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Abdoulaye SALL" />
	<meta name="description" content="Sonatel Academy, projet_02 php"/>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<div class="all">
	<div class="form">
		<form action="" method="POST">
			<h3>Exercice 04 Serie_Tabaleu_Fonctions</h3>
			<div class="nice-three"></div>
			<textarea class="in-name"  type="text" name="phrase" placeholder="Remplissez ici des phrases"><?php if(isset($_POST['phrase'])){echo $_POST['phrase'];}?></textarea>

			<input class="btn btn-validate" type="submit" name="valider" value="Valider">
		</form>
	</div>
	<div class="result">
			<h2 class="titre">Résultat de l'algorithme</h2>
					<?php

                        if(isset($_POST['valider'])) {
                            if(empty($_POST['phrase'])){
                                    echo "<h2>Vueillez donner des phrases svp</h2>";
                                }
                                else{
                                    $phrases = $_POST['phrase'];
                                    function size($chaine){
                                    for ($i=0; true ; $i++) { 
                                        if (!isset($chaine[$i])) {
                                            break;
                                        }
                                        }
                                        return $i;
                                    }

                                    function Table_Phrase($valeur)
                                    {
                                        $n = str_replace(CHR(32), "", $valeur);
                                        $chaine = preg_split("/[.]+/", $valeur);
                                        $size = 0;
                                        $size = size($chaine);
                                        $debut = 0;
                                        $fin = $size;
                                        $T[] = array();
                                            if (($chaine[0] == "" && $chaine[$size - 1] == "")) {
                                                $debut = 1;
                                                $fin = $size - 2;
                                                for ($i = $debut; $i < $fin; $i++) {
                                                    if (preg_match("#[.]#", $chaine)) {
                                                        if (strlen($chaine[$i]) <= 200) {
                                                            $T[] = $chaine[$i];
                                                        }else{
                                                            echo "La phrase n ° ".$i." a dépassé 200 caractère";
                                                        }
                                                    }
                                                }
                                            } elseif (($chaine[0] != "") && ($chaine[$size - 1] == "") || $chaine[$size-1] == " ") {
                                                $debut = 0;
                                                $fin = $size - 1;
                                                for ($i = $debut; $i < $fin; $i++) {
                                                    if (preg_match("#[.]#", $valeur)) {
                                                        if (strlen($chaine[$i]) <= 200) {
                                                            $T[] = $chaine[$i];
                                                        }else{
                                                            echo "La phrase n ° ".$i." a dépassé 200 caractère";
                                                        }
                                                    }
                                                }
                                            } elseif (($chaine[0] != "") && $chaine[$size - 1] != "") {
                                                $debut = 0;
                                                $fin = $size;
                                                for ($i = $debut; $i < $fin; $i++) {
                                                    if (preg_match("#[.]#", $valeur)) {
                                                        if (strlen($chaine[$i]) <= 200) {
                                                            $T[] = $chaine[$i];
                                                        }else{
                                                            echo "La phrase n ° ".$i." a dépassé 200 caractère";
                                                        }
                                                    }
                                                }

                                            }
                                            return $T;
                                    }
                                    
                                    function del_espace($phrases){
                                    $new='';
                                    for ($i=0; $i <size($phrases) ; $i++) { 
                                        if ($phrases[$i] != '') {
                                            $new .= $phrases[$i];
                                        }
                                    }
                                        return $new;
                                    }
                                    echo "<h2>Tableau des phrases corrigées</h2>";

                                    $tableau_phrases = Table_Phrase($phrases);
                                    foreach ($tableau_phrases as $key=>$phrases){
                                        $phrases=del_espace($phrases);
                                        if($key!=0) {
                                            ?>
                                            <table>
                                                <tr>
                                                    <td><textarea disabled="true" class="in-name"><?php echo $phrases; ?></textarea> </td>
                                                </tr>
                                            </table><br>
                                        <?php
                                        }
                                    }
                                }
                            
                        }
                    ?>
	</div>
</div>

</body>
</html>