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
namespace Glaciersoft\Acompter\Entities
{
    // Use directives (A...Z)
    use Glaciersoft\Gaia\Entities\StringRepresentation;
    use Glaciersoft\Gaia\Entities\Validators\SelfValidator;
    use Glaciersoft\Gaia\Entities\Validatory;

    /**
     * Class EconomicUnit
     *
     * @package     Glaciersoft\Acompter\Entities
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    abstract class EconomicUnit
        extends SelfValidator
        implements Validatory
    {
        /**
         * @return StringRepresentation
         */
        public abstract function name();

        /**
         * @return StringRepresentation
         */
        public abstract function legalName();

        /**
         * @return string
         */
        public abstract function taxId();

        /**
         * @return array
         */
        public abstract function streetAddress();

        /**
         * @return string
         */
        public abstract function city();

        /**
         * @return string
         */
        public abstract function state();

        /**
         * @return string
         */
        public abstract function postalCode();

        /**
         * @return string
         */
        public abstract function country();

        /**
         * @return string
         */
        public abstract function phoneNumber();

        /**
         * @return string
         */
        public abstract function faxNumber();

        /**
         * @return string
         */
        public abstract function emailAddress();

        /**
         * @return string
         */
        public abstract function webSiteUrl();

        /**
         * @return int
         */
        public abstract function firstMonthOfFiscalYear();

        /**
         * @return string
         */
        public abstract function administratorPassword();
    }
}
//
// EOF: EconomicUnit.php
