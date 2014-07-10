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
namespace checks\contract\Glaciersoft\Acompter\Entities\EconomicUnits
{
    // Use directives (A...Z)

    /**
     * Class EconomicUnitListCollaborationCheck
     *
     * @package     checks\contract\Glaciersoft\Acompter\Entities\EconomicUnits
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    class EconomicUnitListCollaborationCheck
        extends \PHPUnit_Framework_TestCase
    {
        protected $sut;

        protected function setUp()
        {
            $this->sut =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnitList',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array('getFlag')
                );
        }

        protected function tearDown()
        {
            unset($this->sut);
        }

        /**
         * @test
         */
        public function canHoldListOfEconomicUnits()
        {
            // Arrange
            $names =
                [
                    'Edelweiss Corporation',
                    'Glaciersoft',
                    'Íshús Media',
                    'Cyberspacement'
                ];
            $expectedValue = [];
            $economicUnitStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnit',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array()
                );

            // Act
            foreach ($names as $name)
            {
                $this->sut[$name] = $economicUnitStub;
                $expectedValue[$name] = $economicUnitStub;
            }

            // Assert
            $this->assertEquals($expectedValue, (array)$this->sut);
        }

        /**
         * @test
         */
        public function canAppendEconomicUnit()
        {
            // Arrange
            $names =
                [
                    'Edelweiss Corporation',
                    'Glaciersoft',
                    'Íshús Media',
                    'Cyberspacement'
                ];
            $expectedValue = [];
            foreach ($names as $name)
            {
                $economicUnitStub =
                    $this->getMockForAbstractClass(
                        'Glaciersoft\Acompter\Entities\EconomicUnit',
                        array(),
                        '',
                        FALSE,
                        TRUE,
                        TRUE,
                        array('name')
                    );
                $economicUnitStub->expects($this->any())->method('name')->will($this->returnValue($name));
                $this->sut[$economicUnitStub->name()] = $economicUnitStub;
                $expectedValue[$economicUnitStub->name()] = $economicUnitStub;
            }
            $economicUnitStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnit',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array('name')
                );
            $economicUnitStub->expects($this->any())->method('name')->will($this->returnValue('Acme Inc.'));
            $expectedValue[$economicUnitStub->name()] = $economicUnitStub;

            // Act
            $this->sut->append($economicUnitStub);

            // Assert
            $this->assertEquals($expectedValue, (array)$this->sut);
        }

        /**
         * @test
         * @expectedException \Glaciersoft\Gaia\Entities\Exceptions\ArgumentException
         */
        public function cannotAppendString()
        {
            // Arrange
            $value = 'string';

            // Act
            $this->sut->append($value);

            // Assert
            $this->assertArrayNotHasKey(0, $this->sut);
        }

        /**
         * @test
         * @expectedException \Glaciersoft\Gaia\Entities\Exceptions\ArgumentException
         */
        public function cannotAppendInteger()
        {
            // Arrange
            $value = 367;

            // Act
            $this->sut->append($value);

            // Assert
            $this->assertArrayNotHasKey(0, $this->sut);
        }

        /**
         * @test
         * @expectedException \Glaciersoft\Gaia\Entities\Exceptions\ArgumentException
         */
        public function cannotAppendDouble()
        {
            // Arrange
            $value = 3.1415926;

            // Act
            $this->sut->append($value);

            // Assert
            $this->assertArrayNotHasKey(0, $this->sut);
        }

        /**
         * @test
         */
        public function canOffsetSetEconomicUnit()
        {
            // Arrange
            $name = 'Edelweiss Corporation';
            $economicUnitStub =
                $this->getMockForAbstractClass(
                    'Glaciersoft\Acompter\Entities\EconomicUnit',
                    array(),
                    '',
                    FALSE,
                    TRUE,
                    TRUE,
                    array()
                );

            // Act
            $this->sut[$name] = $economicUnitStub;

            // Assert
            $this->assertEquals($economicUnitStub, $this->sut[$name]);
        }

        /**
         * @test
         * @expectedException \Glaciersoft\Gaia\Entities\Exceptions\ArgumentException
         */
        public function cannotOffsetSetString()
        {
            // Arrange
            $value = 'string';

            // Act
            $this->sut[] = $value;

            // Assert
            $this->assertArrayNotHasKey(0, $this->sut);
        }

        /**
         * @test
         * @expectedException \Glaciersoft\Gaia\Entities\Exceptions\ArgumentException
         */
        public function cannotOffsetSetInteger()
        {
            // Arrange
            $value = 367;

            // Act
            $this->sut[] = $value;

            // Assert
            $this->assertArrayNotHasKey(0, $this->sut);
        }

        /**
         * @test
         * @expectedException \Glaciersoft\Gaia\Entities\Exceptions\ArgumentException
         */
        public function cannotOffsetSetDouble()
        {
            // Arrange
            $value = 3.1415926;

            // Act
            $this->sut[] = $value;

            // Assert
            $this->assertArrayNotHasKey(0, $this->sut);
        }
    }
}
//
// EOF: EconomicUnitListCollaborationCheck.php
