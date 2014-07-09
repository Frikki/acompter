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
     * The ResourceBundleGateway class extends the native ResourceBundle class
     * and implements logic to fetch resources bundles in respect to context,
     * locale identifiers, and locales directory path.
     *
     * @package Glaciersoft\Gaia\Gateways\Resources
     */
    class ResourceBundleGateway
        extends \ResourceBundle
        implements IResourceBundleGateway
    {
        /**
         * @var string
         */
        private $localesDirectoryPath;

        /**
         * Fetches a resource bundle.
         *
         * @param string|object $context The context for which the resource
         *                               bundle should be loaded.
         * @param string $localesDirectoryPath The locales directory path.
         * @param string $localeId The locale identifier (e.g., 'en_US').
         *
         * @return \Glaciersoft\Gaia\Gateways\Resources\ResourceBundleGateway
         */
        public function __construct(
            $context = NULL,
            $localesDirectoryPath = '',
            $localeId = ''
        )
        {
            $context = $this->alignContextWithPolicy($context);
            $this->alignLocalesDirectoryPathWithPolicy($localesDirectoryPath);
            $localeId = empty($localeId) ? \Locale::getDefault() : $localeId;

            $this->localesDirectoryPath =
                $this->deriveValidPathFromLocaleId($localeId);
            $resourceBundleName =
                $this->deriveResourceBundleNameFromContext($context);

            return self::create(
                $resourceBundleName,
                $this->localesDirectoryPath
            );
        }

        /**
         * @param string|object $context
         *
         * @return string
         */
        protected function alignContextWithPolicy($context)
        {
            $context =
                str_replace(
                    '\\',
                    self::LOCALE_SEPARATOR,
                    is_string($context) && !empty($context)
                        ? $context
                        : get_class($this)
                );

            return $context;
        }

        /**
         * @param string $localesDirectoryPath
         */
        protected function alignLocalesDirectoryPathWithPolicy(
            $localesDirectoryPath
        )
        {
            $this->localesDirectoryPath =
                empty($localesDirectoryPath) ?
                    dirname(dirname(__DIR__)) .
                    DIRECTORY_SEPARATOR .
                    'Data' .
                    DIRECTORY_SEPARATOR .
                    'Locales' : $localesDirectoryPath;
        }

        /**
         * @param string $localeId
         *
         * @return string
         */
        protected function deriveValidPathFromLocaleId($localeId)
        {
            $validPath =
                $this->localesDirectoryPath . DIRECTORY_SEPARATOR . $localeId;
            if (!file_exists($validPath) && self::DEFAULT_LOCALE !== $localeId)
            {
                $localeId = $this->removeLastPartOfLocaleId($localeId);

                return $this->deriveValidPathFromLocaleId(
                    empty($localeId) ? self::DEFAULT_LOCALE : $localeId
                );
            }

            return $validPath;
        }

        /**
         * @param string $localeId
         *
         * @return string
         */
        protected function removeLastPartOfLocaleId($localeId)
        {
            return join(
                self::LOCALE_SEPARATOR,
                explode(self::LOCALE_SEPARATOR, $localeId, -1)
            );
        }

        /**
         * @param string $context
         *
         * @return string
         */
        protected function deriveResourceBundleNameFromContext($context)
        {
            $resourceBundlePath =
                $this->localesDirectoryPath .
                DIRECTORY_SEPARATOR .
                $context .
                '.res';
            $contextParts = explode(self::LOCALE_SEPARATOR, $context);
            if (!file_exists($resourceBundlePath) && count($contextParts) > 3)
            {
                $context =
                    $contextParts[0] . self::LOCALE_SEPARATOR .
                    $contextParts[1] . self::LOCALE_SEPARATOR .
                    array_pop($contextParts);

                return $this->deriveResourceBundleNameFromContext($context);
            }

            return $context;
        }
    }
}
//
// EOF: ResourceBundleGateway.php
