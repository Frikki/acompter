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
namespace Glaciersoft\Acompter\Boundaries\EconomicUnits
{
    // Use directives (A...Z)

    /**
     * Interface EconomicUnitFinder
     *
     * @package     Glaciersoft\Acompter\Boundaries\EconomicUnits
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    interface EconomicUnitFinder
    {
        /**
         * @param string $name
         * @param EconomicUnitResponseRecipient $recipient
         *
         * @return void
         */
        public function execute($name, EconomicUnitResponseRecipient $recipient);
    }
}
//
// EOF: EconomicUnitFinder.php
