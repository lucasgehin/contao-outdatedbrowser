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
 * Hooks
 */
$GLOBALS['TL_HOOKS']['generatePage'][] = array('OutdatedBrowser', 'addOutdatedBrowserScripts');