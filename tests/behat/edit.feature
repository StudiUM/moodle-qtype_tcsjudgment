@qtype @qtype_tcsjudgment
Feature: Test editing a Concordance of judgment question
  As a teacher
  In order to be able to update my Concordance of judgment question
  I need to edit them

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | teacher1 | T1        | Teacher1 | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1        | 0        |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
    And the following "question categories" exist:
      | contextlevel | reference | name           |
      | Course       | C1        | Test questions |
    And the following "questions" exist:
      | questioncategory | qtype       | name                   | template    |
      | Test questions   | tcsjudgment | TCS-002 for editing    | judgment    |
    And I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Question bank" in current page administration

  Scenario: Edit a TCS judgment question
    When I choose "Edit question" action for "TCS-002 for editing" in the question bank
    Then the following fields match these values:
      | id_labelsituation               | Situation label                     |
      | id_labelhypothisistext          | Hypothesis label                    |
    And I should not see "New information"
    And I set the following fields to these values:
      | Question name | Edited TCS2 name |
    And I press "id_submitbutton"
    And I should see "Edited TCS2 name"
