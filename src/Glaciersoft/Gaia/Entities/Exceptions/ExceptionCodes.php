<?php
/**
 * Glaciersoft\Gaia\Entities\Exceptions
 *
 * PHP Version 5.3
 *
 * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
 * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
 * @license     For the full copyright and license information, please view the
 *              LICENSE file that was distributed with this source code.
 * @link        http://glaciersoft.com
 */
namespace Glaciersoft\Gaia\Entities\Exceptions
{
    // Use directives (A...Z)

    /**
     * Maps error code constants to their integer codes.
     *
     * @package Glaciersoft\Gaia\Entities\Exceptions
     */
    class ExceptionCodes
    {
        const GAIA = 101;
        const ARGUMENT = 201;
        const NOT_IMPLEMENTED = 301;
        const TYPE = 401;
        const RESOURCE_BUNDLE = 501;
        const MISSING_RESOURCE = 511;
        const VALUE = 611;
    }
}
//
// EOF: ExceptionCodes.php
