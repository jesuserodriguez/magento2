<?php
/**
 * Returns an array of Javascript files that should be loaded first by JsTestDriver in the
 * order that they appear in the array when the Javascript unit tests are run.
 *
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    tests
 * @package     js
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 * @return array
 */
return array(
    '/pub/lib/globalize/globalize.js',
    '/pub/lib/jquery/jquery-1.7.1.min.js',
    '/pub/lib/jquery/jquery.cookie.js',
    '/pub/lib/jquery/head.js',
    '/pub/lib/mage/mage.js',
    '/pub/lib/mage/decorate.js',
    '/pub/lib/jquery/jquery.validate.js',
    '/pub/lib/jquery/jquery.metadata.js',
    '/pub/lib/jquery/additional-methods.js',
    '/pub/lib/jquery/jquery.hook.js',
    '/pub/lib/mage/translate.js'
);
