<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
	// menu
	'admin:develop_tools' => 'Nástroje',
	'admin:develop_tools:sandbox' => 'Motivové pískoviště',
	'admin:develop_tools:inspect' => 'Prohlížet',
	'admin:inspect' => 'Prohlížet',
	'admin:develop_tools:unit_tests' => 'Unit testy',
	'admin:develop_tools:entity_explorer' => 'Průzkumník entit',
	'admin:developers' => 'Vývojáři',
	'admin:developers:settings' => 'Nastavení',

	// settings
	'elgg_dev_tools:settings:explanation' => 'Na této stránce můžete měnit vývojářská a ladící nastavení. Některá z těchto nastavení jsou také dostupná na dalších správcovských stránkách.',
	'developers:label:simple_cache' => 'Používat simple cache',
	'developers:help:simple_cache' => 'Během vývoje vypněte tuto mezipaměť, jinak budou ignorovány změny v CSS a JavaScriptu.',
	'developers:label:system_cache' => 'Používat systémovou mezipaněť',
	'developers:help:system_cache' => 'Během vývoje vypněte tuto mezipaměť, jinak budou ignorovány změny v doplňcích.',
	'developers:label:debug_level' => "Úroveň stopování",
	'developers:help:debug_level' => "Řídí množství zapisovaných informací. Pro více informací nahlédněte do elgg_log().",
	'developers:label:display_errors' => 'Zobrazovat smrtelné chyby PHP',
	'developers:help:display_errors' => "Ve výchozím stavu .htaccess potlačuje výpis smrtelných chyb.",
	'developers:label:screen_log' => "Vypisovat na obrazovku",
	'developers:help:screen_log' => "Zobrazuje výstup z elgg_log() a elgg_dump() a počty DB dotazů.",
	'developers:label:show_strings' => "Ukazovat zdrojové řetězce pro překlad",
	'developers:help:show_strings' => "Zobrazuje překladové řetězce použité funkcí elgg_echo().",
	'developers:label:show_modules' => "Ukazovat AMD moduly načtené v konzoli",
	'developers:help:show_modules' => "Posílá načtené moduly a hodnoty do vaší JavaScript konzole.",
	'developers:label:wrap_views' => "Zabalit pohledy",
	'developers:help:wrap_views' => "This wraps almost every view with HTML comments. Useful for finding the view creating particular HTML.
									This can break non-HTML views in the default viewtype. See developers_wrap_views() for details.",
	'developers:label:log_events' => "Vypisovat události a zapojení doplňků",
	'developers:help:log_events' => "Do logu zapíše události a zapojení doplňků. Varování: na stránku je jich opravdu hodně.",
	'developers:label:show_gear' => "Použít %s mimo správcovský prostor",
	'developers:help:show_gear' => "Ikonka vpravo dole v zobrazené části, která poskytuje správci přístup k vývojářským nastavením a odkazům.",
	'developers:label:block_email' => "Block all outgoing e-mails",
	'developers:help:block_email' => "You can block outgoing e-mail to regular users or to all users",
	'developers:label:forward_email' => "Forward all outgoing e-mails to one address",
	'developers:help:forward_email' => "All outgoing e-mails will be sent to the configured e-mail address",
	'developers:label:enable_error_log' => "Enable error log",
	'developers:help:enable_error_log' => "Maintain a separate log of errors and messages logged to the error_log() based on your trace level setting. The log is viewable via admin interface.",

	'developers:label:submit' => "Uložit a vyprázdnit mezipaměť",

	'developers:block_email:forward' => 'Forward all e-mails',
	'developers:block_email:users' => 'Only regular users',
	'developers:block_email:all' => 'Admins and regular users',
	
	'developers:debug:off' => 'Vypnuto',
	'developers:debug:error' => 'Chyba',
	'developers:debug:warning' => 'Varování',
	'developers:debug:notice' => 'Upozornění',
	'developers:debug:info' => 'Všechno',
	
	// entity explorer
	'developers:entity_explorer:help' => 'Zobrazí informace o entitách a provede na nich několik základních operací.',
	'developers:entity_explorer:guid:label' => 'Zadejte guid entity, kterou chcete prozkoumat',
	'developers:entity_explorer:info' => 'Informace o entitě',
	'developers:entity_explorer:info:attributes' => 'Vlastnosti',
	'developers:entity_explorer:info:metadata' => 'Metadata',
	'developers:entity_explorer:info:relationships' => 'Relace',
	'developers:entity_explorer:info:private_settings' => 'Neveřejná nastavení',
	'developers:entity_explorer:info:owned_acls' => 'Owned Access Collections',
	'developers:entity_explorer:info:acl_memberships' => 'Access Collections Memberships',
	'developers:entity_explorer:delete_entity' => 'Odebrat tuto entitu',
	'developers:entity_explorer:inspect_entity' => 'Inspect this entity',
	
	// inspection
	'developers:inspect:help' => 'Prověří nastavení kostry instalace Elgg.',
	'developers:inspect:actions' => 'Akce',
	'developers:inspect:events' => 'Události',
	'developers:inspect:menus' => 'Nabídky',
	'developers:inspect:pluginhooks' => 'Zapojení doplňků',
	'developers:inspect:priority' => 'Priorita',
	'developers:inspect:simplecache' => 'Simple cache',
	'developers:inspect:routes' => 'Routes',
	'developers:inspect:views' => 'Pohledy',
	'developers:inspect:views:all_filtered' => "<b>Poznámka!</b> Veškerý vstup a výstup pohledu je filtrován přes tato zapojení doplňků:",
	'developers:inspect:views:input_filtered' => "(vstup filtrován zapojením doplňku: %s)",
	'developers:inspect:views:filtered' => "(filtrován zapojením doplňku: %s)",
	'developers:inspect:widgets' => 'Udělátka',
	'developers:inspect:webservices' => 'Webové služby',
	'developers:inspect:widgets:context' => 'K dispozici',
	'developers:inspect:functions' => 'Funkce',
	'developers:inspect:file_location' => 'File path from Elgg root or controller',
	'developers:inspect:route' => 'Route Name',
	'developers:inspect:path' => 'Path Pattern',
	'developers:inspect:resource' => 'Resource View',
	'developers:inspect:handler' => 'Handler',
	'developers:inspect:controller' => 'Controller',
	'developers:inspect:file' => 'Soubory',
	'developers:inspect:middleware' => 'Soubory',
	'developers:inspect:handler_type' => 'Handled by',
	'developers:inspect:services' => 'Services',
	'developers:inspect:service:name' => 'Jméno',
	'developers:inspect:service:path' => 'Definition',
	'developers:inspect:service:class' => 'Class',

	// event logging
	'developers:request_stats' => "Požadovat statistiky (neobsahuje událost vypnutí)",
	'developers:event_log_msg' => "%s: '%s, %s' v %s",
	'developers:log_queries' => "dotazy DB: %s",
	'developers:boot_cache_rebuilt' => "Zaváděcí mezipaměť byla pro tento požadavek obnovena",
	'developers:elapsed_time' => "Doba běhu (s)",

	// theme sandbox
	'theme_sandbox:intro' => 'Úvod',
	'theme_sandbox:breakout' => 'Na celou obrazovku',
	'theme_sandbox:buttons' => 'Tlačítka',
	'theme_sandbox:components' => 'Součásti',
	'theme_sandbox:forms' => 'Formuláře',
	'theme_sandbox:grid' => 'Mřížka',
	'theme_sandbox:icons' => 'Ikonky',
	'theme_sandbox:javascript' => 'JavaScript',
	'theme_sandbox:layouts' => 'Rozvržení',
	'theme_sandbox:modules' => 'Moduly',
	'theme_sandbox:navigation' => 'Navigace',
	'theme_sandbox:typography' => 'Typografie',

	'theme_sandbox:icons:blurb' => 'Pro zobrazení ikonek použijte <em>elgg_view_icon($name)</em>.',

	// status messages
	'developers:settings:success' => 'Nastavení uloženo a mezipaměti vyprázdněny',

	'developers:amd' => 'AMD',

	'admin:develop_tools:error_log' => 'Error Log',
	'developers:logs:empty' => 'Error log is empty',
);
