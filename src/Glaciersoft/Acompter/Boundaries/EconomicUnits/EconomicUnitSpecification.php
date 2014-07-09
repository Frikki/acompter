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
namespace Glaciersoft\Acompter\Boundaries\EconomicUnits
{
    // Use directives (A...Z)

    /**
     * Interface EconomicUnitSpecification
     *
     * @package     Glaciersoft\Acompter\Boundaries\EconomicUnits
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    interface EconomicUnitSpecification
    {
        /**
         * @return Name
         */
        public function name();

        /**
         * @return Name
         */
        public function legalName();

        /**
         * @return string
         */
        public function taxId();

        /**
         * @return array
         */
        public function streetAddress();

        /**
         * @return string
         */
        public function city();

        /**
         * @return string
         */
        public function state();

        /**
         * @return string
         */
        public function postalCode();

        /**
         * @return string
         */
        public function country();

        /**
         * @return string
         */
        public function phoneNumber();

        /**
         * @return string
         */
        public function faxNumber();

        /**
         * @return string
         */
        public function emailAddress();

        /**
         * @return string
         */
        public function webSiteUrl();

        /**
         * @return int
         */
        public function firstMonthOfFiscalYear();

        /**
         * @return string
         */
        public function administratorPassword();
    }
}
//
// EOF: EconomicUnitSpecification.php
