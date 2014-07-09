<?php
/**
 * Glaciersoft Gaia
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
namespace Glaciersoft\Gaia\Entities\Validators
{
    // Use directives (A...Z)
    use Glaciersoft\Gaia\Entities\Validatory;

    /**
     * Class SelfValidator
     *
     * @package     Glaciersoft\Gaia\Entities\Validators
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    abstract class SelfValidator
        implements Validatory
    {
        /**
         * @var array
         */
        protected $brokenRules = array();

        /**
         * @param string $rule The name of the rule.
         * @param string $message The description of the error.
         * @param bool $isBroken `TRUE` if validation rule is broken.
         */
        protected function addRule($rule, $message, $isBroken)
        {
            if ($isBroken)
                $this->brokenRules[$rule] = $message;
            else
                $this->removeRule($rule);
        }

        /**
         * @param string $rule
         */
        protected function removeRule($rule)
        {
            if (isset($this->brokenRules[$rule]))
                unset($this->brokenRules[$rule]);
        }

        /**
         * @return bool
         */
        public function isValid()
        {
            $this->validate();

            return 0 === count($this->brokenRules);
        }

        /**
         * @return void
         */
        protected abstract function validate();

        /**
         * @return string
         */
        public function validationMessage()
        {
            $validationMessage = '';
            foreach ($this->brokenRules as $message)
                $validationMessage .= $message . PHP_EOL;

            return $validationMessage;
        }
    }
}
//
// EOF: SelfValidator.php
