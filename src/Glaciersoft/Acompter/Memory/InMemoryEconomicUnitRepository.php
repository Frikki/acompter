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
namespace Glaciersoft\Acompter\Memory
{
    // Use directives (A...Z)
    use Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitRequestModel;
    use Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitSpecification;
    use Glaciersoft\Acompter\Entities\EconomicUnits\EconomicUnit;
    use Glaciersoft\Acompter\Gateways\EconomicUnits\EconomicUnitGateway;
    use Glaciersoft\Acompter\Memory\Entities\EconomicUnits\InMemoryEconomicUnitFactory;

    /**
     * Class InMemoryEconomicUnitRepository
     *
     * @package     Glaciersoft\Acompter\Memory
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    class InMemoryEconomicUnitRepository
        implements EconomicUnitGateway
    {
        private $economicUnits = array();

        /**
         * {@inheritdoc}
         */
        public function add(EconomicUnitSpecification $economicUnitSpecification)
        {
            $data = array(
                $economicUnitSpecification->name(),
                $economicUnitSpecification->legalName(),
                $economicUnitSpecification->taxId(),
                $economicUnitSpecification->streetAddress(),
                $economicUnitSpecification->city(),
                $economicUnitSpecification->state(),
                $economicUnitSpecification->postalCode(),
                $economicUnitSpecification->country(),
                $economicUnitSpecification->phoneNumber(),
                $economicUnitSpecification->faxNumber(),
                $economicUnitSpecification->emailAddress(),
                $economicUnitSpecification->webSiteUrl(),
                $economicUnitSpecification->firstMonthOfFiscalYear(),
                $economicUnitSpecification->administratorPassword()
            );

            return InMemoryEconomicUnitFactory::make($data);
        }

        /**
         * {@inheritdoc}
         */
        public function save(EconomicUnit $economicUnit)
        {
            if (!$economicUnit->isValid())
                return FALSE;
            $name = $economicUnit->name();
            $nameValue = $name->value();
            $this->economicUnits[$nameValue] = $economicUnit;

            return TRUE;
        }

        /**
         * {@inheritdoc}
         */
        public function findByName($name)
        {
            return isset($this->economicUnits[$name])
                ? $this->economicUnits[$name]
                : InMemoryEconomicUnitFactory::make(array(NULL));
        }
    }
}
//
// EOF: InMemoryEconomicUnitRepository.php
