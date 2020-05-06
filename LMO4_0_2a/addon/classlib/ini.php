<?
/**
 *
 * classlib Addon for LigaManager Online
 * Copyright (C) 2003 by Tim Schumacher
 * timme@uni.de /
 *
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
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
 *
 *
 * <br>�nderungen:
 * <br> 20.07.04 2.0 Start
 * <br> 22.07.04 2.1 Pdf Class hinzugef�gt.
 * <br> 23.07.04 2.1 Bugfix in methode $liga->writeFile teamdetails gingen verloren
 * <br> 31.07.04     relative Pfadangabe in class.ezpdf.php ersetzt
 * <br> 01.08.04 2.2 Spielbericht (reportURL) zur class Partie hinzugef�gt
 * <br>              Beim Einlesen der Runden wird jetzt der Pokalmodus ber�cksichtigt
 * <br> 20.09.04 2.3 Class iniFile function getIniFile
 * <br>              Beim Auslesen einer URL, die keyValues enth�lt
 * <br>              fehlten die Gleichheitszeichen
 * <br> 22.09.04 2.3 Pokalmodus in loadLiga implementiert
 * <br> 22.11.04 2.4 Mal wieder keyValue gefunden und in keyValues ge�ndert
 * <br>              classes.php Ist der aktuelle Spieltag nicht gesetzt wird $aktSpTag = 1
 * <br> 02.12.04 2.5 writeFile / loadFile ge�ndert
 * <br>              Das komplette File wird zun�chst in ein array geladen und zwischengespeichert.
 * <br>              Beim Speichern wird dieses zun�chst mit den Werten der Objekte abgeglichen und
 * <br>              dann im Anschluss komplett ins file geschrieben. Dadurch gehen keine Informationen verloren
 * <br>              Auch Erweiterungen des LigaFiles (z.B, zus�tzliche Sektionen wie beim MittellangTeamName
 * <br>              Addon werden erkannt und geschrieben.
 * <br> 20.12.04 2.6 neue Fktion gamesSorted hinzugef�gt (Sortierung der Partien)
 * <br> 17.01.05 2.6 SP1 bugFixes und neue html functionen hinzugef�gt
 * <br> 01.02.05 2.6 SP1 Mal wieder keyValue gefunden und in keyValues ge�ndert in function strafen()
 * <br> 16.02.05 2.7 Klasse Partie fkt. gToreString() und hToreString() �berarbeitet. Bei greenTable wird 0 bzw. 0*
 *									 zur�ckgegeben.
 * <br> 10.04.05 2.7 (Dank an Gowi) update Funktionen f�r addons implementiert
 * @author    Tim Schumacher <webobjects@gmx.net>
 * @package classLib
 * @access public
 * @version 2.7
*/

require_once(dirname(__FILE__).'/../../init.php');
// classlib Dateien
require_once(PATH_TO_ADDONDIR."/classlib/classes.php");
require_once(PATH_TO_ADDONDIR."/classlib/functions.php");
require_once(PATH_TO_ADDONDIR."/classlib/html_output.php");

// Weitere Klassen einbinden
// class iniFile
require_once(PATH_TO_ADDONDIR."/classlib/classes/ini/cIniFileReader.inc");
// class pdf
require_once(PATH_TO_ADDONDIR."/classlib/classes/pdf/class.ezpdf.php");
// classes for image manipulation
if (file_exists(PATH_TO_ADDONDIR."/classlib/classes/phpthumb/phpthumb.class.php") ){
	require_once(PATH_TO_ADDONDIR."/classlib/classes/phpthumb/phpthumb.class.php");
}
if (!defined('CLASSLIB_VERSION_NR')) define('CLASSLIB_VERSION_NR','2.7');
if (!defined('CLASSLIB_VERSION')) define('CLASSLIB_VERSION',' (classlib&nbsp;'.CLASSLIB_VERSION_NR.')');
if (!defined('CLASSLIB_IMG_TYPES')) define('CLASSLIB_IMG_TYPES',$classlib_img_types);
if (!defined('CLASSLIB_INFO')) define('CLASSLIB_INFO',"Classlib ".CLASSLIB_VERSION_NR." &#169; <a href=\"mailto:webobjects@gmx.net?subject=LMO-KLASSENBIBLIOTHEK\" title=\"Send mail\">Timme</a>");



















































































































if (!defined('CLASSLIB_VERSlON')) define('CLASSLIB_VERSlON',"Classlib ".CLASSLIB_VERSION." &#169; <a href=\"mailto:webobjects@gmx.net?subject=LMO-KLASSENBIBLIOTHEK\" title=\"Send mail\">Timme</a> � <a href=\"http://web33.t-webby.de/phpBB2\">LMO-Group 2004</a>");
?>