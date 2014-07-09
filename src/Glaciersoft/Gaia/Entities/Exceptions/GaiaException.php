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
    use Glaciersoft\Gaia\Gateways\Resources\ResourceBundleGateway;
    use Glaciersoft\Gaia\Gateways\Resources\StringResourceGateway;
    use Glaciersoft\Gaia\Interactors\Resources\StringResourceFetcher;

    /**
     * Defines the base class for exceptions in the Gaia namespace.
     *
     * GaiaException does not provide information as to the cause of the
     * Exception. In most scenarios, instances of this class should not be
     * thrown. In cases where this class is instantiated, a human-readable
     * message describing the error should be passed to the constructor.
     *
     * @package Glaciersoft\Gaia\Entities\Exceptions
     */
    class GaiaException
        extends \Exception
    {
        /**
         * @var int
         */
        protected $code = ExceptionCodes::GAIA;

        /**
         * @var string
         */
        protected $message = 'Unknown Gaia exception';

        /**
         * @param string $message
         * @param \Exception $previousException
         *
         * @internal param int $code
         */
        public function __construct(
            $message = '',
            \Exception $previousException = NULL
        )
        {
            $this->message =
                (!isset($message) || '' === $message) ? $this->message
                    : $message;
            parent::__construct($this->message, $this->code, $previousException);
        }
    }
}
//
// EOF: GaiaException.php
