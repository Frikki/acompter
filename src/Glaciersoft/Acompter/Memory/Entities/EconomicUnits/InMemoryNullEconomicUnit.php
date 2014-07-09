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
namespace Glaciersoft\Acompter\Memory\Entities\EconomicUnits
{
    // Use directives (A...Z)
    use Glaciersoft\Acompter\Entities\EconomicUnits\EconomicUnitImpl;

    /**
     * Class InMemoryNullEconomicUnit\EconomicUnits
     *
     * @package     Glaciersoft\Acompter\Memory\Entities
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    class InMemoryNullEconomicUnit
        extends EconomicUnitImpl
    {
        /**
         * Prevents new instance of the *InMemoryNullEconomicUnit* via `new`.
         */
        protected function __construct() { }

        /**
         * @return string
         */
        protected function getAdministratorPassword() { }

        /**
         * @return string
         */
        protected function getCity() { }

        /**
         * @return string
         */
        protected function getCountry() { }

        /**
         * @return string
         */
        protected function getEmailAddress() { }

        /**
         * @return string
         */
        protected function getFaxNumber() { }

        /**
         * @return int
         */
        protected function getFirstMonthOfFiscalYear() { }

        /**
         * @return string
         */
        protected function getLegalName() { }

        /**
         * @return string
         */
        protected function getName() { }

        /**
         * @return string
         */
        protected function getPhoneNumber() { }

        /**
         * @return string
         */
        protected function getPostalCode() { }

        /**
         * @return string
         */
        protected function getState() { }

        /**
         * @return array
         */
        protected function getStreetAddress() { }

        /**
         * @return string
         */
        protected function getTaxId() { }

        /**
         * @return string
         */
        protected function getWebSiteUrl() { }

        /**
         * Returns the *Singleton* instance of this class.
         *
         * @return InMemoryNullEconomicUnit
         */
        public static function instance()
        {
            static $instance = NULL;
            if (NULL === $instance)
            {
                $instance = new static();
            }

            return $instance;
        }

        /**
         * Prevents cloning.
         */
        private function __clone() { }

        /**
         * Prevents unserializing.
         */
        private function __wakeup() { }

        /**
         * @return void
         */
        protected function validate()
        {
            $this->addRule('NullObject', 'This is a null object', TRUE);
        }
    }
}
//
// EOF: InMemoryNullEconomicUnit.php
