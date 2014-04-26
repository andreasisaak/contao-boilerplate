<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  Andreas Isaak 2013 
 * @package    contao-boilerplate
 * @license    GNU/LGPL 
 * @filesource
 *
 */

// Display page ID
$GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'id';
$GLOBALS['TL_DCA']['tl_page']['list']['label']['format'] = '%s <span style="color: #aaaaaa; padding-left: 3px;">(ID: %s)</span>';

// Display article ID
$GLOBALS['TL_DCA']['tl_article']['list']['label']['fields'][] = 'id'; 
$GLOBALS['TL_DCA']['tl_article']['list']['label']['format'] = '%s <span style="color: #aaaaaa; padding-left: 3px;">(%s, ID: %s)</span>';

// Narrow headlines
$GLOBALS['TL_DCA']['tl_content']['fields']['headline']['options'] = array('h2', 'h3', 'h4', 'h5', 'h6');

if (!\BackendUser::getInstance()->isAdmin)
{
    if (version_compare(VERSION, '3.2', '>')) {
        $GLOBALS['TL_DCA']['tl_content']['fields']['text']['eval']['rte']            = 'tinyMCE_bp_3.3';
        $GLOBALS['TL_DCA']['tl_news']['fields']['teaser']['eval']['rte']             = 'tinyMCE_bp_3.3';
        $GLOBALS['TL_DCA']['tl_news']['fields']['text']['eval']['rte']               = 'tinyMCE_bp_3.3';
        $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['teaser']['eval']['rte']  = 'tinyMCE_bp_3.3';
        $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['details']['eval']['rte'] = 'tinyMCE_bp_3.3';
        $GLOBALS['TL_DCA']['tl_newsletter']['fields']['teaser']['eval']['rte']       = 'tinyMCE_bp_3.3';
        $GLOBALS['TL_DCA']['tl_newsletter']['fields']['text']['eval']['rte']         = 'tinyMCE_bp_3.3';
        $GLOBALS['TL_DCA']['tl_faq']['fields']['answer']['eval']['rte']              = 'tinyMCE_bp_3.3';
        $GLOBALS['TL_DCA']['tl_form_field']['fields']['text']['eval']['rte']         = 'tinyMCE_bp_3.3';
        $GLOBALS['TL_DCA']['tl_comments']['fields']['comment']['eval']['rte']        = 'tinyMCE_bp_3.3';
        $GLOBALS['TL_DCA']['tl_article']['fields']['teaser']['eval']['rte']          = 'tinyMCE_bp_3.3';
    } else {
        $GLOBALS['TL_DCA']['tl_content']['fields']['text']['eval']['rte']            = 'tinyMCE_bp_3.2';
        $GLOBALS['TL_DCA']['tl_news']['fields']['teaser']['eval']['rte']             = 'tinyMCE_bp_3.2';
        $GLOBALS['TL_DCA']['tl_news']['fields']['text']['eval']['rte']               = 'tinyMCE_bp_3.2';
        $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['teaser']['eval']['rte']  = 'tinyMCE_bp_3.2';
        $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['details']['eval']['rte'] = 'tinyMCE_bp_3.2';
        $GLOBALS['TL_DCA']['tl_newsletter']['fields']['teaser']['eval']['rte']       = 'tinyMCE_bp_3.2';
        $GLOBALS['TL_DCA']['tl_newsletter']['fields']['text']['eval']['rte']         = 'tinyMCE_bp_3.2';
        $GLOBALS['TL_DCA']['tl_faq']['fields']['answer']['eval']['rte']              = 'tinyMCE_bp_3.2';
        $GLOBALS['TL_DCA']['tl_form_field']['fields']['text']['eval']['rte']         = 'tinyMCE_bp_3.2';
        $GLOBALS['TL_DCA']['tl_comments']['fields']['comment']['eval']['rte']        = 'tinyMCE_bp_3.2';
        $GLOBALS['TL_DCA']['tl_article']['fields']['teaser']['eval']['rte']          = 'tinyMCE_bp_3.2';
    }
}

if (!\BackendUser::getInstance()->isAdmin) {
    foreach ((array) $GLOBALS['TL_HOOKS']['getSystemMessages'] as $k => $arrHook) { 
        if ($arrHook[1] == 'versionCheck') { 
            unset($GLOBALS['TL_HOOKS']['getSystemMessages'][$k]); 
        } 
    }
}

unset(
  // Remove the space fields
  $GLOBALS['TL_DCA']['tl_article']['fields']['space'],
  $GLOBALS['TL_DCA']['tl_content']['fields']['space'],
  $GLOBALS['TL_DCA']['tl_module'] ['fields']['space'],
  // Remove the image margin fields
  $GLOBALS['TL_DCA']['tl_article']['fields']['imagemargin'],
  $GLOBALS['TL_DCA']['tl_content']['fields']['imagemargin'],
  $GLOBALS['TL_DCA']['tl_module']['fields']['imagemargin'],
  $GLOBALS['TL_DCA']['tl_news']['fields']['imagemargin'],
  $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['imagemargin']
);

// Sets the default content element
$GLOBALS['TL_DCA']['tl_content']['fields']['type']['default'] = 'headline';

// Sets the default form field
// $GLOBALS['TL_DCA']['tl_form_field']['fields']['type']['default'] = 'hidden';
