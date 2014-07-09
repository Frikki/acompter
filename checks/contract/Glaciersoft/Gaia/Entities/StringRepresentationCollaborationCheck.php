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
     * Class StringRepresentationCollaborationCheck
     *
     * @package     checks\contract\Glaciersoft\Gaia\Entities
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    class StringRepresentationCollaborationCheck
        extends \PHPUnit_Framework_TestCase
    {
        protected $sut;

        protected function setUp()
        {
            $this->sut =
                $this->getMockBuilder(
                    'Glaciersoft\Gaia\Entities\StringRepresentation'
                )->getMock();
        }

        protected function tearDown()
        {
            unset($this->sut);
        }

        /**
         * @test
         */
        public function ReturnsStringRepresentation()
        {
            $constraint = '__toString';
            $expectedValue = 'My string representation';
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
// EOF: StringRepresentationCollaborationCheck.php
