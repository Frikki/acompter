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
     * ArgumentException is thrown when a method is invoked and at least one of
     * the passed arguments does not meet the parameter specification of the
     * called method. All instances of ArgumentException should carry a
     * meaningful error message describing the invalid argument, as well as the
     * expected range of values for the argument.
     *
     * @package Glaciersoft\Gaia\Entities\Exceptions
     */
    class ArgumentException
        extends GaiaException
    {
        /**
         * @var int
         */
        protected $code = ExceptionCodes::ARGUMENT;

        /**
         * @var string
         */
        protected $message = 'Unknown argument exception';
    }
}
//
// EOF: ArgumentException.php
