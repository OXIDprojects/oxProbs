<?php
$sLangName  = "English";
$iLangNr    = 1;
$aLang = array(
    'charset'                       => 'UTF-8',

    'oxprobs_module'               => 'Problematic Data',
    'oxprobs_displayarticles'      => 'Products',
    'oxprobs_displaygroups'        => 'Arrangements',
    'oxprobs_delivery'             => 'Delivery/Payment',
    'oxprobs_users'                => 'Users',
    'oxprobs_displayorders'        => 'Orders',
    'oxprobs_pictures'             => 'Pictures',
    
    'OXPROBS_GROUP_STOCK'          => 'Stock',
    'OXPROBS_GROUP_MISSING'        => 'Missing Data',
    'OXPROBS_GROUP_WRONG'          => 'Wrong Data',
    'OXPROBS_GROUP_MISC'           => 'Miscellaneous',
    'OXPROBS_GROUP_CUSTOM'         => 'Custom',
    'OXPROBS_GROUP_DOUBLE'         => 'Duplicate',
    'OXPROBS_GROUP_MISSED'         => 'Missing',
    'OXPROBS_GROUP_ORPHANED'       => 'Orphaned',
    'OXPROBS_GROUP_ORDERS'         => 'Orders',
    'OXPROBS_GROUP_PAYMENT'        => 'Payment',
    'OXPROBS_DOWNLOAD'             => 'Download',
    'OXPROBS_PRINT'                => 'Print',
    'OXPROBS_NOSTOCK'              => 'No stock',
    'OXPROBS_MISSSTOCKINFO'        => 'No Stock and no Delivery Info',
    'OXPROBS_STOCKALERT'           => 'Low stock',
    'OXPROBS_NOREMINDER'           => 'No stock alert',
    'OXPROBS_NOREMINDVALUE'        => 'No min value for stock',
    'OXPROBS_NOARTNUM'             => 'No Art.No',
    'OXPROBS_NOSHORTDESC'          => 'Insufficient Short Description',
    'OXPROBS_NOPIC'                => 'No product picture',
    'OXPROBS_DUPLICATE'            => 'Duplicate Art-No or EAN',
    'OXPROBS_DBLACTIVE'            => 'Double activated',
    'OXPROBS_LONGPERIOD'           => 'Too large period',
    'OXPROBS_INVPERIOD'            => 'Invalid period',
    'OXPROBS_NOPRICE'              => 'No sales price',
    'OXPROBS_NOBUYPRICE'           => 'Insufficient buying price',
    'OXPROBS_NOEAN'                => 'No EAN',
    'OXPROBS_EANCHK'               => 'Wrong EAN',
    'OXPROBS_NOMPN'                => 'No manufacturer Art.No.',
    'OXPROBS_NOCAT'                => 'No catergory assigned',
    'OXPROBS_ORPHAN'               => 'Orphaned variants',
    'OXPROBS_NODESC'               => 'Do description',
    'OXPROBS_NOMANU'               => 'No manufacturer',
    'OXPROBS_NOVEND'               => 'No vendor',
    'OXPROBS_ACTIVE'               => 'Status active',
    'OXPROBS_INACTIVE'               => 'Status inactive',
    'OXPROBS_NOSTOCK_INFO'         => 'The following articles and variants are having no or a negative stock. <br />'
                                    . '(only articles with status = standard, offline and not buyable will be listed)',
    'OXPROBS_MISSSTOCKINFO_INFO'   => 'The following articles and variants are having no or a negative stock and no info about the delivery date. <br />'
                                    . '(only articles with status = standard will be listed)',
    'OXPROBS_STOCKALERT_INFO'      => 'Nachfolgende Artikel und Varianten haben den kritischen Lagerbestand erreicht. <br />'
                                    . '(Lagerbestand unterhalb des eingestellten Warn-Wertes. Es werden nur Artikel mit Lieferstatus = Standard ber&uuml;cksichtigt)',
    'OXPROBS_NOREMINDER_INFO'      => 'Nachfolgende Artikel besitzen keine Warnung f&uuml;r den Lagerbestand',
    'OXPROBS_NOREMINDVALUE_INFO'   => 'Nachfolgende Artikel und Varianten besitzen keinen Minimalwert für den Lagerbestand',
    'OXPROBS_NOARTNUM_INFO'        => 'The following articles and variants are having no article number.',
    'OXPROBS_NOSHORTDESC_INFO'     => 'The following articles and variants are having no or an insufficient short description',
    'OXPROBS_NOPIC_INFO'           => 'The following articles and variants are having no product picture or just the dummy picture.',
    'OXPROBS_DUPLICATE_INFO'       => 'The following articles and variants are having the same article number or EAN.',
    'OXPROBS_DBLACTIVE_INFO'       => 'The following articles and variants are double activated (as well by the option as by the time period).',
    'OXPROBS_LONGPERIOD_INFO'      => 'The following articles and variants are active for a too large time period.',
    'OXPROBS_INVPERIOD_INFO'       => 'The following articles and variants are active for an invalid time period.',
    'OXPROBS_NOPRICE_INFO'         => 'The following articles and variants are having no or a negative sales price.',
    'OXPROBS_NOBUYPRICE_INFO'      => 'The following articles and variants are having no or a insufficient buying price.',
    'OXPROBS_NOEAN_INFO'           => 'The following articles and variants are having no EAN value.',
    'OXPROBS_EANCHK_INFO'          => 'The following articles and variants are having a wrong EAN value.',
    'OXPROBS_NOMPN_INFO'           => 'The following articles and variants are having no manufacturer article number.',
    'OXPROBS_NOCAT_INFO'           => 'The following articles and variants are not assigned to a category. <br />'
                                    . '(these articles might be exported to price search engines, but they aren\'t visible in the shop)',
    'OXPROBS_ORPHAN_INFO'          => 'The following variants are active, but their parent articles are deactivated.<br />'
                                    . '(these articles might be exported to price search engines, but they aren\'t visible in the shop)',
    'OXPROBS_NODESC_INFO'          => 'The following articles and variants are without a description.',
    'OXPROBS_NOMANU_INFO'          => 'The following articles are without a manufacturer.',
    'OXPROBS_NOVEND_INFO'          => 'The following articles are without a vendor.',
    'OXPROBS_ACTIVE_INFO'          => 'The following articles are active.',
    'OXPROBS_INACTIVE_INFO'        => 'The following articles are inactive.',

    'OXPROBS_INVACTIONS'           => 'Invalid actions',
    'OXPROBS_INVCATS'              => 'Invalid categories',
    'OXPROBS_INVMAN'               => 'Invalid manufacturers',
    'OXPROBS_INVVEN'               => 'Invalid distributors',
    'OXPROBS_INVACTIONS_INFO'      => 'The following actions are expired, prospective or deactived. <br />'
                                    . 'But they are containing active articles which can be ordered anyway.',
    'OXPROBS_INVCATS_INFO'         => 'The following categories, their parents or their grandparents are deactivated. <br />'
                                    . 'But they are containing active articles which can be ordered anyway.',
    'OXPROBS_INVMAN_INFO'          => 'The following manufacturer are deactivated or don\'t have an icon assigned. <br />'
                                    . 'But they are containing active articles which can be ordered anyway.',
    'OXPROBS_INVVEN_INFO'          => 'The following distributors are deactivated or don\'t have an icon assigned. <br />'
                                    . 'But they are containing active articles which can be ordered anyway.',
    'OXPROBS_DEACT_ACT'            => 'Deactivated action',
    'OXPROBS_EXP_ACT'              => 'Expired action',
    'OXPROBS_PROSPEC_ACT'          => 'Prospective action',
    'OXPROBS_DEACT_CATS'           => 'Deactivated categories',
    'OXPROBS_DEACT_PARENTCAT'      => 'Deactivated parents categories',
    'OXPROBS_DEACT_GRANDCAT'       => 'Deactivated grandparents categories',
    'OXPROBS_DEACT_MAN'            => 'Deactivated manufacturer',
    'OXPROBS_NOICON_MAN'           => 'No icon assigned',
    'OXPROBS_DEACT_VEN'            => 'Deactivated distributor',
    'OXPROBS_NOICON_VEN'           => 'No icon assigned',
    'OXPROBS_STOCK_STANDARD'       => 'Standard',
    'OXPROBS_STOCK_OFFLINE'        => 'Offline',
    'OXPROBS_STOCK_NOTBUYABLE'     => 'Not buyable',

    'OXPROBS_DELSETCOST'           => 'Shipping methods and costs',
    'OXPROBS_DELSETPAY'            => 'Shipping and payment methods',
    'OXPROBS_STATE'                => 'State',
    'OXPROBS_DELSETCOST_INFO'      => '',
    'OXPROBS_DELSETPAY_INFO'       => '',
    
    'OXPROBS_USRDBL_NAME'          => 'Identical Name and City',
    'OXPROBS_USRDBL_ADDR'          => 'Identical Street and City',
    'OXPROBS_USRDBL_NAME_INFO'     => 'The following users are having the same name and city (but with different logins).',
    'OXPROBS_USRDBL_ADDR_INFO'     => 'The following users are having the same street and city (but with different logins).',
    'OXPROBS_LOGINS'               => 'Logins',
    
    'OXPROBS_READY_ORDERS'         => 'Deliverable orders',
    'OXPROBS_PAY_OPENCIA'          => 'Open CIA',
    'OXPROBS_PAY_OPENINVOICES'     => 'Open invoices',
    'OXPROBS_READY_ORDERS_INFO'    => 'The following orders can be shipped. They are paid or will be paid later (eg. COD on delivering to customer)',
    'OXPROBS_PAY_OPENCIA_INFO'     => 'The following orders with the payment "cash in advance" aren\'t paid yet',
    'OXPROBS_PAY_OPENINVOICES_INFO' => 'The following orders with the payment "by invoice" aren\'t paid yet',
    'OXPROBS_ORDER_ITEMS'          => 'Ordered products',
    'OXPROBS_ORDER_SUM'            => 'Order sum',
    'OXPROBS_ORDER_REMARK'         => 'Customer\'s remark',

    'OXPROBS_MANU_MISSPICS'        => 'Manufacturer without Pictures',
    'OXPROBS_MANU_ORPHPICS'        => 'Orphaned manufacturer pictures',
    'OXPROBS_VEND_MISSPICS'        => 'Distributors without Pictures',
    'OXPROBS_VEND_ORPHPICS'        => 'Orphaned distributor pictures',
    'OXPROBS_CAT_MISSPICS'         => 'Categories without Pictures',
    'OXPROBS_CAT_ORPHPICS'         => 'Orphaned category pictures',
    'OXPROBS_ART_MISSPICS'         => 'Products without Pictures',
    'OXPROBS_ART_ORPHPICS'         => 'Orphaned product pictures',
    'OXPROBS_MANU_MISSPICS_INFO'   => 'The following manufacturers don\'t have an assigned picture or the picture wasn\'t found.<br>Path:',
    'OXPROBS_MANU_ORPHPICS_INFO'   => 'The following image files aren\'t assigned to any manufacturer.'
                                    . '<br>Path:',
    'OXPROBS_VEND_MISSPICS_INFO'   => 'The following distributors don\'t have an assigned picture or the picture wasn\'t found.<br>Path:',
    'OXPROBS_VEND_ORPHPICS_INFO'   => 'The following image files aren\'t assigned to any distributor.'
                                    . '<br>Path:',
    'OXPROBS_CAT_MISSPICS_INFO'    => 'The following categories don\'t have an assigned picture or the picture wasn\'t found.<br>Path:',
    'OXPROBS_CAT_ORPHPICS_INFO'    => 'The following image files aren\'t assigned to any category.'
                                    . '<br>Path:',
    'OXPROBS_ART_MISSPICS_INFO'    => 'The following products don\'t have an assigned picture or the picture wasn\'t found.<br>Path:',
    'OXPROBS_ART_ORPHPICS_INFO'    => 'The following image files aren\'t assigned to any product.'
                                    . '<br>Path:',
    'OXPROBS_SUBDIR_FILE'          => 'Folder/File',
    'OXPROBS_NOPIC_DEF'            => 'No picture assigned',
    'OXPROBS_NOPIC_FOUND'          => 'File not found',
    'OXPROBS_ORPHPIC_FOUND'        => 'Orphaned picture found',
    'OXPROBS_DEACT_USER'           => 'deactivated user',
    'OXPROBS_UNCONF_NEWS'          => 'unconfirmed newletter registration',
    'OXPROBS_CONF_NEWS'            => 'confirmed newletter registration',
    
    'OXPROBS_NUMOF_ENTRIES'        => 'entries found.',

    'SHOP_MODULE_GROUP_OXPROBS_ARTICLESETTINGS'   => 'Product Analysis',
    'SHOP_MODULE_sOxProbsEANField'                => 'Use this field for EAN check',
    'SHOP_MODULE_sOxProbsEANField_oxean'          => 'EAN',
    'SHOP_MODULE_sOxProbsEANField_oxdistean'      => 'Manufacturer EAN',
    'SHOP_MODULE_sOxProbsMinDescLen'              => 'Minimum length of product description',
    'SHOP_MODULE_sOxProbsBPriceMin'               => 'Minimum factor for buy price (eg. 0.5 = 50% of sale price)',
    'SHOP_MODULE_sOxProbsMaxActionTime'           => 'Maximum time for actions (in days)',
    'SHOP_MODULE_bOxProbsProductPreview'          => 'Product preview on hover',
    'SHOP_MODULE_bOxProbsProductActiveOnly'       => 'Show active products only',
    'SHOP_MODULE_bOxProbsProductTimeActive'       => 'Observe products with "Active from/to"',
    'SHOP_MODULE_GROUP_OXPROBS_USERSETTINGS'      => 'User Analysis',
    'SHOP_MODULE_sOxProbsNameLength'              => 'Minimum length for firstname and lastname',
    'SHOP_MODULE_GROUP_OXPROBS_ORDERSETTINGS'     => 'Order Analysis',
    'SHOP_MODULE_sOxProbsOrderPaidLater'          => 'Payment types which are paid after the shipping (eg. oxidinvoice,oxidcashondel)',
    'SHOP_MODULE_sOxProbsOrderPaidbyCIA'          => 'Payment type which is used for cash in advance (eg. oxidpayadvance)',
    'SHOP_MODULE_sOxProbsOrderPaidbyInvoice'      => 'Payment type which is used for paying by invoice (eg. oxidinvoice)',
    'SHOP_MODULE_sOxProbsOrderIgnoredRemark'      => 'Ignore this remark text',
    'SHOP_MODULE_GROUP_OXPROBS_PICTURESETTINGS'   => 'Picture Analysis',
    'SHOP_MODULE_sOxProbsPictureDirs'             => 'Use this for picture checking',
    'SHOP_MODULE_sOxProbsPictureDirs_master'      => 'Master Pictures',
    'SHOP_MODULE_sOxProbsPictureDirs_generated'   => 'Generated Pictures',
    'SHOP_MODULE_GROUP_OXPROBS_INCLUDESETTINGS'   => 'Custom Analysis',
    'SHOP_MODULE_aOxProbsArticleIncludeFiles'     => 'User defined Product Analysis<br>(one line for each analysis)',
    'SHOP_MODULE_aOxProbsGroupIncludeFiles'       => 'User defined Arrangement Analysis<br>(one line for each analysis)',
    'SHOP_MODULE_aOxProbsDeliveryIncludeFiles'    => 'User defined Shipping/Payment Analysis<br>(one line for each analysis)',
    'SHOP_MODULE_aOxProbsUsersIncludeFiles'       => 'User defined User Analysis<br>(one line for each analysis)',
    'SHOP_MODULE_aOxProbsOrdersIncludeFiles'      => 'User defined Order Analysis<br>(one line for each analysis)',
    'SHOP_MODULE_aOxProbsPicturesIncludeFiles'    => 'User defined Picture Analysis<br>(one line for each analysis)',
    'SHOP_MODULE_GROUP_OXPROBS_DOWNLOAD'          => 'Download / Export',
    'SHOP_MODULE_bOxProbsHeader'                  => 'Export column headers',
    'SHOP_MODULE_sOxProbsSeparator'               => 'Separator',
    'SHOP_MODULE_sOxProbsSeparator_comma'         => ',&nbsp;&nbsp; (comma)',
    'SHOP_MODULE_sOxProbsSeparator_semicolon'     => ';&nbsp;&nbsp; (semicolon)',
    'SHOP_MODULE_sOxProbsSeparator_tab'           => '&rarr; (tab)',
    'SHOP_MODULE_sOxProbsSeparator_pipe'          => '|&nbsp;&nbsp; (pipe)',
    'SHOP_MODULE_sOxProbsSeparator_tilde'         => '&sim;&nbsp; (tilde)',
    'SHOP_MODULE_bOxProbsQuote'                   => 'Encapsulate columns by quotes',
    'SHOP_MODULE_bOxProbsStripTags'               => 'Remove HTML Tags',
);

?>