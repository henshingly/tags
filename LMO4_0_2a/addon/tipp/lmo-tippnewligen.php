<?php
/** Liga Manager Online 4
  *
  * http://lmo.sourceforge.net/
  *
  * This program is free software; you can redistribute it and/or
  * modify it under the terms of the GNU General Public License as
  * published by the Free Software Foundation; either version 2 of
  * the License, or (at your option) any later version.
  * 
  * This program is distributed in the hope that it will be useful,
  * but WITHOUT ANY WARRANTY; without even the implied warranty of
  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
  * General Public License for more details.
  *
  * REMOVING OR CHANGING THE COPYRIGHT NOTICES IS NOT ALLOWED!
  *
  */
  
  
require_once(PATH_TO_ADDONDIR."/tipp/lmo-tipptest.php");
if (($action == "tipp") && ($todo == "newligen")) {
  if ($newpage == 1) {
    $users = array("");
    $pswfile = PATH_TO_ADDONDIR."/tipp/".$tipp_tippauthtxt;
    
    $users = file($pswfile);
    array_unshift($users,'');
    
    $gef = 0;
    for($i = 1; $i < count($users) && $gef == 0; $i++) {
      $dummb = explode('|', $users[$i]);
      if ($_SESSION['lmotippername'] == $dummb[0]) {
        // Nick gefunden
        $gef = 1;
      }
    }
    if ($gef == 0) {
      exit;
    }
     
    if ($xtipperligen != "") {
      foreach($xtipperligen as $key => $value) {
        $tippfile = PATH_TO_ADDONDIR."/tipp/".$tipp_dirtipp.$value."_".$_SESSION['lmotippername'].".tip";
        $st = -1;
        require(PATH_TO_ADDONDIR."/tipp/lmo-tippsavefile.php"); // Tipp-Datei erstellen
        $auswertdatei = fopen(PATH_TO_ADDONDIR."/tipp/".$tipp_dirtipp."auswert/".$value.".aus", "ab");
        flock($auswertdatei, 2);
        fputs($auswertdatei, "\n[".$_SESSION['lmotippername']."]\n");
        fputs($auswertdatei, "Team=".$dummb[5]."\n");
        fputs($auswertdatei, "Name=".$dummb[3]."\n");
        flock($auswertdatei, 3);
        fclose($auswertdatei);
      }
    }
  } // end ($newpage==1)
?>
<table class="lmoInner" cellspacing="0" cellpadding="0" border="0">
  <caption><?php echo $_SESSION['lmotippername'];if($_SESSION['lmotipperverein']!=""){echo " - ".$_SESSION['lmotipperverein'];} ?></caption>
  <tr>
    <th align="center"><?php echo $text['tipp'][135]; ?></th>
  </tr>
  <tr>
    <td align="left"><?php 
  if($newpage!=1){ ?>
      <form name="lmotippedit" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="action" value="tipp">
        <input type="hidden" name="todo" value="newligen">
        <input type="hidden" name="newpage" value="1"><?php 
  $ftype=".l98"; 
  require(PATH_TO_ADDONDIR."/tipp/lmo-tippnewdir.php"); 
    if($i!=0){ ?>
        <input class="lmo-formular-button" type="submit" name="xtippersub" value="<?php echo $text['tipp'][11]; ?>"><?php 
    } ?>
      </form><?php 
  }?>
    </td>
  </tr><?php
  
  if($newpage==1){ /* Anmeldung erfolgreich */?>
  <tr>
    <td align="center"><?php echo getMessage($text['tipp'][20]); ?></td>
  </tr><?php 
  }
  
  if($newpage==1 || $i==0){ /* zur�ck zur �bersicht */?>
  <tr>
    <td class="lmoFooter" align="right"><a href="<?php echo $_SERVER['PHP_SELF']."?action=tipp&amp;todo=" ?>"><?php echo $text[5]." ".$text['tipp'][1]; ?></a></td>
  </tr><?php 
  }?>    
</table><?php 
} 
$file=""; ?>