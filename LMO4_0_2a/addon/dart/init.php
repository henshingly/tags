<?php
$ligaType=stripslashes($wert);
/*
 * Dart-Addon: Fix fuer manuelle Sortierung!
 */
if ($ligaType == "dart") {
  $team_pos = 49;
} else {
  $team_pos = 35;
}
?>