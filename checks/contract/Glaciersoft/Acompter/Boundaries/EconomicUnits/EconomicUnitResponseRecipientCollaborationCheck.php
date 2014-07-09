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
     * Class EconomicUnitResponseRecipientCollaborationCheck
     *
     * @package     checks\contract\Glaciersoft\Acompter\Boundaries\EconomicUnits
     * @author      Frederik Krautwald <frederik.krautwald@glaciersoft.com>
     * @copyright   Copyright (c) 2014 Glaciersoft (http://www.glaciersoft.com)
     * @license     For the full copyright and license information, please view the
     * LICENSE file that was distributed with this source code.
     * @link        http://glaciersoft.com
     * @since       File available since Release 1.0.0
     */
    class EconomicUnitResponseRecipientCollaborationCheck
        extends \PHPUnit_Framework_TestCase
    {
        protected $sut;

        protected function setUp()
        {
            $this->sut =
                $this->getMockBuilder(
                    'Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitResponseRecipient'
                )->getMock();
        }

        protected function tearDown()
        {
            unset($this->sut);
        }

        /**
         * @test
         */
        public function canGetNotifiedOnSuccessfulRequest()
        {
            $constraint = 'success';
            $value = NULL;
            $this->sut->expects($this->once())->method($constraint);
            $this->assertEquals($value, $this->sut->$constraint());
        }

        /**
         * @test
         */
        public function CanGetNotifiedOnFailedRequest()
        {
            $constraint = 'failure';
            $message = 'Request failed';
            $value = NULL;
            $this->sut->expects($this->once())->method($constraint)->with(
                $this->equalTo($message)
            );
            $this->assertEquals($value, $this->sut->$constraint($message));
        }
    }
}
//
// EOF: EconomicUnitResponseRecipientCollaborationCheck.php
