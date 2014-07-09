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
namespace checks\contract\Glaciersoft\Acompter\Boundaries\EconomicUnits
{
    // Use directives (A...Z)

    /**
     * Class EconomicUnitRegistrarCollaborationCheck
     *
     * @package     checks\contract\Glaciersoft\Acompter\Boundaries\EconomicUnits
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    class EconomicUnitRegistrarCollaborationCheck
        extends \PHPUnit_Framework_TestCase
    {
        protected $sut;

        protected function setUp()
        {
            $this->sut =
                $this->getMockBuilder(
                    'Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitRegistrar'
                )->getMock();
        }

        protected function tearDown()
        {
            unset($this->sut);
        }

        /**
         * @test
         */
        public function canExecute()
        {
            // Arrange
            $requestDummy =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitRequestModel',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array()
                );

            $recipientDummy = $this->getMockBuilder(
                'Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitResponseRecipient'
            )->getMock();

            $constraint = 'execute';
            $expectedValue = NULL;
            $this->sut->expects($this->once())->method($constraint)->with(
                $this->equalTo($requestDummy),
                $this->equalTo($recipientDummy)
            );

            // Act
            $actualValue = $this->sut->$constraint($requestDummy, $recipientDummy);

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }
    }
}
//
// EOF: EconomicUnitRegistrarCollaborationCheck.php
