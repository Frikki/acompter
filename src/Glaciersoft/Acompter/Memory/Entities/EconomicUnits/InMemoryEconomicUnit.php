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
    use Glaciersoft\Gaia\Entities\Names\Nameable;
    use Glaciersoft\Gaia\Entities\Names\NameFactory;

    /**
     * Class InMemoryEconomicUnit
     *
     * @package     Glaciersoft\Acompter\Memory\Entities\EconomicUnits
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    class InMemoryEconomicUnit
        extends EconomicUnitImpl
    {
        private $administratorPassword;

        private $city;

        private $country;

        private $emailAddress;

        private $faxNumber;

        private $firstMonthOfFiscalYear;

        /**
         * @var Nameable
         */
        private $legalName;

        /**
         * @var Nameable
         */
        private $name;

        private $phoneNumber;

        private $postalCode;

        private $state;

        private $streetAddress;

        private $taxId;

        private $webSiteUrl;

        public function __construct(array $data)
        {
            $this->setName($data[0]);
            $this->setLegalName($data[1]);
            $this->setTaxId($data[2]);
            $this->setStreetAddress($data[3]);
            $this->setCity($data[4]);
            $this->setState($data[5]);
            $this->setPostalCode($data[6]);
            $this->setCountry($data[7]);
            $this->setPhoneNumber($data[8]);
            $this->setFaxNumber($data[9]);
            $this->setEmailAddress($data[10]);
            $this->setWebSiteUrl($data[11]);
            $this->setFirstMonthOfFiscalYear($data[12]);
            $this->setAdministratorPassword($data[13]);
        }

        /**
         * @return string
         */
        protected function getAdministratorPassword()
        {
            return $this->administratorPassword;
        }

        /**
         * @param string $value
         */
        protected function setAdministratorPassword($value)
        {
            $this->administratorPassword = trim($value);
        }

        /**
         * @return string
         */
        protected function getCity()
        {
            return $this->city;
        }

        /**
         * @param string $value
         */
        protected function setCity($value)
        {
            $this->city = trim($value);
        }

        /**
         * @return string
         */
        protected function getCountry()
        {
            return $this->country;
        }

        /**
         * @param string $value
         */
        protected function setCountry($value)
        {
            $this->country = trim($value);
        }

        /**
         * @return string
         */
        protected function getEmailAddress()
        {
            return $this->emailAddress;
        }

        /**
         * @param string $value
         */
        protected function setEmailAddress($value)
        {
            $this->emailAddress = trim($value);
        }

        /**
         * @return string
         */
        protected function getFaxNumber()
        {
            return $this->faxNumber;
        }

        /**
         * @param string $value
         */
        protected function setFaxNumber($value)
        {
            $this->faxNumber = trim($value);
        }

        /**
         * @return int
         */
        protected function getFirstMonthOfFiscalYear()
        {
            return $this->firstMonthOfFiscalYear;
        }

        /**
         * @param string $value
         */
        protected function setFirstMonthOfFiscalYear($value)
        {
            $this->firstMonthOfFiscalYear = (int)$value;
        }

        /**
         * @return Nameable
         */
        protected function getLegalName()
        {
            return $this->legalName;
        }

        /**
         * @param string $value
         */
        protected function setLegalName($value)
        {
            $this->legalName = NameFactory::make($value);
        }

        /**
         * @return Nameable
         */
        protected function getName()
        {
            return $this->name;
        }

        /**
         * @param string $value
         */
        protected function setName($value)
        {
            $this->name = NameFactory::make($value);
        }

        /**
         * @return string
         */
        protected function getPhoneNumber()
        {
            return $this->phoneNumber;
        }

        /**
         * @param string $value
         */
        protected function setPhoneNumber($value)
        {
            $this->phoneNumber = trim($value);
        }

        /**
         * @return string
         */
        protected function getPostalCode()
        {
            return $this->postalCode;
        }

        /**
         * @param string $value
         */
        protected function setPostalCode($value)
        {
            $this->postalCode = trim($value);
        }

        /**
         * @return string
         */
        protected function getState()
        {
            return $this->state;
        }

        /**
         * @param string $value
         */
        protected function setState($value)
        {
            $this->state = trim($value);
        }

        /**
         * @return array
         */
        protected function getStreetAddress()
        {
            return $this->streetAddress;
        }

        /**
         * @param array $value
         */
        protected function setStreetAddress(array $value)
        {
            $this->streetAddress = array_map('trim', $value);
        }

        /**
         * @return string
         */
        protected function getTaxId()
        {
            return $this->taxId;
        }

        /**
         * @param string $value
         */
        protected function setTaxId($value)
        {
            $this->taxId = trim($value);
        }

        /**
         * @return string
         */
        protected function getWebSiteUrl()
        {
            return $this->webSiteUrl;
        }

        /**
         * @param string $value
         */
        protected function setWebSiteUrl($value)
        {
            $this->webSiteUrl = trim($value);
        }

        /**
         * @return void
         */
        protected function validate()
        {
            $this->addRule(
                'name',
                'StringRepresentation cannot be an empty string.',
                '' === $this->name()->value()
            );
        }
    }
}
//
// EOF: InMemoryEconomicUnit.php
