<?php
use function Laravel\Folio\name;

name('impressum');
?>

<x-guest-layout>
    <div class="container prose mx-auto max-w-prose py-12 lg:prose-lg">
        <div class="rounded-xl bg-secondary px-4 py-8">
            <a href="{{ route('welcome') }}" wire:navigate.hover>Zurück</a>

            <h2>Impressum</h2>
            <h3>Angaben gemäß den gesetzlichen Anforderungen:</h3>
            <p><strong>Name des Unternehmens:</strong> ThaiTastic Bites</p>
            <p><strong>Kontakt:</strong>
                <br>
                Website:
                <a href="https://www.thaitastic.ch" target="_blank" rel="noopener noreferrer">
                    www.thaitastic.ch
                </a>
            </p>
            <p>
                <strong>Vertreten durch:</strong> Orawan Misteli
            </p>

            <h2>Datenschutzerklärung</h2>
            <h3>Allgemein</h3>
            <p>
                Der Schutz Ihrer persönlichen Daten ist uns ein besonderes Anliegen. Wir behandeln Ihre
                personenbezogenen
                Daten
                vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.
            </p>

            <h3>Datenerfassung auf unserer Website</h3>
            <p>
                Die Nutzung unserer Website ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf
                unseren
                Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder E-Mail-Adressen) erhoben werden,
                erfolgt
                dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche
                Zustimmung
                nicht
                an Dritte weitergegeben.
            </p>
            <p>
                Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail)
                Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist
                nicht
                möglich.
            </p>

            <h3>Kontaktformular</h3>
            <p>
                Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem Anfrageformular
                inklusive
                der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der Anfrage und für den Fall von
                Anschlussfragen
                bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.
            </p>

            <h3>Änderung unserer Datenschutzbestimmungen</h3>
            <p>
                Wir behalten uns vor, diese Datenschutzerklärung anzupassen, damit sie stets den aktuellen rechtlichen
                Anforderungen entspricht oder um Änderungen unserer Leistungen in der Datenschutzerklärung umzusetzen,
                z.B.
                bei
                der Einführung neuer Services. Für Ihren erneuten Besuch gilt dann die neue Datenschutzerklärung.
            </p>

            <h3>Fragen an den Datenschutzbeauftragten</h3>
            <p>
                Wenn Sie Fragen zum Datenschutz haben, schreiben Sie uns bitte eine E-Mail oder wenden Sie sich direkt
                an
                die
                oben genannte Adresse.
            </p>
        </div>
    </div>
</x-guest-layout>
