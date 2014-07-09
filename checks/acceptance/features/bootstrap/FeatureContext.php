<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Behat\Event\SuiteEvent;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Features\Acompter\Api\RegisterEconomicUnitApiContext;
use Prophecy\Prophet;

//
// Require 3rd-party libraries here:
//
require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext
    extends BehatContext
{
    /**
     * @var Prophet
     */
    public static $prophet;

    /**
     * @BeforeSuite
     */
    public static function setup(SuiteEvent $event)
    {
        self::$prophet = new Prophet();
    }

    public function __construct(array $arguments)
    {
        $this->useContext(
            'register_econommic_unit_api', new RegisterEconomicUnitApiContext($arguments)
        );
    }
}
