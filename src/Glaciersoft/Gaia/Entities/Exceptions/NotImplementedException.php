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
     * The exception that is thrown when a requested method or operation is
     * not implemented.
     *
     * @package Glaciersoft\Gaia\Entities\Exceptions
     */
    class NotImplementedException
        extends GaiaException
    {
        /**
         * @var int
         */
        protected $code = ExceptionCodes::NOT_IMPLEMENTED;

        /**
         * @var string
         */
        protected $message = 'Not implemented exception';
    }
}
//
// EOF: NotImplementedException.php
