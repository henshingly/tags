Addons:

- Ein Verzeichnis = Ein Addon
- Wenn ben�tigt eine Konfigurationsdatei /config/[Addonname]/cfg.txt (Format wie cfg.txt im in /config)
- Wenn ben�tigt eine Datei /lang/[Addonname]/lang-[LMO-Sprache].txt erstellen
- An den Anfang der Startdatei(en) des Addons diese Zeile einf�gen
  
  require(dirname(__FILE__).'/../../init.php');

  Jetzt stehen zur Verf�gung:

    # Die Konstanten 
	PATH_TO_LMO, 
	PATH_TO_ADDONDIR, 
	PATH_TO_TEMPLATEDIR, 
	PATH_TO_IMGDIR, 
	PATH_TO_LANGDIR, 
	PATH_TO_CONFIGDIR, 
	PATH_TO_JSDIR

	URL_TO_LMO
	URL_TO_ADDONDIR
	URL_TO_TEMPLATEDIR
	URL_TO_IMGDIR
	URL_TO_LANGDIR
	URL_TO_CONFIGDIR
	URL_TO_JSDIR
      Diese sind bei allen Pfadangaben zu benutzen!
      z.B. include('lmo-openfile.php'); wird zu include(PATH_TO_LMO.'/lmo-openfile.php');
      z.B. require('lmo-addondatei.php'); wird zu require(PATH_TO_ADDONDIR.'/addon/lmo-addondatei.php');

    # Alle Konfigurationsvariablen als Variablen der Form $<Addonname>_<Variablenname>
      z.B. der Wert foo=bar in der cfg-Datei des Addons brain steht als $brain_foo mit dem Wert bar zur Verf�gung

    # Alle Textvariablen als Variablen der Form $text[<Addonname>][<Textnummer>] 
      z.B. der Wert 001=Hallo in der lang-Datei des Addons brain steht als $text['brain'][1] zur Verf�gung

    # Die globalen Konfigurationsvariablen des LMO aus der config/cfg.txt

    # Die globale Sprache des LMO (das $text[xxx]-Array]

- Das �ndern der Konfigurationsvariablen geschieht im Adminbereich des LMO oder (besser) mittels 
  einer eigenen Konfigurationsoberfl�che - das Speichern der Konfigurationsvariablen �bernimmt dabei 
  immer die Datei lmo/savecfg.php (per include einzubinden)