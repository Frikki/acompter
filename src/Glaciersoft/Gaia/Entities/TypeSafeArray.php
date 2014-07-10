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
namespace Glaciersoft\Gaia\Entities
{
    // Use directives (A...Z)

    /**
     * Use as base class for type-specific array subclasses.
     *
     * Each subclass implements the typeCheck method to define its appropriate
     * type-checking behavior.
     *
     * @package     Glaciersoft\Gaia\Entities
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    abstract class TypeSafeArray
        extends \ArrayObject
    {
        /**
         * @param mixed $value
         */
        public function append($value)
        {
            $this->typeCheck($value);
            parent::append($value);
        }

        /**
         * @param mixed $index
         * @param mixed $value
         */
        public function offsetSet($index, $value)
        {
            $this->typeCheck($value);
            parent::offsetSet($index, $value);
        }

        /**
         * @param mixed $value
         *
         * @throws \Glaciersoft\Gaia\Entities\Exceptions\ArgumentException
         * @return bool
         */
        protected abstract function typeCheck($value);
    }
}
//
// EOF: TypeSafeArray.php
