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
    Then I should see "Situation"
    And I should see "Here is the question"
    And I should see "Hypothesis label"
    And I should see "The hypothesis is..."
    And I should not see "The new information is..."
    And I should see "Comments"
    And I click on "Completely unacceptable" "radio"
    And I set the field "Comments label" to "Comment 1"
    And I press "Check"
    And I should see "The most popular answer is: Completely acceptable"
    And I should see that "1" panelists have answered "Completely unacceptable" for question "1"
    And I should see "Feedback for choice 1" for answer "Completely unacceptable" of question "1"
    And I should see that "2" panelists have answered "Rather unacceptable" for question "1"
    And I should see "Feedback for choice 2" for answer "Rather unacceptable" of question "1"
    And I should see that "3" panelists have answered "Rather acceptable" for question "1"
    And I should see "Feedback for choice 3" for answer "Rather acceptable" of question "1"
    And I should see that "4" panelists have answered "Completely acceptable" for question "1"
    And I should see no comments for answer "Completely acceptable" of question "1"
    And I press "Start again"
    And I click on "This question is outside my field of competence" "checkbox"
    And the "Completely unacceptable" "radio" should be disabled
    And the "Rather unacceptable" "radio" should be disabled
    And the "Rather acceptable" "radio" should be disabled
    And the "Completely acceptable" "radio" should be disabled
    And the "Comments label" "field" should be disabled
    And I press "Check"
    # User should still see the feedback.
    And I should see that "1" panelists have answered "Completely unacceptable" for question "1"
    And I should see "Feedback for choice 1" for answer "Completely unacceptable" of question "1"
    And I switch to the main window
