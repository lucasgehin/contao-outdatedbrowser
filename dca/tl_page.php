<?php

/**
 * outdatedbrowser module for Contao Open Source CMS
 *
 * Copyright (C) 2016 Medialta
 *
 * @package outdatedbrowser
 * @author  Medialta <https://www.medialta.com>
 * @author  Lucas GEHIN <lucas@medialta.com>
 * @license LGPL
 */


/**
 * Extend the tl_page palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'outdatedbrowser_enable';
$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] .= ';{outdatedbrowser_legend},outdatedbrowser_enable';

/**
 * Add the fields to tl_page
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['outdatedbrowser_enable'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['outdatedbrowser_enable'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);