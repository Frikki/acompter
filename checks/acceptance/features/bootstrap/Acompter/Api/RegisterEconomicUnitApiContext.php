<?php
namespace Features\Acompter\Api;

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Behat\Event\StepEvent;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use
    Glaciersoft\Acompter\Interactors\EconomicUnits\FindEconomicUnitByNameInteractor;
use
    Glaciersoft\Acompter\Interactors\EconomicUnits\RegisterEconomicUnitInteractor;
use Glaciersoft\Acompter\Memory\InMemoryEconomicUnitRepository;

//
// Require 3rd-party libraries here:
//
require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class RegisterEconomicUnitApiContext
    extends BehatContext
{
    /**
     * @When /^register economic unit:$/
     */
    public function registerEconomicUnit(TableNode $economicUnitDataTable)
    {
        $requestProphecy =
            \FeatureContext::$prophet->prophesize(
                'Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitRequestModel'
            );
        $economicUnitHash = $economicUnitDataTable->getHash();
        $streetAddress = array();
        foreach($economicUnitHash as $row)
        {
            if ('streetAddress' === $row['field'])
                array_push($streetAddress, $row['value']);
            else
                $requestProphecy->$row['field']()->willReturn($row['value']);
        }
        $requestProphecy->streetAddress()->willReturn($streetAddress);
        $requestDouble = $requestProphecy->reveal();

        $recipientProphecy =
            \FeatureContext::$prophet->prophesize(
                'Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitResponseRecipient'
            );
        $recipientDouble = $recipientProphecy->reveal();

        $boundaryProphecy = \FeatureContext::$prophet->prophesize(
            'Glaciersoft\Acompter\Boundaries\EconomicUnits\RegisterEconomicUnit'
        );
        $boundaryProphecy->execute($requestDouble, $recipientDouble)->willReturn();
        $boundaryDouble = $boundaryProphecy->reveal();
        $boundaryDouble->execute($requestDouble, $recipientDouble);

        \FeatureContext::$prophet->checkPredictions();
    }

    /**
     * @Then /^find economic unit "([^"]*)"$/
     */
    public function findEconomicUnit($name)
    {
        $interactor = new FindEconomicUnitByNameInteractor($this->gateway);
        $recipient =
            \FeatureContext::$prophet->prophesize(
                'Glaciersoft\Acompter\Boundaries\EconomicUnits\EconomicUnitResponseRecipient'
            );
        $recipient->success()->shouldBeCalled();
        $interactor->execute($name, $recipient->reveal());
        \FeatureContext::$prophet->checkPredictions();
    }
}

