<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог товаров");?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"catalog", 
	array(
		"IBLOCK_TYPE" => "catalogs",
		"IBLOCK_ID" => "38",
		"VIDEO_IBLOCK_TYPE" => "content",
		"VIDEO_IBLOCK_ID" => "50",
		"SERVICES_IBLOCK_TYPE" => "catalogs",
		"SERVICES_IBLOCK_ID" => "42",
		"REVIEWS_IBLOCK_TYPE" => "reviews",
		"REVIEWS_IBLOCK_ID" => "39",
		"FEEDBACK_FORM_ID" => "12",
		"PRODUCT_FORM_ID" => "10",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"PROPERTY_PICTURES" => "SYSTEM_IMAGES",
		"PROPERTY_ARTICLE" => "SYSTEM_ARTICLE",
		"PROPERTY_BRAND" => "SYSTEM_BRAND",
		"PROPERTY_IS_NEW" => "SYSTEM_NEW",
		"PROPERTY_IS_POPULAR" => "SYSTEM_HIT",
		"PROPERTY_IS_RECOMMENDATION" => "SYSTEM_RECOMMEND",
		"PROPERTY_DOCUMENTS" => "SYSTEM_DOCUMENTS",
		"PROPERTY_PRODUCTS_ASSOCIATED" => "SYSTEM_ASSOCIATED",
		"PROPERTY_PRODUCTS_RECOMMENDED" => "SYSTEM_RECOMMENDED",
		"PROPERTY_VIDEO" => "VIDEO",
		"VIDEO_PROPERTY_LINK" => "LINK",
		"PROPERTY_SERVICES" => "SYSTEM_RELATED_SERVICES",
		"SERVICES_PROPERTY_PRICE" => "SYSTEM_PRICE",
		"REVIEWS_PROPERTY_LINK" => "products_id",
		"REVIEWS_MAIL_EVENT" => "",
		"REVIEWS_CAPTCHA_USE" => "Y",
		"PRODUCT_FORM_PROPERTY_PRODUCT" => "form_text_35",
		"DETAIL_VIEW" => "settings",
		"MENU_TYPE_ROOT" => "left",
		"MENU_TYPE_CHILD" => "left",
		"MENU_MAX_LEVEL" => "4",
		"MENU_VIEW" => "settings",
		"MENU_DISPLAY_IN_ROOT" => "settings",
		"MENU_DISPLAY_IN_SECTION" => "settings",
		"MENU_DISPLAY_IN_ELEMENT" => "settings",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"CONSENT_URL" => "/company/consent/",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/catalog/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SHOW_TOP_ELEMENTS" => "",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"DISABLE_INIT_JS_IN_COMPONENT" => "",
		"TOP_ELEMENT_COUNT" => "",
		"TOP_LINE_ELEMENT_COUNT" => "",
		"TOP_ELEMENT_SORT_FIELD" => "",
		"TOP_ELEMENT_SORT_ORDER" => "",
		"TOP_ELEMENT_SORT_FIELD2" => "",
		"TOP_ELEMENT_SORT_ORDER2" => "",
		"TOP_PROPERTY_CODE" => "",
		"QUANTITY_MARKERS_USE" => "N",
		"BASKET_USE" => "settings",
		"FAST_ORDER_USE" => "Y",
		"FAST_ORDER_TEMPLATE" => ".default",
		"FAST_ORDER_PRICE_TYPE" => "1",
		"FAST_ORDER_PAYER" => "1",
		"FAST_ORDER_PROPERTIES" => array(
			0 => "",
			1 => "5",
			2 => "",
		),
		"FAST_ORDER_DELIVERY" => "2",
		"FAST_ORDER_PAYMENT" => "2",
		"FAST_ORDER_TITLE" => "Купить в 1 клик!",
		"FAST_ORDER_BUTTON" => "Купить в 1 клик!",
		"FAST_ORDER_PROPERTY_PHONE" => "",
		"FAST_ORDER_COMMENT_SHOW" => "Y",
		"FAST_ORDER_AGREEMENT_SHOW" => "Y",
		"FAST_ORDER_AGREEMENT_URL" => "/company/consent/",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "SYSTEM_BRAND",
			1 => "NEW_VES_KG",
			2 => "NEW_DLINA_SHAGA_SM",
			3 => "BICYCLE_ERGOMETER",
			4 => "NEW_VES_V_UPAKOVKE_KG",
			5 => "VIDEO",
			6 => "NEW_VYSOTA_ZASHCHITNOY_SETKI_SM",
			7 => "NEW_VYSOTA_RAMY_SM",
			8 => "NEW_DIAMETR_PO_KRAYNIM_TOCHKAM_SM",
			9 => "NEW_DLINA_BEGOVOGO_POLOTNA_SM",
			10 => "NEW_MAKSIMALNYY_VES_POLZOVATELYA_KG",
			11 => "INDICATIONS_OF_THE_COMPUTER",
			12 => "SEAT_ADJUSTMENT",
			13 => "REGULIROVKA_RULYA",
			14 => "SPECIAL_SOFTWARE_FEATURES",
			15 => "PROGRAM_SPECIFICATIONS",
			16 => "NEW_SHIRINA_BEGOVOGO_POLOTNA_SM",
			17 => "VOZMOZHNOST_SKLADYVANIYA",
			18 => "GARANTIYA",
			19 => "DIAGONAL_DISPLEYA",
			20 => "IZMERENIE_PULSA",
			21 => "KOLICHESTVO_PROGRAMM",
			22 => "KOLICHESTVO_PRUZHIN_SHT",
			23 => "KOLICHESTVO_UROVNEY_NAGRUZKI",
			24 => "KOMPLEKTATSIYA",
			25 => "MATERIAL",
			26 => "MAKHOVIK",
			27 => "MODEL",
			28 => "MOSHCHNOST_DVIGATELYA_L_S",
			29 => "MULTIMEDIYNAYA_SISTEMA",
			30 => "PEDALI",
			31 => "PIKOVAYA_MOSHCHNOST_L_S",
			32 => "PITANIE",
			33 => "POSADKA",
			34 => "PRIVOD",
			35 => "PROFIL_RAMY",
			36 => "PULSOZAVISIMYE_PROGRAMMY",
			37 => "RAZMER",
			38 => "RAZMER_UPAKOVKI_D_KH_SH_KH_V",
			39 => "RAZMERY_V_RABOCHEM_SOSTOYANII_D_KH_SH_KH_V",
			40 => "RAMA",
			41 => "RASSTOYANIE_MEZHDU_PEDALYAMI",
			42 => "REGULIROVKA_UGLA",
			43 => "SYSTEM_RECOMMENDED",
			44 => "SYSTEM_RECOMMEND",
			45 => "RELSA",
			46 => "SIDENE",
			47 => "SISTEMA_AMORTIZATSII",
			48 => "SISTEMA_NAGRUZKI",
			49 => "SKOROST",
			50 => "SYSTEM_ASSOCIATED",
			51 => "SYSTEM_RELATED_SERVICES",
			52 => "STRANA_IZGOTOVLENIYA",
			53 => "STRANA_PROISKHOZHDENIYA_BRENDA",
			54 => "TIP",
			55 => "TIP_RAMY",
			56 => "TOLSHCHINA_BEGOVOGO_POLOTNA",
			57 => "TOLSHCHINA_DEKI",
			58 => "TRANSPORTIROVOCHNYE_ROLIKI",
			59 => "UGOL_NAKLONA",
			60 => "SYSTEM_HIT",
			61 => "TSVET",
			62 => "REGULIROVKA_VYSOTY",
			63 => "SEKCII",
			64 => "DVIGATEL",
			65 => "UPRAZHNENIYA",
			66 => "VES_STEKA",
			67 => "RYCHAGI",
			68 => "RUKOYATKI",
			69 => "DLINA",
			70 => "ANTIBLIKOVOE_POKRITIE",
			71 => "TOLSHINA_STOLESHNITSI",
			72 => "SETKA",
			73 => "METALLICHESKIY_KANT",
			74 => "KOLTSO",
			75 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_REVIEW" => "N",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_COMPARE" => "Y",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/basket/",
		"USE_PRODUCT_QUANTITY" => "N",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_TOP_DEPTH" => "1",
		"ROOT_DESCRIPTION_SHOW" => "Y",
		"ROOT_VIEW" => "settings",
		"ROOT_ROW_COUNT" => "5",
		"ROOT_CHILDREN_USE" => "Y",
		"ROOT_CHILDREN_COUNT" => "4",
		"SECTION_VIEW" => "settings",
		"SECTION_ROW_COUNT" => "4",
		"SECTION_CHILDREN_USE" => "Y",
		"SECTION_CHILDREN_COUNT" => "4",
		"PAGE_ELEMENT_COUNT" => "30",
		"LINE_ELEMENT_COUNT" => "3",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"LIST_PROPERTY_CODE" => array(
			0 => "SYSTEM_RELATED_SERVICES",
			1 => "WEIGTH",
			2 => "DISPLAY",
			3 => "LENGTH",
			4 => "QUANTITY_OF_STRIPS",
			5 => "POWER",
			6 => "SETTINGS",
			7 => "SCOPE",
			8 => "PROCREATOR",
			9 => "SEASON",
			10 => "COMPOSITION",
			11 => "TYPE",
			12 => "PATTERN",
			13 => "ENERGY_CONSUMPTION",
			14 => "",
		),
		"INCLUDE_SUBSECTIONS" => "A",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"LIST_SORT_PRICE_CODE" => "1",
		"LIST_VIEW" => "settings",
		"LIST_DESCRIPTION_SHOW" => "Y",
		"LIST_PROPERTIES_SHOW" => "Y",
		"LIST_QUICK_VIEW_USE" => "Y",
		"LIST_QUANTITY_SHOW" => "Y",
		"LIST_COUNTER_SHOW" => "Y",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "SYSTEM_ARTICLE",
			1 => "SYSTEM_BRAND",
			2 => "NEW_VES_KG",
			3 => "NEW_DLINA_SHAGA_SM",
			4 => "BICYCLE_ERGOMETER",
			5 => "NEW_VES_V_UPAKOVKE_KG",
			6 => "VIDEO",
			7 => "NEW_VYSOTA_ZASHCHITNOY_SETKI_SM",
			8 => "NEW_VYSOTA_RAMY_SM",
			9 => "NEW_DIAMETR_PO_KRAYNIM_TOCHKAM_SM",
			10 => "NEW_DLINA_BEGOVOGO_POLOTNA_SM",
			11 => "NEW_MAKSIMALNYY_VES_POLZOVATELYA_KG",
			12 => "INDICATIONS_OF_THE_COMPUTER",
			13 => "SEAT_ADJUSTMENT",
			14 => "REGULIROVKA_RULYA",
			15 => "SPECIAL_SOFTWARE_FEATURES",
			16 => "PROGRAM_SPECIFICATIONS",
			17 => "NEW_SHIRINA_BEGOVOGO_POLOTNA_SM",
			18 => "VOZMOZHNOST_SKLADYVANIYA",
			19 => "GARANTIYA",
			20 => "DIAGONAL_DISPLEYA",
			21 => "IZMERENIE_PULSA",
			22 => "SYSTEM_CATEGORY",
			23 => "KOLICHESTVO_PROGRAMM",
			24 => "KOLICHESTVO_PRUZHIN_SHT",
			25 => "KOLICHESTVO_UROVNEY_NAGRUZKI",
			26 => "KOMPLEKTATSIYA",
			27 => "MATERIAL",
			28 => "MAKHOVIK",
			29 => "MODEL",
			30 => "MOSHCHNOST_DVIGATELYA_L_S",
			31 => "MULTIMEDIYNAYA_SISTEMA",
			32 => "SYSTEM_NEW",
			33 => "PEDALI",
			34 => "PIKOVAYA_MOSHCHNOST_L_S",
			35 => "PITANIE",
			36 => "POSADKA",
			37 => "PRIVOD",
			38 => "PROFIL_RAMY",
			39 => "PULSOZAVISIMYE_PROGRAMMY",
			40 => "RAZMER",
			41 => "RAZMER_UPAKOVKI_D_KH_SH_KH_V",
			42 => "RAZMERY_V_RABOCHEM_SOSTOYANII_D_KH_SH_KH_V",
			43 => "RAMA",
			44 => "RASSTOYANIE_MEZHDU_PEDALYAMI",
			45 => "REGULIROVKA_UGLA",
			46 => "RELSA",
			47 => "SIDENE",
			48 => "SISTEMA_AMORTIZATSII",
			49 => "SISTEMA_NAGRUZKI",
			50 => "SKOROST",
			51 => "STRANA_IZGOTOVLENIYA",
			52 => "STRANA_PROISKHOZHDENIYA_BRENDA",
			53 => "TIP",
			54 => "TIP_RAMY",
			55 => "TOLSHCHINA_BEGOVOGO_POLOTNA",
			56 => "TOLSHCHINA_DEKI",
			57 => "TRANSPORTIROVOCHNYE_ROLIKI",
			58 => "UGOL_NAKLONA",
			59 => "SYSTEM_HIT",
			60 => "TSVET",
			61 => "REGULIROVKA_VYSOTY",
			62 => "SEKCII",
			63 => "DVIGATEL",
			64 => "UPRAZHNENIYA",
			65 => "VES_STEKA",
			66 => "RYCHAGI",
			67 => "RUKOYATKI",
			68 => "DLINA",
			69 => "ANTIBLIKOVOE_POKRITIE",
			70 => "TOLSHINA_STOLESHNITSI",
			71 => "SETKA",
			72 => "METALLICHESKIY_KANT",
			73 => "KOLTSO",
			74 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"SHOW_DEACTIVATED" => "N",
		"DETAIL_HEADER_FIXED" => "N",
		"DETAIL_PICTURE_POPUP" => "SETTINGS",
		"DETAIL_PICTURE_LOOP" => "SETTINGS",
		"DETAIL_BRAND_USE" => "Y",
		"DETAIL_QUANTITY_SHOW" => "N",
		"DETAIL_COUNTER_SHOW" => "Y",
		"FEEDBACK_FORM_SHOW" => "Y",
		"FEEDBACK_FORM_TEXT" => "Подробно расскажем о наших товарах, видах и стоимости доставки, подготовим индивидуальное предложение для оптовых клиентов!",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"USE_ALSO_BUY" => "N",
		"USE_GIFTS_DETAIL" => "Y",
		"USE_GIFTS_SECTION" => "Y",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
		"USE_STORE" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"LAZY_LOAD" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"FILE_404" => "",
		"COMPATIBLE_MODE" => "Y",
		"USE_ELEMENT_COUNTER" => "Y",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"COMPARE_NAME" => "compare",
		"COMPARE_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"COMPARE_PROPERTY_CODE" => array(
			0 => "SYSTEM_ARTICLE",
			1 => "SYSTEM_BRAND",
			2 => "NEW_VES_KG",
			3 => "NEW_DLINA_SHAGA_SM",
			4 => "BICYCLE_ERGOMETER",
			5 => "NEW_VES_V_UPAKOVKE_KG",
			6 => "VIDEO",
			7 => "NEW_VYSOTA_ZASHCHITNOY_SETKI_SM",
			8 => "NEW_VYSOTA_RAMY_SM",
			9 => "NEW_DIAMETR_PO_KRAYNIM_TOCHKAM_SM",
			10 => "NEW_DLINA_BEGOVOGO_POLOTNA_SM",
			11 => "NEW_MAKSIMALNYY_VES_POLZOVATELYA_KG",
			12 => "INDICATIONS_OF_THE_COMPUTER",
			13 => "SEAT_ADJUSTMENT",
			14 => "REGULIROVKA_RULYA",
			15 => "SPECIAL_SOFTWARE_FEATURES",
			16 => "PROGRAM_SPECIFICATIONS",
			17 => "NEW_SHIRINA_BEGOVOGO_POLOTNA_SM",
			18 => "VOZMOZHNOST_SKLADYVANIYA",
			19 => "GARANTIYA",
			20 => "DIAGONAL_DISPLEYA",
			21 => "IZMERENIE_PULSA",
			22 => "SYSTEM_CATEGORY",
			23 => "KOLICHESTVO_PROGRAMM",
			24 => "KOLICHESTVO_PRUZHIN_SHT",
			25 => "KOLICHESTVO_UROVNEY_NAGRUZKI",
			26 => "KOMPLEKTATSIYA",
			27 => "MATERIAL",
			28 => "MAKHOVIK",
			29 => "MODEL",
			30 => "MOSHCHNOST_DVIGATELYA_L_S",
			31 => "MULTIMEDIYNAYA_SISTEMA",
			32 => "SYSTEM_NEW",
			33 => "PEDALI",
			34 => "PIKOVAYA_MOSHCHNOST_L_S",
			35 => "PITANIE",
			36 => "POSADKA",
			37 => "PRIVOD",
			38 => "PROFIL_RAMY",
			39 => "PULSOZAVISIMYE_PROGRAMMY",
			40 => "RAZMER",
			41 => "RAZMER_UPAKOVKI_D_KH_SH_KH_V",
			42 => "RAZMERY_V_RABOCHEM_SOSTOYANII_D_KH_SH_KH_V",
			43 => "RAMA",
			44 => "RASSTOYANIE_MEZHDU_PEDALYAMI",
			45 => "REGULIROVKA_UGLA",
			46 => "SYSTEM_RECOMMENDED",
			47 => "SYSTEM_RECOMMEND",
			48 => "RELSA",
			49 => "SIDENE",
			50 => "SISTEMA_AMORTIZATSII",
			51 => "SISTEMA_NAGRUZKI",
			52 => "SKOROST",
			53 => "SYSTEM_ASSOCIATED",
			54 => "SYSTEM_RELATED_SERVICES",
			55 => "STRANA_IZGOTOVLENIYA",
			56 => "STRANA_PROISKHOZHDENIYA_BRENDA",
			57 => "TIP",
			58 => "TIP_RAMY",
			59 => "TOLSHCHINA_BEGOVOGO_POLOTNA",
			60 => "TOLSHCHINA_DEKI",
			61 => "TRANSPORTIROVOCHNYE_ROLIKI",
			62 => "UGOL_NAKLONA",
			63 => "SYSTEM_HIT",
			64 => "TSVET",
			65 => "YAZYK_I_INTERFEYSA",
			66 => "REGULIROVKA_VYSOTY",
			67 => "SEKCII",
			68 => "DVIGATEL",
			69 => "UPRAZHNENIYA",
			70 => "VES_STEKA",
			71 => "RYCHAGI",
			72 => "RUKOYATKI",
			73 => "DLINA",
			74 => "ANTIBLIKOVOE_POKRITIE",
			75 => "TOLSHINA_STOLESHNITSI",
			76 => "SETKA",
			77 => "METALLICHESKIY_KANT",
			78 => "KOLTSO",
			79 => "",
		),
		"COMPARE_ELEMENT_SORT_FIELD" => "sort",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"DETAIL_DESCRIPTION_SHOW" => "Y",
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPARE_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPARE_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_CART_PROPERTIES" => array(
			0 => "235",
		),
		"TOP_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_LIMIT" => "5",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_LIMIT" => "5",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "235",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFERS_PROPERTY_PICTURES" => "SYSTEM_PICTURES",
		"COMPONENT_TEMPLATE" => "catalog",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PRICE_SHOW_ALL" => "N",
		"MESS_PRICE_RANGES_TITLE" => "Цены",
		"DETAIL_DISPLAY_MEASURE" => "Y",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_CODE#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
