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

namespace Contao;

/**
 * Extension version
 */
class OutdatedBrowser extends \Frontend
{
    /**
     * Add the outdatedbrowser scripts
     */
    public function addOutdatedBrowserScripts()
    {
        if ($this->isOutdatedBrowserEnabled())
        {
            $GLOBALS['TL_CSS'][] = 'system/modules/outdatedbrowser/assets/outdatedbrowser.min.css';
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/outdatedbrowser/assets/outdatedbrowser.min.js';
        }
    }

    /**
     * Check whether the otdatedbrowser notice is enabled and should be displayed
     *
     * @param \PageModel $rootPage
     *
     * @return boolean
     */
    protected function isOutdatedBrowserEnabled(\PageModel $rootPage = null)
    {
        $objRoot = ($rootPage !== null) ? $rootPage : $this->getCurrentRootPage();
        if ($objRoot->outdatedbrowser_enable)
        {
            return true;
        }
        return false;
    }

    /**
     * Get the current root page and return it
     * @return object
     */
    protected function getCurrentRootPage()
    {
        global $objPage;
        $strKey = 'COOKIEBAR_ROOT_' . $objPage->rootId;
        if (!\Cache::has($strKey))
        {
            \Cache::set($strKey, \PageModel::findByPk($objPage->rootId));
        }
        return \Cache::get($strKey);
    }
}