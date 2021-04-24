@extends('layouts.app')
@section('content')
    @guest()
    <div class="header bg-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-left col-md-6">
                        <h1 class="display-2 text-silentGreen">Impressum</h1>
                        <p class="lead text-white">Diensteanbieter gemäß § 5 TMG</p>
                        <p class="text-white">
                            Humboldt-Universität zu Berlin, Unter den Linden 6, 10099 Berlin
                            <br/>
                            Vertreten durch: Anna Faschinger (Initiatorin)
                            <br/>
                            E-Mail: info@silentmoon-hu.de
                            <br/>
                            <br/>
                            Verantwortlicher im Sinne des § 55 Abs. 2 RStV
                            <br/>
                            Prof. Hans-Christoph Keller
                            <br/>
                            Humboldt-Universität zu Berlin, Unter den Linden 6, 10099 Berlin
                        </p>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-8 text-left col-md-6">
                        <h1 class="display-2 text-silentGreen">Datenschutz</h1>
                        <p class="text-white">Wir freuen uns über Ihr Interesse an unserer Website. Der Schutz Ihrer Privatsphäre ist für uns sehr wichtig. Nachstehend informieren wir Sie ausführlich über den Umgang mit Ihren Daten.</p>
                        <h2 class="text-white">Speicherung von Zugriffdaten in Server-Logfiles</h2>
                        <p class="text-white">
                            Sie können unsere Webseiten besuchen,
                            ohne Angaben zu Ihrer Person zu machen.
                            Wir speichern lediglich Zugriffsdaten in
                            sogenannten Server-Logfiles, wie z.B. den
                            Namen der angeforderten Datei, Datum und
                            Uhrzeit des Abrufs, übertragene Datenmenge
                            und den anfragenden Provider. Diese Daten
                            werden ausschließlich zur Sicherstellung
                            eines störungsfreien Betriebs der Seite und
                            zur Verbesserung unseres Angebots ausgewertet
                            und erlauben uns keinen Rückschluss auf Ihre Person.
                        </p>
                        <h2 class="text-white">Datenerhebung und ‑Verwendung bei Erstellung einer Teilnehmer-ID</h2>
                        <p class="text-white">
                            Wir erheben, speichern und verarbeiten Ihre Daten
                            für die Bestellabwicklung Ihres Kaufs und eventuelle
                            spätere Gewährleistungsabwicklung. Personenbezogene Daten
                            werden erhoben, wenn Sie uns diese im Rahmen Ihrer
                            Warenbestellung oder bei Eröffnung eines Kundenkontos oder
                             bei der Registrierung zum Newsletter freiwillig mitteilen.
                            Welche Daten erhoben werden, ist aus den jeweiligen
                            Eingabeformularen ersichtlich. Bei Anmeldung zum Newsletter
                            wird Ihre E‑Mail-Adresse für eigene Werbezwecke genutzt,
                            bis Sie sich vom Newsletter abmelden. Die Abmeldung ist
                            jederzeit über einen dafür vorgesehenen Link im Newsletter
                            möglich. Eine Weitergabe Ihrer personenbezogenen Daten
                            erfolgt von uns im Rahmen der Ausführung des Auftrags
                            eingesetzte Dienstleister (Transporteur, Logistiker,
                            Zahlungsdienstleister, Banken). Nach vollständiger
                            Abwicklung des Vertrages oder Löschung Ihres Kundenkontos
                            werden Ihre Daten für die weitere Verwendung gesperrt und
                            nach Ablauf der steuer- und handelsrechtlichen Aufbewahrungsfristen
                            gelöscht, sofern Sie nicht ausdrücklich in eine weitere Nutzung
                            Ihrer Daten eingewilligt haben oder wir uns eine darüber hinausgehende
                            Datenverwendung vorbehalten, die gesetzlich erlaubt ist und über die
                            wir Sie nachstehend informieren. Die Löschung Ihres Kundenkontos ist
                            jederzeit möglich und kann über eine dafür vorgesehene Funktion im Kundenkonto erfolgen.
                        </p>
                        <h2 class="text-white">Anmeldung zum E‑mail-Newsletter</h2>
                        <p class="text-white">
                            Wenn Sie sich gesondert zum Newsletter angemeldet haben,
                            wird Ihre E‑Mail-Adresse für eigene Werbezwecke genutzt.
                            Ihnen wird regelmäßig ein E‑Mail-Newsletter zugesandt,
                            bis Sie sich vom Newsletter abmelden. Die Abmeldung ist
                            jederzeit möglich, ohne dass Ihnen hierfür andere als die
                            Übermittlungskosten nach den Basistarifen Ihres Zugangsanbieters entstehen.
                        </p>
                        <h2 class="text-white">Verwendung von Cookies</h2>
                        <p class="text-white">
                            Um den Besuch unserer Website attraktiv zu gestalten und
                            die Nutzung bestimmter Funktionen zu ermöglichen, verwenden
                            wir auf verschiedenen Seiten sogenannte Cookies. Hierbei
                            handelt es sich um kleine Textdateien, die auf Ihrem
                            Endgerät abgelegt werden. Einige der von uns verwendeten
                            Cookies werden nach dem Ende der Browser-Sitzung, also
                            nach Schließen Ihres Browsers, wieder gelöscht (sog. Sitzungs-Cookies).
                            Andere Cookies verbleiben auf Ihrem Endgerät und ermöglichen uns
                            oder unseren Partnerunternehmen, Ihren Browser beim nächsten
                            Besuch wiederzuerkennen (persistente Cookies).
                            Sie können Ihren Browser so einstellen, dass Sie über das
                            Setzen von Cookies informiert werden und einzeln über deren
                            Annahme entscheiden oder die Annahme von Cookies für bestimmte
                            Fälle oder generell ausschließen. Bei der Nichtannahme von
                            Cookies kann die Funktionalität unserer Website eingeschränkt sein.
                        </p>
                        <h2 class="text-white">Datensicherheit</h2>
                        <p class="text-white">
                            Ihre Zahlungsdaten werden im Bestellprozess verschlüsselt über das Internet übertragen. Wir sichern unsere Website und sonstigen Systeme durch technische und organisatorische Maßnahmen gegen Verlust, Zerstörung, Zugriff, Veränderung und Verbreitung Ihrer Daten durch unbefugte Personen. Sie sollten Ihre Zugangsinformationen stets vertraulich behandeln und das Browserfenster schließen, wenn Sie die Kommunikation mit uns beendet haben, insbesondere wenn Sie den Computer gemeinsam mit anderen nutzen. Wir speichern den Vertragstext und senden Ihnen die Bestelldaten und unsere AGB per E‑Mail zu. Die AGB können Sie jederzeit auch hier einsehen. Ihre vergangenen Bestellungen können Sie in unserem Kunden-Login-Bereich einsehen.
                        </p>
                        <h2 class="text-white">Auskunftsrecht und Kontaktmöglichkeit</h2>
                        <p class="text-white">
                            Sie haben ein Recht auf unentgeltliche Auskunft über die bei uns zu Ihrer Person gespeicherten Daten sowie ggf. ein Recht auf Berichtigung, Sperrung oder Löschung dieser Daten. Bei Fragen zur Erhebung, Verarbeitung oder Nutzung Ihrer personenbezogenen Daten, bei Auskünften, Berichtigung, Sperrung oder Löschung von Daten sowie Widerruf erteilter Einwilligungen oder Widerspruch gegen eine bestimmte Datenverwendung wenden Sie sich bitte direkt an uns über die Kontaktdaten in unserem Impressum.
                        </p>
                        <h1 class="display-2 text-silentGreen">Erklärung zur digitalen Barrierefreiheit</h1>
                        <p class="text-white">Die Humboldt-Universität zu Berlin ist jederzeit bemüht, ihren Webauftritt so barrierefrei wie möglich zu gestalten. Vorgaben dazu werden im Gesetz über die barrierefreie Informations- und Kommunikationstechnik Berlin (BIKTG Bln) festgeschrieben. Die technischen Anforderungen zur Barrierefreiheit ergeben sich aus der BITV 2.0.
                            Diese Erklärung zur digitalen Barrierefreiheit gilt für die Angebote unter www.hu-berlin.de, www.ub.hu-berlin.de, www.international.hu-berlin.de, alles-beginnt-mit-einer-frage.de, www.humboldt-labor.de, open-humboldt.de
                        </p>
                        <h2 class="text-white">Hilfe bei Zugangsproblemen</h2>
                        <p class="text-white">
                            Hinweise auf barrierefreie Inhalte können Sie senden an:
                        </p>
                        <p class="text-white">
                            Humboldt-Universität zu Berlin, Unter den Linden 6, 10099 Berlin
                            <br/>
                            Abteilung Kommunikation, Marketing und Veranstaltungsmanagement
                            <br/>
                            E-Mail: info@silentmoon-hu.de
                            <br/>
                            Onlineredaktion
                            <br/>
                            Unter den Linden 6
                            <br/>
                            10099 Berlin
                            <br/>
                            hu-online@hu-berlin.de
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom  zindex-100">
        </div>
    </div>
    <div class="container mt--10 pb-5"></div>
    @endguest
@endsection
