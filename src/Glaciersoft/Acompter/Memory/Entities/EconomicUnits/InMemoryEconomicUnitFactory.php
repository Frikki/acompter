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
namespace Glaciersoft\Acompter\Memory\Entities\EconomicUnits
{
    // Use directives (A...Z)
    use Glaciersoft\Acompter\Entities\EconomicUnits\EconomicUnitFactory;

    /**
     * Class InMemoryEconomicUnitFactory
     *
     * @package     Glaciersoft\Acompter\Memory\Entities\EconomicUnits
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    class InMemoryEconomicUnitFactory
        implements EconomicUnitFactory
    {
        /**
         * @param array $data
         *
         * @return EconomicUnit
         */
        public static function make(array $data)
        {
            $economicUnit = NULL;
            switch ($data[0])
            {
                case '':
                case NULL:
                    $economicUnit = InMemoryNullEconomicUnit::instance();
                    break;
                default:
                    $economicUnit = new InMemoryEconomicUnit($data);
            }
            return $economicUnit;
        }
    }
}
//
// EOF: InMemoryEconomicUnitFactory.php
