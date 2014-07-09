<?php
/**
 * Glaciersoft\Gaia\Entities\Resources
 *
 * PHP Version 5.3
 *
 * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
 * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
 * @license     For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 * @link        http://glaciersoft.com
 */
namespace Glaciersoft\Gaia\Entities\Resources
{
    // Use directives (A...Z)

    /**
     * String resource entity.
     *
     * @package Glaciersoft\Gaia\Entities\Resources
     */
    class StringResource
    {
        /**
         * @var string
         */
        private $resource;

        /**
         * @param string $resource The string resource this entity should represent.
         */
        public function __construct($resource)
        {
            $this->resource = $resource;
        }

        /**
         * Gets the string resource represented by this entity.
         *
         * @return string The string resource represented by this entity.
         */
        public function getResource()
        {
            return $this->resource;
        }

        /**
         * String representation of this entity.
         *
         * Converts the `StringResource` to the string resource associated with
         * this entity.
         *
         * @return string The string representation.
         */
        public function __toString()
        {
            return $this->resource;
        }
    }
}
//
// EOF: StringResource.php
