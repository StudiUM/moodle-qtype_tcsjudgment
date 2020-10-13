@qtype @qtype_tcsjudgment
Feature: Preview a Concordance of judgment question
  As a teacher
  In order to check my Concordance of judgment questions will work for students
  I need to preview them

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
    And I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Question bank" in current page administration

  @javascript @_switch_window
  Scenario: Preview a Concordance of judgment question.
    Given I choose "Preview" action for "TCS-002" in the question bank
    When I switch to "questionpreview" window
    And I set the field "How questions behave" to "Immediate feedback"
    And I press "Start again with these options"
    Then I should not see "Situation"
    And I should not see "Here is the question"
    And I should see "Hypothesis label"
    And I should see "The hypothesis is..."
    And I should not see "New information"
    And I should not see "Comments"
    And I click on "Answer 1" "radio"
    And I press "Check"
    And I should see "The most popular answer is: Answer 1, Answer 2"
    And I should see that "2" panelists have answered "Answer 1" for question "1"
    And I should see "Feedback for answer 1" for answer "Answer 1" of question "1"
    And I should see that "2" panelists have answered "Answer 2" for question "1"
    And I should see "Feedback for answer 2" for answer "Answer 2" of question "1"
    And I should see that "0" panelists have answered "Answer 3" for question "1"
    And I should see no comments for answer "Answer 3" of question "1"
    And I switch to the main window
