<?php
/**
 * Glaciersoft Acompter
 *
 * Copyright (c) 2014, Glaciersoft (http://www.glaciersoft.com).
 * All rights reserved.
 *
 * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
 * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
 * @license     For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 * @link        http://glaciersoft.com
 * @since       File available since Release 1.0.0
 */
namespace Glaciersoft\Acompter\Interactors\EconomicUnits
{
    // Use directives (A...Z)
    use Glaciersoft\Acompter\Gateways\EconomicUnits\EconomicUnitGateway;

    /**
     * Class EconomicUnitInteractor
     *
     * @package     Glaciersoft\Acompter\Interactors\EconomicUnits
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    abstract class EconomicUnitInteractor
    {
        protected $gateway;

        public function __construct(EconomicUnitGateway $gateway)
        {
            $this->gateway = $gateway;
        }
    }
}
//
// EOF: EconomicUnitInteractor.php
