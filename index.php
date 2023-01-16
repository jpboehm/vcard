<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Your name - VCard ">
    <title>Your name - your profession </title>
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Font Awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Tillana" rel="stylesheet">
    <link href="./css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <div class="nameLogo_container">
            <h1 class="nameLogo"><strong>Your name</strong></h1>
            <h2 class="nameLogo_subline1">Your passion</h2>
        </div>
    </header>
    <main>
        <div class="link_container row">
            <div class="link_box col"><a
                    href="#" class="link"
                    target="_blank" rel="noopener noreferrer">
                    <i class="fa-solid fa-rocket"></i>
                    <br /><label for="link_box">Link 1</label>
                </a>
            </div>
            <div class="link_box col"><a
                    href="#"
                    class="link" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-github"></i>
                    <br /><label for="link_box">Link 2</label>
                </a>
            </div>
            <div class="link_box col"><a href="#" class="link"
                    target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-instagram"></i>
                    <br /><label for="link_box">Link 3</label>
                </a>
            </div>
        </div>
        <div class="fotocopy_container">
            
            <a href="https://pixabay.com/de/photos/mann-buchen-lesen-portr%c3%a4t-mauer-1869624/" rel="nofollow" target="_blank" class="fotocopy_text">&copy;&nbsp;Photographer&nbsp;name
            </a>

          
        </div>
    </main>
    <footer>
        <div class="footer_menu">
            <p>
                <span style="cursor:pointer" class="col" id="impressum" onclick="openNav()">Impressum &
                    Datenschutz</span><br>
                <span class="copyright">&copy; 
                    <?php echo date("Y");?>  &middot; Your Name
                </span>
            </p>

        </div>
    </footer>

    <div id="overlayDatenschutz" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <div>
                <h1>Impressum & Datenschutz</h1>
                <br><br>
                <h2>Impressum</h2>
                <h3>Dein Name</h3>
                    <br><br>
                    <p><b>Kontaktaufnahme:</b></p>
                    <p><strong>Your Name</strong>
                    </p>
                    <div>Your adress</div>
                    <div dir="auto">Telefon:&nbsp;<a href="tel:#">+49 (0) 40 1234-5678</a></div>
                    <div class="mail" dir="auto">E-Mail:&nbsp;<a class="ContactData"
                            title="Anfrage zu Dein Name über das Impressum der Visitenkarte"
                            href="mailto:#">Muster@mail.de</a></div>
                    <p>&nbsp;</p>
                    <p><b>Haftungsausschluss &ndash; Disclaimer:</b></p>
                    <p>Haftung f&uuml;r Inhalte</p>
                    <p>Alle Inhalte unseres Internetauftritts wurden mit gr&ouml;&szlig;ter Sorgfalt und nach bestem
                        Gewissen erstellt. F&uuml;r die Richtigkeit, Vollst&auml;ndigkeit und Aktualit&auml;t der
                        Inhalte k&ouml;nnen wir jedoch keine Gew&auml;hr &uuml;bernehmen. Als Diensteanbieter sind wir
                        gem&auml;&szlig; &sect; 7 Abs.1 TMG f&uuml;r eigene Inhalte auf diesen Seiten nach den
                        allgemeinen Gesetzen verantwortlich. Nach &sect;&sect; 8 bis 10 TMG sind wir als Diensteanbieter
                        jedoch nicht verpflichtet, &uuml;bermittelte oder gespeicherte fremde Informationen zu
                        &uuml;berwachen oder nach Umst&auml;nden zu forschen, die auf eine rechtswidrige T&auml;tigkeit
                        hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den
                        allgemeinen Gesetzen bleiben hiervon unber&uuml;hrt.</p>
                    <p>Eine diesbez&uuml;gliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntniserlangung einer
                        konkreten Rechtsverletzung m&ouml;glich. Bei Bekanntwerden von den o.g. Rechtsverletzungen
                        werden wir diese Inhalte unverz&uuml;glich entfernen.</p>
                    <p>Haftungsbeschr&auml;nkung f&uuml;r externe Links</p>
                    <p>Unsere Webseite enth&auml;lt Links auf externe Webseiten Dritter. Auf die Inhalte dieser direkt
                        oder indirekt verlinkten Webseiten haben wir keinen Einfluss. Daher k&ouml;nnen wir f&uuml;r die
                        &bdquo;externen Links&ldquo; auch keine Gew&auml;hr auf Richtigkeit der Inhalte &uuml;bernehmen.
                        F&uuml;r die Inhalte der externen Links sind die jeweilige Anbieter oder Betreiber (Urheber) der
                        Seiten verantwortlich.</p>
                    <p>Die externen Links wurden zum Zeitpunkt der Linksetzung auf eventuelle Rechtsverst&ouml;&szlig;e
                        &uuml;berpr&uuml;ft und waren im Zeitpunkt der Linksetzung frei von rechtswidrigen Inhalten.
                        Eine st&auml;ndige inhaltliche &Uuml;berpr&uuml;fung der externen Links ist ohne konkrete
                        Anhaltspunkte einer Rechtsverletzung nicht m&ouml;glich. Bei direkten oder indirekten
                        Verlinkungen auf die Webseiten Dritter, die au&szlig;erhalb unseres Verantwortungsbereichs
                        liegen, w&uuml;rde eine Haftungsverpflichtung ausschlie&szlig;lich in dem Fall nur bestehen,
                        wenn wir von den Inhalten Kenntnis erlangen und es uns technisch m&ouml;glich und zumutbar
                        w&auml;re, die Nutzung im Falle rechtswidriger Inhalte zu verhindern.</p>
                    <p>Diese Haftungsausschlusserkl&auml;rung gilt auch innerhalb des eigenen Internetauftrittes
                        &bdquo;<em>Name Ihrer Domain</em>&ldquo; gesetzten Links und Verweise von Fragestellern,
                        Blogeintr&auml;gern, G&auml;sten des Diskussionsforums. F&uuml;r illegale, fehlerhafte oder
                        unvollst&auml;ndige Inhalte und insbesondere f&uuml;r Sch&auml;den, die aus der Nutzung oder
                        Nichtnutzung solcherart dargestellten Informationen entstehen, haftet allein der Diensteanbieter
                        der Seite, auf welche verwiesen wurde, nicht derjenige, der &uuml;ber Links auf die jeweilige
                        Ver&ouml;ffentlichung lediglich verweist.</p>
                    <p>Werden uns Rechtsverletzungen bekannt, werden die externen Links durch uns unverz&uuml;glich
                        entfernt.</p>
                    <p>&nbsp;</p>
                    <p><b> Urheberrecht</b></p>
                    <p>Die auf unserer Webseite ver&ouml;ffentlichen Inhalte und Werke unterliegen dem deutschen
                        Urheberrecht (<a href="http://www.gesetze-im-internet.de/bundesrecht/urhg/gesamt.pdf"
                            rel="noopener noreferrer" target="_blank"
                            data-extlink="">http://www.gesetze-im-internet.de/bundesrecht/urhg/gesamt.pdf</a>) . Die
                        Vervielf&auml;ltigung, Bearbeitung, Verbreitung und jede Art der Verwertung des geistigen
                        Eigentums in ideeller und materieller Sicht des Urhebers au&szlig;erhalb der Grenzen des
                        Urheberrechtes bed&uuml;rfen der vorherigen schriftlichen Zustimmung des jeweiligen Urhebers
                        i.S.d. Urhebergesetzes (<a href="http://www.gesetze-im-internet.de/bundesrecht/urhg/gesamt.pdf"
                            rel="noopener noreferrer" target="_blank"
                            data-extlink="">http://www.gesetze-im-internet.de/bundesrecht/urhg/gesamt.pdf</a>&nbsp;).
                        Downloads und Kopien dieser Seite sind nur f&uuml;r den privaten und nicht kommerziellen
                        Gebrauch erlaubt. Sind die Inhalte auf unserer Webseite nicht von uns erstellt wurden, sind die
                        Urheberrechte Dritter zu beachten. Die Inhalte Dritter werden als solche kenntlich gemacht.
                        Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen
                        entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte
                        unverz&uuml;glich entfernen.</p>
                    <p>&nbsp;</p>
                    <h2>Datenschutz</h2>
                    <br><br>

                    <p><strong>Allgemeiner Hinweis und Pflichtinformationen</strong></p>
                    <p><strong>Benennung der verantwortlichen Stelle</strong></p>
                    <p>Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:</p>
                    <p><span id="s3-t-ansprechpartner">Dein Name</span>

                    </p>
                    <p></p>
                    <p>Die verantwortliche Stelle entscheidet allein oder gemeinsam mit anderen über die Zwecke und
                        Mittel
                        der Verarbeitung von personenbezogenen Daten (z.B. Namen, Kontaktdaten o. Ä.).</p>
                    <p><strong>Widerruf Ihrer Einwilligung zur Datenverarbeitung</strong></p>
                    <p>Nur mit Ihrer ausdrücklichen Einwilligung sind einige Vorgänge der Datenverarbeitung möglich. Ein
                        Widerruf Ihrer bereits erteilten Einwilligung ist jederzeit möglich. Für den Widerruf genügt
                        eine
                        formlose Mitteilung per E-Mail. Die Rechtmäßigkeit der bis zum Widerruf erfolgten
                        Datenverarbeitung
                        bleibt vom Widerruf unberührt.</p>
                    <p><strong>Recht auf Beschwerde bei der zuständigen Aufsichtsbehörde</strong></p>
                    <p>Als Betroffener steht Ihnen im Falle eines datenschutzrechtlichen Verstoßes ein Beschwerderecht
                        bei
                        der zuständigen Aufsichtsbehörde zu. Zuständige Aufsichtsbehörde bezüglich
                        datenschutzrechtlicher
                        Fragen ist der Landesdatenschutzbeauftragte des Bundeslandes, in dem sich der Sitz unseres
                        Unternehmens befindet. Der folgende Link stellt eine Liste der Datenschutzbeauftragten sowie
                        deren
                        Kontaktdaten bereit: <a
                            href="https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html"
                            target="_blank">https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html</a>.
                    </p>
                    <p><strong>Recht auf Datenübertragbarkeit</strong></p>
                    <p>Ihnen steht das Recht zu, Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erfüllung eines
                        Vertrags automatisiert verarbeiten, an sich oder an Dritte aushändigen zu lassen. Die
                        Bereitstellung
                        erfolgt in einem maschinenlesbaren Format. Sofern Sie die direkte Übertragung der Daten an einen
                        anderen Verantwortlichen verlangen, erfolgt dies nur, soweit es technisch machbar ist.</p>
                    <p><strong>Recht auf Auskunft, Berichtigung, Sperrung, Löschung</strong></p>
                    <p>Sie haben jederzeit im Rahmen der geltenden gesetzlichen Bestimmungen das Recht auf
                        unentgeltliche
                        Auskunft über Ihre gespeicherten personenbezogenen Daten, Herkunft der Daten, deren Empfänger
                        und
                        den Zweck der Datenverarbeitung und ggf. ein Recht auf Berichtigung, Sperrung oder Löschung
                        dieser
                        Daten. Diesbezüglich und auch zu weiteren Fragen zum Thema personenbezogene Daten können Sie
                        sich
                        jederzeit über die im Impressum aufgeführten Kontaktmöglichkeiten an uns wenden.</p>
                    <p><strong>SSL- bzw. TLS-Verschlüsselung</strong></p>
                    <p>Aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte, die Sie an uns als
                        Seitenbetreiber senden, nutzt unsere Website eine SSL-bzw. TLS-Verschlüsselung. Damit sind
                        Daten,
                        die Sie über diese Website übermitteln, für Dritte nicht mitlesbar. Sie erkennen eine
                        verschlüsselte
                        Verbindung an der „https://“ Adresszeile Ihres Browsers und am Schloss-Symbol in der
                        Browserzeile.
                    </p>
                    <p><strong>Server-Log-Dateien</strong></p>
                    <p>In Server-Log-Dateien erhebt und speichert der Provider der Website automatisch Informationen,
                        die
                        Ihr Browser automatisch an uns übermittelt. Dies sind:</p>
                    <ul>
                        <li>Besuchte Seite auf der Domain Des Providers</li>
                        <li>Datum und Uhrzeit der Serveranfrage</li>
                        <li>Browsertyp und Browserversion</li>
                        <li>Verwendetes Betriebssystem</li>
                        <li>Referrer URL</li>
                        <li>Hostname des zugreifenden Rechners</li>
                        <li>IP-Adresse</li>
                    </ul>
                    <p>Es findet keine Zusammenführung dieser Daten mit anderen Datenquellen statt. Grundlage der
                        Datenverarbeitung bildet Art. 6 Abs. 1 lit. b DSGVO, der die Verarbeitung von Daten zur
                        Erfüllung
                        eines Vertrags oder vorvertraglicher Maßnahmen gestattet.</p>
                    <p><strong>Weiteres</strong></p>
                    <p>Es werden keine Cookies auf dieser Seite erstellt oder anderweitige personenbezogene Daten vom
                        Seitenbetreiber erhoben. Lediglich die Daten, welche der Provider erfasst. </p>
            </div>
        </div>
    </div>
    <script>
        //Nav DSGVO
        function openNav() {
            document.getElementById("overlayDatenschutz").style.width = "100%";
        }
        function closeNav() {
            document.getElementById("overlayDatenschutz").style.width = "0%";
        }

    </script>
</body>

</html>