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
namespace Glaciersoft\Acompter\Interactors\EconomicUnits
{
    // Use directives (A...Z)
    use
        Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitResponseRecipient;
    use Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitFinder;

    /**
     * Class FindEconomicUnitByNameInteractor
     *
     * @package     Glaciersoft\Acompter\Interactors\EconomicUnits
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    class FindEconomicUnitByNameInteractor
        extends EconomicUnitInteractor
        implements EconomicUnitFinder
    {
        /**
         * @param string $name
         * @param EconomicUnitResponseRecipient $recipient
         *
         * @return void
         */
        public function execute($name, EconomicUnitResponseRecipient $recipient)
        {
            $economicUnit = $this->gateway->findByName($name);
            if ($economicUnit->isValid())
                $recipient->success();
        }
    }
}
//
// EOF: FindEconomicUnitByNameInteractor.php
