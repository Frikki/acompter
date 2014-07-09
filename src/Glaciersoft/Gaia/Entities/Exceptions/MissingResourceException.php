<?php
/**
 * Glaciersoft\Gaia\Entities\Exceptions
 *
 * PHP Version 5.3
 *
 * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
 * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
 * @license     For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 * @link        http://glaciersoft.com
 */
namespace Glaciersoft\Gaia\Entities\Exceptions
{
    // Use directives (A...Z)

    /**
     * Class MissingResourceException
     *
     * @package Glaciersoft\Gaia\Entities\Exceptions
     */
    class MissingResourceException
        extends ResourceBundleException
    {
        /**
         * @var int
         */
        protected $code = ExceptionCodes::MISSING_RESOURCE;

        /**
         * @var string
         */
        protected $message = 'Missing resource exception';
    }
}
//
// EOF: MissingResourceException.php
