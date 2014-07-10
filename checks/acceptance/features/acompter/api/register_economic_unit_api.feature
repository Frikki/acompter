# features/register_economic_unit_api.feature
Feature: register_economic_unit_api
  In order to register an economic unit through a UI
  As a developer
  I need be able to register an economic unit

Scenario: register economic unit successfully
  When register economic unit:
    | field | value |
    | name | Edelweiss Corporation |
    | legalName | Edelweiss Corporation |
    | taxId | 123456 |
    | streetAddress | Money Street 18 |
    | streetAddress | Opp. Laxmi |
    | city | Golden City |
    | state | |
    | postalCode | 54321 |
    | country | Iceland |
    | phoneNumber | (+354) 567 0987 |
    | faxNumber | |
    | emailAddress | hello@edelweiss.is |
    | webSiteUrl | http://edelweiss.is |
    | firstMonthOfFiscalYear | 1 |
    | administratorPassword | |
