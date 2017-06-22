<?php
$sLangName  = "Deutsch";
$iLangNr    = 0;
$aLang = array(
    'charset'                       => 'UTF-8',

    'oxprobs_module'               => 'Problemfälle',
    'oxprobs_displayarticles'      => 'Artikel',
    'oxprobs_displaygroups'        => 'Gruppierungen',
    'oxprobs_delivery'             => 'Versand/Bezahlung',
    'oxprobs_users'                => 'Benutzer',
    'oxprobs_displayorders'        => 'Bestellungen',
    'oxprobs_pictures'             => 'Bilder',
    
    'OXPROBS_GROUP_STOCK'          => 'Lagerbestand',
    'OXPROBS_GROUP_MISSING'        => 'Fehlende Daten',
    'OXPROBS_GROUP_WRONG'          => 'Fehlerhaft',
    'OXPROBS_GROUP_MISC'           => 'Verschiedenes',
    'OXPROBS_GROUP_CUSTOM'         => 'Benutzerspezifisch',
    'OXPROBS_GROUP_DOUBLE'         => 'Dubletten',
    'OXPROBS_GROUP_MISSED'         => 'Fehlend',
    'OXPROBS_GROUP_ORPHANED'       => 'Verwaist',
    'OXPROBS_GROUP_ORDERS'         => 'Bestellungen',
    'OXPROBS_GROUP_PAYMENT'        => 'Bezahlung',
    'OXPROBS_DOWNLOAD'             => 'Download',
    'OXPROBS_PRINT'                => 'Drucken',
    'OXPROBS_NOSTOCK'              => 'Kein Lagerbestand',
    'OXPROBS_MISSSTOCKINFO'        => 'Kein Lagerbestand, Standard-Lager, ohne Lieferzeit',
    'OXPROBS_STOCKALERT'           => 'Geringer Lagerbestand',
    'OXPROBS_NOREMINDER'           => 'Keine Lagerbestandswarnung',
    'OXPROBS_NOREMINDVALUE'        => 'Kein Min-Wert für Lagerbestand',
    'OXPROBS_NOARTNUM'             => 'Keine Art.-Nr.',
    'OXPROBS_NOSHORTDESC'          => 'Ungenügende Kurzbeschreibung',
    'OXPROBS_NOPIC'                => 'Ohne Produktbild',
    'OXPROBS_DUPLICATE'            => 'Doppelte Art.-Nr. oder EAN',
    'OXPROBS_DBLACTIVE'            => 'Doppelt aktiviert',
    'OXPROBS_LONGPERIOD'           => 'Zu langer Aktionszeitraum',
    'OXPROBS_INVPERIOD'            => 'Ungültiger Aktionszeitraum',
    'OXPROBS_NOPRICE'              => 'Ohne VK-Preisangabe',
    'OXPROBS_NOBUYPRICE'           => 'Ungültige EK-Preisangabe',
    'OXPROBS_NOEAN'                => 'Ohne EAN',
    'OXPROBS_EANCHK'               => 'Fehlerhafte EAN',
    'OXPROBS_NOMPN'                => 'Ohne Hersteller Art.-Nr.',
    'OXPROBS_NOCAT'                => 'Ohne Kategoriezuordnung',
    'OXPROBS_ORPHAN'               => 'Verwaiste Varianten',
    'OXPROBS_NODESC'               => 'Leere Beschreibung',
    'OXPROBS_NOMANU'               => 'Ohne Hersteller',
    'OXPROBS_NOVEND'               => 'Ohne Lieferant',
    'OXPROBS_ACTIVE'               => 'Status aktiv',
    'OXPROBS_INACTIVE'             => 'Status inaktiv',
    'OXPROBS_NOSTOCK_INFO'         => 'Nachfolgende Artikel und Varianten haben keinen oder einen negativen Lagerbestand. <br />'
                                    . '(Es werden nur Artikel mit Lieferstatus = Standard, Offline und nicht bestellbar berücksichtigt)',
    'OXPROBS_MISSSTOCKINFO_INFO'   => 'Nachfolgende Artikel und Varianten haben keinen oder einen negativen Lagerbestand und keine Angabe des Lieferdatums oder der Lieferzeit. <br />'
                                    . '(Es werden nur Artikel mit Lieferstatus = Standard berücksichtigt)',
    'OXPROBS_STOCKALERT_INFO'      => 'Nachfolgende Artikel und Varianten haben einen geringen Lagerbestand erreicht. <br />'
                                    . '(Lagerbestand unterhalb des eingestellten Warn-Wertes. Es werden nur Artikel mit Lieferstatus = Standard berücksichtigt)',
    'OXPROBS_NOREMINDER_INFO'      => 'Nachfolgende Artikel besitzen keine Warnung für den Lagerbestand',
    'OXPROBS_NOREMINDVALUE_INFO'   => 'Nachfolgende Artikel und Varianten besitzen keinen Minimalwert für den Lagerbestand',
    'OXPROBS_NOARTNUM_INFO'        => 'Nachfolgende Artikel und Varianten besitzen keine Artikel-Nummer',
    'OXPROBS_NOSHORTDESC_INFO'     => 'Nachfolgende Artikel und Varianten besitzen keine oder eine ungenügende Kurzbeschreibung',
    'OXPROBS_NOPIC_INFO'           => 'Nachfolgende Artikel und Varianten haben kein Produktbild oder nur das Platzhalter-Bild.',
    'OXPROBS_DUPLICATE_INFO'       => 'Nachfolgende Artikel und Varianten besitzen die gleiche Artikel-Nummer oder die gleiche EAN.',
    'OXPROBS_DBLACTIVE_INFO'       => 'Nachfolgende Artikel und Varianten sind sowohl über die Option "Aktiv" als auch über einen Zeitraum aktiviert.',
    'OXPROBS_LONGPERIOD_INFO'      => 'Nachfolgende Artikel und Varianten sind für einen zu langen Zeitraum aktiviert.',
    'OXPROBS_INVPERIOD_INFO'       => 'Nachfolgende Artikel und Varianten sind für einen ungültigen Zeitraum aktiviert.',
    'OXPROBS_NOPRICE_INFO'         => 'Nachfolgende Artikel und Varianten haben keinen oder einen negativen Verkaufs-Preis.',
    'OXPROBS_NOBUYPRICE_INFO'      => 'Nachfolgende Artikel und Varianten haben keinen oder zu geringen Einkaufs-Preis.',
    'OXPROBS_NOEAN_INFO'           => 'Nachfolgende Artikel und Varianten besitzen keine EAN.',
    'OXPROBS_EANCHK_INFO'          => 'Nachfolgende Artikel und Varianten besitzen eine fehlerhafte EAN.',
    'OXPROBS_NOMPN_INFO'           => 'Nachfolgende Artikel und Varianten besitzen keine Hersteller Artikel-Nummer',
    'OXPROBS_NOCAT_INFO'           => 'Nachfolgende Artikel und Varianten sind ohne Zuordnung zu einer Kategorie.<br />'
                                    . '(Diese werden evtl. an Preissuchmaschinen exportiert, sind aber im Shop nicht sichtbar)',
    'OXPROBS_ORPHAN_INFO'          => 'Nachfolgende Varianten sind aktiv, obwohl der Stammartikel deaktiviert ist.<br />'
                                    . '(Diese werden evtl. an Preissuchmaschinen exportiert, sind aber im Shop nicht sichtbar)',
    'OXPROBS_NODESC_INFO'          => 'Nachfolgende Artikel und Varianten sind ohne eine Beschreibung.',
    'OXPROBS_NOMANU_INFO'          => 'Nachfolgende Artikel besitzen keinen Hersteller.',
    'OXPROBS_NOVEND_INFO'          => 'Nachfolgende Artikel besitzen keinen Lieferanten.',
    'OXPROBS_ACTIVE_INFO'          => 'Nachfolgende Artikel sind aktiv.',
    'OXPROBS_INACTIVE_INFO'        => 'Nachfolgende Artikel sind inaktiv.',

    'OXPROBS_INVACTIONS'           => 'Ungültige Aktionen',
    'OXPROBS_INVCATS'              => 'Ungültige Kategorien',
    'OXPROBS_INVMAN'               => 'Ungültige Hersteller',
    'OXPROBS_INVVEN'               => 'Ungültige Lieferant',
    'OXPROBS_INVACTIONS_INFO'      => 'Nachfolgende Aktionen sind noch nicht gültig, abgelaufen oder inaktiv. <br />'
                                    . 'Sie enthalten aber aktive Artikel, die trotzdem bestellt werden können.',
    'OXPROBS_INVCATS_INFO'         => 'Nachfolgende Kategorien, deren Eltern oder Großeltern sind deaktiviert. <br />'
                                    . 'Sie enthalten aber aktive Artikel, die trotzdem bestellt werden können.',
    'OXPROBS_INVMAN_INFO'          => 'Nachfolgende Hersteller sind deaktiviert oder ohne ein Icon. <br />'
                                    . 'Sie enthalten aber aktive Artikel, die trotzdem bestellt werden können.',
    'OXPROBS_INVVEN_INFO'          => 'Nachfolgende Lieferanten sind deaktiviert oder ohne ein Icon. <br />'
                                    . 'Sie enthalten aber aktive Artikel, die trotzdem bestellt werden können.',
    'OXPROBS_DEACT_ACT'            => 'Inaktive Aktion',
    'OXPROBS_EXP_ACT'              => 'Abgelaufene Aktion',
    'OXPROBS_PROSPEC_ACT'          => 'Zukünftige Aktion',
    'OXPROBS_DEACT_CATS'           => 'Inaktive Kategorie',
    'OXPROBS_DEACT_PARENTCAT'      => 'Inaktive Elternkategorie',
    'OXPROBS_DEACT_GRANDCAT'       => 'Inaktive Großelternkategorie',
    'OXPROBS_DEACT_MAN'            => 'Inaktiver Hersteller',
    'OXPROBS_NOICON_MAN'           => 'Kein Icon zugewiesen',
    'OXPROBS_DEACT_VEN'            => 'Inaktiver Lieferant',
    'OXPROBS_NOICON_VEN'           => 'Kein Icon zugewiesen',
    'OXPROBS_STOCK_STANDARD'       => 'Standard',
    'OXPROBS_STOCK_OFFLINE'        => 'offline',
    'OXPROBS_STOCK_NOTBUYABLE'     => 'nicht bestellbar',

    'OXPROBS_DELSETCOST'           => 'Versandarten und -kosten',
    'OXPROBS_DELSETPAY'            => 'Versand- und Zahlungsarten',
    'OXPROBS_CUSTPAY'              => 'Benutzergruppen und Zahlungsarten',
    'OXPROBS_STATE'                => 'Status',
    'OXPROBS_DELSETCOST_INFO'      => '',
    'OXPROBS_DELSETPAY_INFO'       => '',
    
    'OXPROBS_USRDBL_NAME'          => 'Gleicher Name und Ort',
    'OXPROBS_USRDBL_ADDR'          => 'Gleiche Straße und Ort',
    'OXPROBS_USRDBL_NAME_INFO'     => 'Nachfolgende Benutzer sind mehrfach mit gleichem Namen und Ort im Shop vorhanden (aber mit unterschiedlichen Logins).',
    'OXPROBS_USRDBL_ADDR_INFO'     => 'Nachfolgende Benutzer sind mehrfach mit gleicher Straße und Ort im Shop vorhanden (aber mit unterschiedlichen Logins).',
    'OXPROBS_LOGINS'               => 'Logins',
    
    'OXPROBS_READY_ORDERS'         => 'Auslieferbare Bestellungen',
    'OXPROBS_PAY_OPENCIA'          => 'Offene Vorkasse',
    'OXPROBS_PAY_OPENINVOICES'     => 'Offene Rechnungen',
    'OXPROBS_READY_ORDERS_INFO'    => 'Nachfolgende Bestellungen können versandt werden, da entweder bezahlt sind oder die Bezahlung später erfolgen wird (z.B. Nachnahme bei der Auslieferung)',
    'OXPROBS_PAY_OPENCIA_INFO'     => 'Nachfolgende Bestellungen mit Bezahlart "Vorkasse" sind noch nicht bezahlt worden',
    'OXPROBS_PAY_OPENINVOICES_INFO' => 'Nachfolgende Bestellungen mit Bezahlart "auf Rechnung" sind noch nicht bezahlt worden',
    'OXPROBS_ORDER_ITEMS'          => 'Bestellte Artikel',
    'OXPROBS_ORDER_SUM'            => 'Bestellsumme',
    'OXPROBS_ORDER_REMARK'         => 'Anmerkung des Kunden',

    'OXPROBS_MANU_MISSPICS'        => 'Hersteller ohne Bilder',
    'OXPROBS_MANU_ORPHPICS'        => 'Verwaiste Hersteller-Bilder',
    'OXPROBS_VEND_MISSPICS'        => 'Lieferant ohne Bilder',
    'OXPROBS_VEND_ORPHPICS'        => 'Verwaiste Lieferanten-Bilder',
    'OXPROBS_CAT_MISSPICS'         => 'Kategorien ohne Bilder',
    'OXPROBS_CAT_ORPHPICS'         => 'Verwaiste Kategorie-Bilder',
    'OXPROBS_ART_MISSPICS'         => 'Artikel ohne Bilder',
    'OXPROBS_ART_ORPHPICS'         => 'Verwaiste Produkt-Bilder',
    'OXPROBS_MANU_MISSPICS_INFO'   => 'Nachfolgende Hersteller sind keine Bilder zugeordnet oder das zugeordnete Bild wurde nicht gefunden.<br>Pfad:',
    'OXPROBS_MANU_ORPHPICS_INFO'   => 'Nachfolgende Bild-Dateien sind keinem Hersteller zugeordnet.'
                                    . '<br>Pfad:',
    'OXPROBS_VEND_MISSPICS_INFO'   => 'Nachfolgende Lieferanten sind keine Bilder zugeordnet oder das zugeordnete Bild wurde nicht gefunden.<br>Pfad:',
    'OXPROBS_VEND_ORPHPICS_INFO'   => 'Nachfolgende Bild-Dateien sind keinem Lieferanten zugeordnet.'
                                    . '<br>Pfad:',
    'OXPROBS_CAT_MISSPICS_INFO'    => 'Nachfolgende Kategorien sind keine Bilder zugeordnet oder das zugeordnete Bild wurde nicht gefunden.<br>Pfad:',
    'OXPROBS_CAT_ORPHPICS_INFO'    => 'Nachfolgende Bild-Dateien sind keiner Kategorie zugeordnet.'
                                    . '<br>Pfad:',
    'OXPROBS_ART_MISSPICS_INFO'    => 'Nachfolgende Artikel sind keine Bilder zugeordnet oder das zugeordnete Bild wurde nicht gefunden.<br>Pfad:',
    'OXPROBS_ART_ORPHPICS_INFO'    => 'Nachfolgende Bild-Dateien sind keinem Artikel zugeordnet.'
                                    . '<br>Pfad:',
    'OXPROBS_SUBDIR_FILE'          => 'Ordner/Datei',
    'OXPROBS_NOPIC_DEF'            => 'Kein Bild definiert',
    'OXPROBS_NOPIC_FOUND'          => 'Datei nicht gefunden',
    'OXPROBS_ORPHPIC_FOUND'        => 'verwaiste Bild-Datei gefunden',
    'OXPROBS_DEACT_USER'           => 'deaktivierter Benutzer',
    'OXPROBS_UNCONF_NEWS'          => 'unbestätigte Newletter-Anmeldung',
    'OXPROBS_CONF_NEWS'            => 'bestätigte Newletter-Anmeldung',
    
    'OXPROBS_NUMOF_ENTRIES'        => 'Einträge gefunden.',

    'SHOP_MODULE_GROUP_OXPROBS_ARTICLESETTINGS'   => 'Artikel-Analyse',
    'SHOP_MODULE_sOxProbsEANField'                => 'Zu prüfendes EAN-Feld',
    'SHOP_MODULE_sOxProbsEANField_oxean'          => 'EAN',
    'SHOP_MODULE_sOxProbsEANField_oxdistean'      => 'Hersteller EAN',
    'SHOP_MODULE_sOxProbsMinDescLen'              => 'Mindest-Textlänge der Artikel-Beschreibung',
    'SHOP_MODULE_sOxProbsBPriceMin'               => 'Mindest-Faktor für EK-Preis (z.B. 0.5 = 50% des VK)',
    'SHOP_MODULE_sOxProbsMaxActionTime'           => 'Maximale Dauer einer Aktion (in Tagen)',
    'SHOP_MODULE_bOxProbsProductPreview'          => 'Artikel-Vorschau bei Hover',
    'SHOP_MODULE_bOxProbsProductActiveOnly'       => 'Nur aktive Artikel anzeigen',
    'SHOP_MODULE_bOxProbsProductTimeActive'       => 'Artikeln "Aktiv von/bis" berücksichtigen',
    'SHOP_MODULE_GROUP_OXPROBS_USERSETTINGS'      => 'Benutzer-Analyse',
    'SHOP_MODULE_sOxProbsNameLength'              => 'Mindest-Länge von Vor- und Nachname',
    'SHOP_MODULE_GROUP_OXPROBS_ORDERSETTINGS'     => 'Bestellungs-Analyse',
    'SHOP_MODULE_sOxProbsOrderPaidLater'          => 'Bezahlarten, die nach dem Versand bezahlt werden (z.B. oxidinvoice,oxidcashondel)',
    'SHOP_MODULE_sOxProbsOrderPaidbyCIA'          => 'Bezahlart, die für Vorkasse verwendet wird (z.B. oxidpayadvance)',
    'SHOP_MODULE_sOxProbsOrderPaidbyInvoice'      => 'Bezahlart, die für Rechnungskauf verwendet wird (z.B. oxidinvoice)',
    'SHOP_MODULE_sOxProbsOrderIgnoredRemark'      => 'Diesen Bemerkungstext ignorieren',
    'SHOP_MODULE_GROUP_OXPROBS_PICTURESETTINGS'   => 'Bilder Analyse',
    'SHOP_MODULE_sOxProbsPictureDirs'             => 'Dieses Verzeichnis überprüfen',
    'SHOP_MODULE_sOxProbsPictureDirs_master'      => 'Master Verzeichnis',
    'SHOP_MODULE_sOxProbsPictureDirs_generated'   => 'Generated Verzeichnis',
    'SHOP_MODULE_GROUP_OXPROBS_INCLUDESETTINGS'   => 'Benutzerdefinierte Analysen',
    'SHOP_MODULE_aOxProbsArticleIncludeFiles'     => 'Benutzerdefinierte Artikel-Analysen<br>(je ein Report in eine Zeile)',
    'SHOP_MODULE_aOxProbsGroupIncludeFiles'       => 'Benutzerdefinierte Gruppierungs-Analysen<br>(je ein Report in eine Zeile)',
    'SHOP_MODULE_aOxProbsDeliveryIncludeFiles'    => 'Benutzerdefinierte Versand-/Bezahlungs-Analysen<br>(je ein Report in eine Zeile)',
    'SHOP_MODULE_aOxProbsUsersIncludeFiles'       => 'Benutzerdefinierte Benutzer-Analysen<br>(je ein Report in eine Zeile)',
    'SHOP_MODULE_aOxProbsOrdersIncludeFiles'      => 'Benutzerdefinierte Bestellungs-Analysen<br>(je ein Report in eine Zeile)',
    'SHOP_MODULE_aOxProbsPicturesIncludeFiles'    => 'Benutzerdefinierte Bilder-Analysen<br>(je ein Report in eine Zeile)',
    'SHOP_MODULE_GROUP_OXPROBS_DOWNLOAD'          => 'Download / Export',
    'SHOP_MODULE_bOxProbsHeader'                  => 'Spaltenüberschriften exportieren',
    'SHOP_MODULE_sOxProbsSeparator'               => 'Trennzeichen',
    'SHOP_MODULE_sOxProbsSeparator_comma'         => ',&nbsp;&nbsp; (Komma)',
    'SHOP_MODULE_sOxProbsSeparator_semicolon'     => ';&nbsp;&nbsp; (Semikolon)',
    'SHOP_MODULE_sOxProbsSeparator_tab'           => '&rarr; (Tabulator)',
    'SHOP_MODULE_sOxProbsSeparator_pipe'          => '|&nbsp;&nbsp; (Senkrechter Strich)',
    'SHOP_MODULE_sOxProbsSeparator_tilde'         => '&sim;&nbsp; (Tilde)',
    'SHOP_MODULE_bOxProbsQuote'                   => 'Spalten mit Anführungszeichen begrenzen',
    'SHOP_MODULE_bOxProbsStripTags'               => 'HTML Tags entfernen',
);

?>