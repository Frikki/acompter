<?php
/**
 * Glaciersoft\Gaia\Interactors\Resources
 *
 * PHP Version 5.3
 *
 * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
 * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
 * @license     For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 * @link        http://glaciersoft.com
 */
namespace Glaciersoft\Gaia\Interactors\Resources
{
    // Use directives (A...Z)
    use Glaciersoft\Gaia\Entities\Exceptions\TypeException;
    use Glaciersoft\Gaia\Entities\Resources\StringResource;

    /**
     * Fetches a string resource.
     *
     * @see Glaciersoft\Gaia\Entities\Resources\StringResource
     *
     * @package Glaciersoft\Gaia\Interactors\Resources
     */
    class FetchStringResource
    {
        /**
         * Fetches a string resource.
         *
         * @param \ResourceBundle $resourceBundle The resource bundle in which
         * to search for the resource index.
         * @param string|int $resourceIndex The index used to obtain the string
         * resource.
         * @param string $defaultValue [optional] The default value if the
         * resource index is not found or if resource type is not string.
         *
         * @return StringResource The encapsulated resource at the resource
         * index.
         * @throws \Glaciersoft\Gaia\Entities\Exceptions\TypeException
         */
        public function execute(
            \ResourceBundle $resourceBundle,
            $resourceIndex,
            $defaultValue = NULL
        )
        {
            $resource = $resourceBundle->get($resourceIndex);
            $resource =
                (!is_string($resource) || is_null($resource)) ? $defaultValue : $resource;

            return new StringResource($resource);
        }
    }
}
//
// EOF: FetchStringResource.php
