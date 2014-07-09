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
     * Class EconomicUnitSpecificationCollaborationCheck
     *
     * @package checks\contract\Glaciersoft\Acompter\Boundaries\EconomicUnits
     */
    class EconomicUnitSpecificationCollaborationCheck
        extends \PHPUnit_Framework_TestCase
    {
        protected $sut;

        protected function setUp()
        {
            $this->sut =
                $this->getMockBuilder(
                    'Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitSpecification'
                )->getMock();
        }

        protected function tearDown()
        {
            unset($this->sut);
        }

        /**
         * @test
         */
        public function canReturnName()
        {
            // Arrange
            $constraint = 'name';
            $expectedValue = 'Edelweiss Corporation';
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }

        /**
         * @test
         */
        public function canReturnLegalName()
        {
            // Arrange
            $constraint = 'legalName';
            $expectedValue = 'Edelweiss Corporation';
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }

        /**
         * @test
         */
        public function canReturnTaxId()
        {
            // Arrange
            $constraint = 'taxId';
            $expectedValue = '654321';
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }

        /**
         * @test
         */
        public function canReturnStreetAddress()
        {
            // Arrange
            $constraint = 'streetAddress';
            $expectedValue = array('first line', 'second line');
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }

        /**
         * @test
         */
        public function canReturnCity()
        {
            // Arrange
            $constraint = 'city';
            $expectedValue = 'Reykjavik';
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }

        /**
         * @test
         */
        public function canReturnState()
        {
            // Arrange
            $constraint = 'state';
            $expectedValue = 'Gullbringusysla';
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }

        /**
         * @test
         */
        public function canReturnPostalCode()
        {
            // Arrange
            $constraint = 'postalCode';
            $expectedValue = 'IS-107';
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }

        /**
         * @test
         */
        public function canReturnCountry()
        {
            // Arrange
            $constraint = 'country';
            $expectedValue = 'Iceland';
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }

        /**
         * @test
         */
        public function canReturnPhoneNumber()
        {
            // Arrange
            $constraint = 'phoneNumber';
            $expectedValue = '(+354) 543 9876';
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }

        /**
         * @test
         */
        public function canReturnFaxNumber()
        {
            // Arrange
            $constraint = 'faxNumber';
            $expectedValue = '(+354) 543 6789';
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }

        /**
         * @test
         */
        public function canReturnEmailAddress()
        {
            // Arrange
            $constraint = 'emailAddress';
            $expectedValue = 'hello@edelweiss.is';
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }

        /**
         * @test
         */
        public function canReturnWebSiteUrl()
        {
            // Arrange
            $constraint = 'webSiteUrl';
            $expectedValue = 'http://edelweiss.is';
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }

        /**
         * @test
         */
        public function canReturnFirstMonthOfFiscalYear()
        {
            // Arrange
            $constraint = 'firstMonthOfFiscalYear';
            $expectedValue = 1;
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }

        /**
         * @test
         */
        public function canReturnAdministratorPassword()
        {
            // Arrange
            $constraint = 'administratorPassword';
            $expectedValue = 'someObscurePassword';
            $this->sut->expects($this->any())->method($constraint)->will(
                $this->returnValue($expectedValue)
            );

            // Act
            $actualValue = $this->sut->$constraint();

            // Assert
            $this->assertEquals($expectedValue, $actualValue);
        }
    }
}
//
// EOF: EconomicUnitSpecificationCollaborationCheck.php
