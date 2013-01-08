<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Andreas Isaak
 * @package    contao-boilerplate
 * @license    GNU/LGPL
 * @filesource
 *
 * @thanks     Tristan Lins <tristan.lins@infinitysoft.de>
 *
 */

// Database settings
$GLOBALS['TL_CONFIG']['dbPconnect']                 = true;
$GLOBALS['TL_CONFIG']['dbCharset']                  = 'UTF8';

// Localisation settings
$GLOBALS['TL_CONFIG']['dateFormat']                 = 'd.m.Y';
$GLOBALS['TL_CONFIG']['datimFormat']                = 'd.m.Y H:i';
$GLOBALS['TL_CONFIG']['timeZone']                   = 'Europe/Berlin';

// URL settings
$GLOBALS['TL_CONFIG']['rewriteURL']                 = true;
$GLOBALS['TL_CONFIG']['folderAlias']                = true;
$GLOBALS['TL_CONFIG']['languageAlias']              = 'none';
$GLOBALS['TL_CONFIG']['templateFiles']              = 'tpl,html5,xhtml,mobile';

// Upload settings
$GLOBALS['TL_CONFIG']['maxFileSize']                = 204800000;
$GLOBALS['TL_CONFIG']['imageWidth']                 = 3000;
$GLOBALS['TL_CONFIG']['imageHeight']                = 3000;

// Image processing settings
$GLOBALS['TL_CONFIG']['gdMaxImgWidth']              = PHP_INT_MAX;
$GLOBALS['TL_CONFIG']['gdMaxImgHeight']             = PHP_INT_MAX;
$GLOBALS['TL_CONFIG']['jpgQuality']                 = 90;

// Theme+ settings
$GLOBALS['TL_CONFIG']['default_compression']        = 'gzip';
$GLOBALS['TL_CONFIG']['default_css_minimizer']      = 'cssmin';
$GLOBALS['TL_CONFIG']['default_js_minimizer']       = 'jsmin';
$GLOBALS['TL_CONFIG']['theme_plus_lesscss_mode']    = '-';
$GLOBALS['TL_CONFIG']['css_embed_images']           = 0;

$GLOBALS['TL_CONFIG']['piwik_blacklist']            = 'a:3:{i:0;a:1:{s:3:"url";s:16:"http://127.0.0.1";}i:1;a:1:{s:3:"url";s:20:"http://192.168.19.42";}i:2;a:1:{s:3:"url";s:29:"http://preview.men-at-work.de";}}';
$GLOBALS['TL_CONFIG']['inactiveModules']            = 'a:6:{i:0;s:8:"calendar";i:1;s:8:"comments";i:2;s:3:"faq";i:3;s:10:"newsletter";i:4;s:4:"news";i:5;s:5:"tasks";}';