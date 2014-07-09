<?php
/**
 * Glaciersoft\Gaia\Gateways\Resources
 *
 * PHP Version 5.3
 *
 * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
 * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
 * @license     For the full copyright and license information, please view the
 *              LICENSE file that was distributed with this source code.
 * @link        http://glaciersoft.com
 */
namespace Glaciersoft\Gaia\Gateways\Resources
{
    // Use directives (A...Z)

    /**
     * Interface IResourceBundleGateway
     *
     * @package Glaciersoft\Gaia\Gateways\Resources
     */
    interface IResourceBundleGateway
    {
        const DEFAULT_LOCALE = 'en_US';

        const LOCALE_SEPARATOR = '_';

        /**
         * @param string|object $context [optional]
         * @param string $localesDirectoryPath [optional]
         * @param string $localeId [optional]
         */
        public function __construct(
            $context = NULL,
            $localesDirectoryPath = '',
            $localeId = ''
        );

        /**
         * Get bundle's last error code.
         *
         * @link http://php.net/manual/en/resourcebundle.geterrorcode.php
         *
         * @return int error code from last bundle object call.
         */
        public function getErrorCode();

        /**
         * Get bundle's last error message.
         *
         * @link http://php.net/manual/en/resourcebundle.geterrormessage.php
         *
         * @return string error message from last bundle object's call.
         */
        public function getErrorMessage();

        /**
         * Get supported locales.
         *
         * @link http://php.net/manual/en/resourcebundle.locales.php
         *
         * @param string $bundlename The directory where the data is stored or
         * the name of the .dat file.
         *
         * @return array the list of locales supported by the bundle.
         */
        public static function getLocales($bundlename);

        /**
         * Create a resource bundle.
         *
         * @link http://php.net/manual/en/resourcebundle.create.php
         *
         * @param string $locale Locale for which the resources should be
         * loaded (locale name, e.g. en_CA).
         * @param string $bundlename The directory where the data is stored or
         * the name of the .dat file.
         * @param bool $fallback [optional] Whether locale should match exactly
         * or fallback to parent locale is allowed.
         *
         * @return \ResourceBundle `ResourceBundle` object or false on error.
         */
        public static function create($locale, $bundlename, $fallback = NULL);

        /**
         * Get data from the bundle.
         *
         * @link http://php.net/manual/en/resourcebundle.get.php
         *
         * @param string|int $index Data index, must be string or integer.
         *
         * @return mixed the data located at the index or null on error.
         * Strings, integers and binary data strings are returned as
         * corresponding PHP types, integer array is returned as PHP array.
         * Complex types are returned as `ResourceBundle` object.
         */
        public function get($index);

        /**
         * Get number of elements in the bundle.
         *
         * @link http://php.net/manual/en/resourcebundle.count.php
         *
         * @return int number of elements in the bundle.
         */
        public function count();
    }
}
//
// EOF: IResourceBundleGateway.php
