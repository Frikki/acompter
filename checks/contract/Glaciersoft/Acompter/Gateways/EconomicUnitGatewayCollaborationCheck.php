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
namespace checks\contract\Glaciersoft\Acompter\Gateways
{
    // Use directives (A...Z)

    /**
     * Class EconomicUnitGatewayCollaborationCheck
     *
     * @package     checks\contract\Glaciersoft\Acompter\Gateways
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    class EconomicUnitGatewayCollaborationCheck
        extends \PHPUnit_Framework_TestCase
    {
        protected $sut;

        protected function setUp()
        {
            $this->sut =
                $this->getMockBuilder(
                    'Glaciersoft\Acompter\Gateways\EconomicUnitGateway'
                )->getMock();
        }

        protected function tearDown()
        {
            unset($this->sut);
        }

        /**
         * @test
         */
        public function canAddEconomicUnit()
        {
            // Arrange
            $requestStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitSpecification',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array(
                        'name',
                        'firstMonthOfFiscalYear'
                    )
                );
            $requestStub->expects($this->any())->method('name')->will(
                $this->returnValue('Edelweiss Corporation')
            );
            $requestStub->expects($this->any())->method(
                'firstMonthOfFiscalYear'
            )->will($this->returnValue(1));

            $economicUnitStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnit',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array(
                        'isValid',
                    )
                );
            $economicUnitStub->expects($this->any())->method('isValid')->will(
                $this->returnValue(TRUE)
            );

            $constraint = 'add';
            $expectedValue = $economicUnitStub;
            $this->sut->expects($this->once())->method($constraint)->with(
                $this->equalTo($requestStub)
            )->will($this->returnValue($expectedValue));

            // Act
            $actualValue = $this->sut->$constraint($requestStub);

            // Assert
            $this->assertEquals(
                $expectedValue,
                $actualValue
            );
        }

        /**
         * @test
         */
        public function cannotAddEconomicUnitWithInvalidSpecification()
        {
            // Arrange
            $requestStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitSpecification',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array(
                        'name',
                        'firstMonthOfFiscalYear'
                    )
                );
            $requestStub->expects($this->any())->method('name')->will(
                $this->returnValue('')
            );
            $requestStub->expects($this->any())->method(
                'firstMonthOfFiscalYear'
            )->will($this->returnValue(13));

            $economicUnitStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnit',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array(
                        'isValid',
                    )
                );
            $economicUnitStub->expects($this->any())->method('isValid')->will(
                $this->returnValue(FALSE)
            );

            $constraint = 'add';
            $expectedValue = $economicUnitStub;
            $this->sut->expects($this->once())->method($constraint)->with(
                $this->equalTo($requestStub)
            )->will($this->returnValue($expectedValue));

            // Act
            $actualValue = $this->sut->$constraint($requestStub);

            // Assert
            $this->assertEquals(
                $expectedValue,
                $actualValue
            );
        }

        /**
         * @test
         */
        public function canRemoveEconomicUnit()
        {
            // Arrange
            $economicUnitStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnit',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array('isValid')
                );
            $economicUnitStub->expects($this->any())->method('isValid')->will(
                $this->returnValue(TRUE)
            );

            $constraint = 'remove';
            $expectedValue = TRUE;
            $this->sut->expects($this->once())->method($constraint)->with(
                $this->equalTo($economicUnitStub)
            )->will($this->returnValue($expectedValue));

            // Act
            $actualValue = $this->sut->$constraint($economicUnitStub);

            // Assert
            $this->assertEquals(
                $expectedValue,
                $actualValue
            );
        }

        /**
         * @test
         */
        public function cannotRemoveNonexistingEconomicUnit()
        {
            // Arrange
            $economicUnitStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnit',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array('isValid')
                );
            $economicUnitStub->expects($this->any())->method('isValid')->will(
                $this->returnValue(TRUE)
            );

            $constraint = 'remove';
            $expectedValue = FALSE;
            $this->sut->expects($this->once())->method($constraint)->with(
                $this->equalTo($economicUnitStub)
            )->will($this->returnValue($expectedValue));

            // Act
            $actualValue = $this->sut->$constraint($economicUnitStub);

            // Assert
            $this->assertEquals(
                $expectedValue,
                $actualValue
            );
        }

        /**
         * @test
         */
        public function cannotRemoveInvalidEconomicUnit()
        {
            // Arrange
            $economicUnitStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnit',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array('isValid')
                );
            $economicUnitStub->expects($this->any())->method('isValid')->will(
                $this->returnValue(FALSE)
            );

            $constraint = 'remove';
            $expectedValue = FALSE;
            $this->sut->expects($this->once())->method($constraint)->with(
                $this->equalTo($economicUnitStub)
            )->will($this->returnValue($expectedValue));

            // Act
            $actualValue = $this->sut->$constraint($economicUnitStub);

            // Assert
            $this->assertEquals(
                $expectedValue,
                $actualValue
            );
        }

        /**
         * @test
         */
        public function canSaveEconomicUnit()
        {
            // Arrange
            $economicUnitStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnit',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array('isValid')
                );
            $economicUnitStub->expects($this->any())->method('isValid')->will(
                $this->returnValue(TRUE)
            );

            $constraint = 'save';
            $expectedValue = TRUE;
            $this->sut->expects($this->once())->method($constraint)->with(
                $this->equalTo($economicUnitStub)
            )->will($this->returnValue($expectedValue));

            // Act
            $actualValue = $this->sut->$constraint($economicUnitStub);

            // Assert
            $this->assertEquals(
                $expectedValue,
                $actualValue
            );
        }

        /**
         * @test
         */
        public function cannotSaveInvalidEconomicUnit()
        {
            // Arrange
            $economicUnitStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnit',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array('isValid')
                );
            $economicUnitStub->expects($this->any())->method('isValid')->will(
                $this->returnValue(FALSE)
            );

            $constraint = 'save';
            $expectedValue = FALSE;
            $this->sut->expects($this->once())->method($constraint)->with(
                $this->equalTo($economicUnitStub)
            )->will($this->returnValue($expectedValue));

            // Act
            $actualValue = $this->sut->$constraint($economicUnitStub);

            // Assert
            $this->assertEquals(
                $expectedValue,
                $actualValue
            );
        }

        /**
         * @test
         */
        public function cannotFindNonexistingEconomicUnitsSpecifiedByName()
        {
            // Arrange
            $economicUnitSpecificationMock =
                $this->getMockBuilder(
                    'Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitSpecification'
                )->getMock();
            $economicUnitSpecificationMock->expects($this->any())->method(
                'name'
            )->will($this->returnValue('XybluZWG'));

            $economicUnitStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnit',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array('isValid')
                );
            $economicUnitStub->expects($this->any())->method('isValid')->will(
                $this->returnValue(FALSE)
            );

            $constraint = 'find';
            $expectedValue = $economicUnitStub;
            $this->sut->expects($this->once())->method($constraint)->with(
                $this->equalTo($economicUnitSpecificationMock)
            )->will($this->returnValue($expectedValue));

            // Act
            $actualValue = $this->sut->$constraint($economicUnitSpecificationMock);

            // Assert
            $this->assertEquals(
                $expectedValue,
                $actualValue
            );
        }

        /**
         * @test
         */
        public function canFindOneEconomicUnitSpecifiedByName()
        {
            // Arrange
            $name = 'Edelweiss Corporation';
            $economicUnitSpecificationMock =
                $this->getMockBuilder(
                    'Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitSpecification'
                )->getMock();
            $economicUnitSpecificationMock->expects($this->any())->method(
                'name'
            )->will($this->returnValue($name));

            $economicUnitStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnit',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array('name', 'isValid')
                );
            $economicUnitStub->expects($this->any())->method('name')->will(
                $this->returnValue($name)
            );
            $economicUnitStub->expects($this->any())->method('isValid')->will(
                $this->returnValue(TRUE)
            );

            $constraint = 'find';
            $expectedValue = $economicUnitStub;
            $this->sut->expects($this->once())->method($constraint)->with(
                $this->equalTo($economicUnitSpecificationMock)
            )->will($this->returnValue($expectedValue));

            // Act
            $actualValue = $this->sut->$constraint($economicUnitSpecificationMock);

            // Assert
            $this->assertEquals(
                $expectedValue,
                $actualValue
            );
        }

        /**
         * @test
         */
        public function canFindAllEconomicUnitsSpecifiedByNameWildcard()
        {
            // Arrange
            $name = '*';
            $economicUnitSpecificationMock =
                $this->getMockBuilder(
                    'Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitSpecification'
                )->getMock();
            $economicUnitSpecificationMock->expects($this->any())->method(
                'name'
            )->will($this->returnValue($name));

            $economicUnitStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnit',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array('name', 'isValid')
                );
            $economicUnitStub->expects($this->any())->method('name')->will(
                $this->returnValue($name)
            );
            $economicUnitStub->expects($this->any())->method('isValid')->will(
                $this->returnValue(TRUE)
            );

            $constraint = 'find';
            $expectedValue = $economicUnitStub;
            $this->sut->expects($this->once())->method($constraint)->with(
                $this->equalTo($economicUnitSpecificationMock)
            )->will($this->returnValue($expectedValue));

            // Act
            $actualValue = $this->sut->$constraint($economicUnitSpecificationMock);

            // Assert
            $this->assertEquals(
                $expectedValue,
                $actualValue
            );
        }
    }
}
//
// EOF: EconomicUnitGatewayCollaborationCheck.php
