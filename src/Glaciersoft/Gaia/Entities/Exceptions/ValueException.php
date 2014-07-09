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
     * Class ValueException
     *
     * @package Glaciersoft\Gaia\Entities\Exceptions
     */
    class ValueException
        extends GaiaException
    {
        /**
         * @var int
         */
        protected $code = ExceptionCodes::VALUE;

        /**
         * @var string
         */
        protected $message = 'Unknown value exception';
    }
}
//
// EOF: ValueException.php
