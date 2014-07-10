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
namespace Glaciersoft\Acompter\Gateways
{
    // Use directives (A...Z)
    use Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitSpecification;
    use Glaciersoft\Acompter\Entities\EconomicUnit;

    /**
     * Interface EconomicUnitGateway
     *
     * @package     Glaciersoft\Acompter\Gateways
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    interface EconomicUnitGateway
    {
        /**
         * @param EconomicUnitSpecification $economicUnitSpecification
         *
         * @return EconomicUnit
         */
        public function add(EconomicUnitSpecification $economicUnitSpecification);

        /**
         * @param EconomicUnit $economicUnit
         *
         * @return bool
         */
        public function remove(EconomicUnit $economicUnit);

        /**
         * @param EconomicUnit $economicUnit
         *
         * @return bool
         */
        public function save(EconomicUnit $economicUnit);

        /**
         * @param EconomicUnitSpecification $economicUnitSpecification
         *
         * @return EconomicUnit
         */
        public function find(EconomicUnitSpecification $economicUnitSpecification);
    }
}
//
// EOF: EconomicUnitGateway.php
