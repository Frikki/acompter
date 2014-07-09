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
     * Class EconomicUnitRequestModel
     *
     * @package     Glaciersoft\Acompter\Boundaries\EconomicUnits
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    abstract class EconomicUnitRequestModel
        implements EconomicUnitSpecification
    {
        /**
         * @return string
         */
        public function name()
        {
            return $this->getName();
        }

        /**
         * @return string
         */
        public function legalName()
        {
            return $this->getLegalName();
        }

        /**
         * @return string
         */
        public function taxId()
        {
            return $this->getTaxId();
        }

        /**
         * @return array
         */
        public function streetAddress()
        {
            return $this->getStreetAddress();
        }

        /**
         * @return string
         */
        public function city()
        {
            return $this->getCity();
        }

        /**
         * @return string
         */
        public function state()
        {
            return $this->getState();
        }

        /**
         * @return string
         */
        public function postalCode()
        {
            return $this->getPostalCode();
        }

        /**
         * @return string
         */
        public function country()
        {
            return $this->getCountry();
        }

        /**
         * @return string
         */
        public function phoneNumber()
        {
            return $this->getPhoneNumber();
        }

        /**
         * @return string
         */
        public function faxNumber()
        {
            return $this->getFaxNumber();
        }

        /**
         * @return string
         */
        public function emailAddress()
        {
            return $this->getEmailAddress();
        }

        /**
         * @return string
         */
        public function webSiteUrl()
        {
            return $this->getWebSiteUrl();
        }

        /**
         * @return int
         */
        public function firstMonthOfFiscalYear()
        {
            return $this->getFirstMonthOfFiscalYear();
        }

        /**
         * @return string
         */
        public function administratorPassword()
        {
            return $this->getAdministratorPassword();
        }

        /**
         * @return string
         */
        protected abstract function getName();

        /**
         * @return string
         */
        protected abstract function getLegalName();

        /**
         * @return string
         */
        protected abstract function getTaxId();

        /**
         * @return array
         */
        protected abstract function getStreetAddress();

        /**
         * @return string
         */
        protected abstract function getCity();

        /**
         * @return string
         */
        protected abstract function getState();

        /**
         * @return string
         */
        protected abstract function getPostalCode();

        /**
         * @return string
         */
        protected abstract function getCountry();

        /**
         * @return string
         */
        protected abstract function getPhoneNumber();

        /**
         * @return string
         */
        protected abstract function getFaxNumber();

        /**
         * @return string
         */
        protected abstract function getEmailAddress();

        /**
         * @return string
         */
        protected abstract function getWebSiteUrl();

        /**
         * @return int
         */
        protected abstract function getFirstMonthOfFiscalYear();

        /**
         * @return string
         */
        protected abstract function getAdministratorPassword();
    }
}
//
// EOF: EconomicUnitRequestModel.php
