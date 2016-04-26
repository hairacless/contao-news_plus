<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'HeimrichHannot\NewsPlus\Hooks'                   => 'system/modules/news_plus/classes/Hooks.php',
	'HeimrichHannot\NewsPlus\NewsPlus'                => 'system/modules/news_plus/classes/NewsPlus.php',
	'HeimrichHannot\NewsPlus\NewsPlusHelper'          => 'system/modules/news_plus/classes/NewsPlusHelper.php',
	'HeimrichHannot\NewsPlus\NewsPlusTagHelper'       => 'system/modules/news_plus/classes/NewsPlusTagHelper.php',

	// Models
	'HeimrichHannot\NewsPlus\NewsPlusModel'           => 'system/modules/news_plus/models/NewsPlusModel.php',

	// Modules
	'HeimrichHannot\NewsPlus\ModuleNewsFilter'        => 'system/modules/news_plus/modules/ModuleNewsFilter.php',
	'HeimrichHannot\NewsPlus\ModuleNewsListHighlight' => 'system/modules/news_plus/modules/ModuleNewsListHighlight.php',
	'HeimrichHannot\NewsPlus\ModuleNewsListPlus'      => 'system/modules/news_plus/modules/ModuleNewsListPlus.php',
	'HeimrichHannot\NewsPlus\ModuleNewsPlus'          => 'system/modules/news_plus/modules/ModuleNewsPlus.php',
	'HeimrichHannot\NewsPlus\ModuleNewsReaderPlus'    => 'system/modules/news_plus/modules/ModuleNewsReaderPlus.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'block_modal_news'               => 'system/modules/news_plus/templates/block',
	'filter_cat_default'             => 'system/modules/news_plus/templates/filter',
	'filter_cat_multilevel'          => 'system/modules/news_plus/templates/filter',
	'form_newsfilter_cat_ml_link'    => 'system/modules/news_plus/templates/form',
	'form_newsfilter_cat_ml_submenu' => 'system/modules/news_plus/templates/form',
	'form_newsfilter_cat_option'     => 'system/modules/news_plus/templates/form',
	'form_newsfilter_search'         => 'system/modules/news_plus/templates/form',
	'mod_news_modal'                 => 'system/modules/news_plus/templates/modules',
	'mod_news_modal_ajax'            => 'system/modules/news_plus/templates/modules',
	'mod_newsfilter'                 => 'system/modules/news_plus/templates/modules',
	'mod_newslist_plus'              => 'system/modules/news_plus/templates/modules',
	'mod_newsreader_plus'            => 'system/modules/news_plus/templates/modules',
	'navigation_arrows'              => 'system/modules/news_plus/templates/navigation',
	'news_full_modal_content_plus'   => 'system/modules/news_plus/templates/news',
	'news_full_modal_plus'           => 'system/modules/news_plus/templates/news',
	'news_short_plus'                => 'system/modules/news_plus/templates/news',
	'infinite_pagination'            => 'system/modules/news_plus/templates/pagination',
));
