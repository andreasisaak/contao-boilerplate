<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
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
 * @copyright  Leo Feyer 2005-2011
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Config
 * @license    LGPL
 * @filesource
 */

// Seiten-ID anzeigen
$GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'id';
$GLOBALS['TL_DCA']['tl_page']['list']['label']['format'] = '%s <span style="color: #aaaaaa; padding-left: 3px;">(ID: %s)</span>';
 
// Artikel-ID anzeigen
$GLOBALS['TL_DCA']['tl_article']['list']['label']['fields'][] = 'id'; 
$GLOBALS['TL_DCA']['tl_article']['list']['label']['format'] = '%s <span style="color: #aaaaaa; padding-left: 3px;">(%s, ID: %s)</span>';

// Ueberschriften eingrenzen
$GLOBALS['TL_DCA']['tl_content']['fields']['headline']['options'] = array('h2','h3','h4','h5','h6');
// $GLOBALS['TL_DCA']['tl_news']['fields']['caption']['eval']['allowHtml'] = true;

// Importiere Backend-User
$this->import('BackendUser', 'User');
// Nur wenn es sich NICHT um einen Admin handelt
if (!$this->User->isAdmin)
{
  // Inhaltselemente
  $GLOBALS['TL_DCA']['tl_content']['fields']['text']['eval']['rte'] = 'tinyMCE_boilerplate';
  
  // Events
  $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['details']['eval']['rte'] = 'tinyMCE_boilerplate';
  
  // Nachrichten
  $GLOBALS['TL_DCA']['tl_news']['fields']['text']['eval']['rte'] = 'tinyMCE_boilerplate';
}

?>