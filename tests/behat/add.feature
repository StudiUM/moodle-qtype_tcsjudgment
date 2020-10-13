@qtype @qtype_tcsjudgment
Feature: Test creating a Concordance of judgment question
  As a teacher
  In order to test my students
  I need to be able to create a TCS judgment question

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
    And I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Question bank" in current page administration

  Scenario: Create a Concordance of judgment question.
    When I add a "Concordance of judgment" question filling the form with:
      | Question name            | TCS-002                            |
      | Question text            | Here is the question               |
      | General feedback         | General feedback for the question  |
      | showquestiontext         | No                                 |
      | labelhypothisistext      | Hypothesis label                   |
      | id_hypothisistext        | The hypothesis is...               |
      | labelnewinformationeffect| Your hypothesis or option is       |
      | showfeedback             | No                                 |
      | Choice 1                 | Answer 1                           |
      | Choice 2                 | Answer 2                           |
      | Choice 3                 | Answer 3                           |
      | Choice 4                 |                                    |
      | id_fraction_0            | 2                                  |
      | id_fraction_1            | 2                                  |
      | id_fraction_2            | 0                                  |
      | id_feedback_0            | Feedback for answer 1              |
      | id_feedback_1            | Feedback for answer 2              |
      | id_feedback_2            |                                    |
    Then I should see "TCS-002"
