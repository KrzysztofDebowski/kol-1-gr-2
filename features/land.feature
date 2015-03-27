Feature: Web pages

  Scenario: Land
    Given I am on "land.html"
    Then I should see "land"

  Scenario: LandMenu
    Given I am on homepage
    When I follow "Land"
    Then I should see "land"