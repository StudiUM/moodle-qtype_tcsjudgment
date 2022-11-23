@qtype @qtype_tcsjudgment
Feature: Test exporting tcsjudgment questions
  As a teacher
  In order to be able to reuse my tcsjudgment questions
  I need to export them

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email               |
      | teacher1 | T1        | Teacher1 | teacher1@moodle.com |
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
      | questioncategory | qtype        | name       | template        |
      | Test questions   | tcsjudgment  | TCS-002    | judgment        |

  @javascript
  Scenario: Export a tcsjudgment question
    When I am on the "Course 1" "core_question > course question export" page logged in as "teacher1"
    And I set the field "id_format_xml" to "1"
    And I press "Export questions to file"
    Then following "click here" should download between "2350" and "2500" bytes
    And I log out
