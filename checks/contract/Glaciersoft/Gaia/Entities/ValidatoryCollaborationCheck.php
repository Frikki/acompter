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
namespace checks\contract\Glaciersoft\Gaia\Entities
{
    // Use directives (A...Z)

    /**
     * Class ValidatoryCollaborationCheck
     *
     * @package     checks\contract\Glaciersoft\Gaia\Entities\Validators
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    class ValidatoryCollaborationCheck
        extends \PHPUnit_Framework_TestCase
    {
        protected $sut;

        protected function setUp()
        {
            $this->sut =
                $this->getMockBuilder(
                    'Glaciersoft\Gaia\Entities\Validatory'
                )->getMock();
        }

        protected function tearDown()
        {
            unset($this->sut);
        }

        /**
         * @test
         */
        public function CanTellIfEntityIsValid()
        {
            $constraint = 'isValid';
            $expectedValue = TRUE;
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
        public function CanTellIfEntityIsInvalid()
        {
            $constraint = 'isValid';
            $expectedValue = FALSE;
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
        public function ReturnsValidationMessage()
        {
            $constraint = 'validationMessage';
            $expectedValue = 'Could not validate property';
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
// EOF: ValidatoryCollaborationCheck.php
