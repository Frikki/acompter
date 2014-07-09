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
namespace Glaciersoft\Gaia\Entities
{
    // Use directives (A...Z)

    /**
     * Interface Validatory
     *
     * @package     Glaciersoft\Gaia\Entities
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    interface Validatory
    {
        /**
         * @return bool
         */
        public function isValid();

        /**
         * @return string
         */
        public function validationMessage();
    }
}
//
// EOF: Validatory.php
