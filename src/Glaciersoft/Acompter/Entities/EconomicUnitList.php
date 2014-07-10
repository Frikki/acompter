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
namespace Glaciersoft\Acompter\Entities
{
    // Use directives (A...Z)
    use Glaciersoft\Gaia\Entities\Exceptions\ArgumentException;
    use Glaciersoft\Gaia\Entities\Exceptions\ValueException;
    use Glaciersoft\Gaia\Entities\TypeSafeArray;

    /**
     * Class EconomicUnitList
     *
     * @package     Glaciersoft\Acompter\Entities
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    abstract class EconomicUnitList
        extends TypeSafeArray
    {
        public function append($value)
        {
            $this->typeCheck($value);
            $this->offsetSet($value->name(), $value);
        }

        /**
         * @param mixed $value
         *
         * @throws \Glaciersoft\Gaia\Entities\Exceptions\ArgumentException
         * @return bool
         */
        protected function typeCheck($value)
        {
            if (!($value instanceof EconomicUnit))
                throw new ArgumentException(sprintf(
                    '%1$s expects $value to be `EconomicUnit`; received %2$s',
                    __METHOD__,
                    gettype($value)
                ));

            return TRUE;
        }
    }
}
//
// EOF: EconomicUnitList.php
