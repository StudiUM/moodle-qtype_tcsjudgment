<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Test helper code for the Concordance of judgment question type.
 *
 * @package    qtype_tcsjudgment
 * @copyright  2020 Université de Montréal
 * @author     Marie-Eve Lévesque <marie-eve.levesque.8@umontreal.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Test helper class for the Concordance of judgment question type.
 *
 * @copyright  2020 Université de Montréal
 * @author     Marie-Eve Lévesque <marie-eve.levesque.8@umontreal.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_tcsjudgment_test_helper extends question_test_helper {
    /**
     * Implements the parent function.
     *
     * @return array of example question names that can be passed as the $which
     * argument of {@link test_question_maker::make_question} when $qtype is
     * this question type.
     */
    public function get_test_questions() {
        return array('judgment');
    }

    /**
     * Get the question data for a judgment question, as it would be loaded by get_question_options.
     * @return object
     */
    public static function get_tcsjudgment_question_data_judgment() {
        global $USER;

        $qdata = new stdClass();

        $qdata->createdby = $USER->id;
        $qdata->modifiedby = $USER->id;
        $qdata->qtype = 'tcsjudgment';
        $qdata->name = 'TCS-002';
        $qdata->questiontext = 'Here is the question';
        $qdata->questiontextformat = FORMAT_PLAIN;
        $qdata->generalfeedback = 'General feedback for the question';
        $qdata->generalfeedbackformat = FORMAT_PLAIN;

        $qdata->showquestiontext = false;
        $qdata->labelsituation = 'Situation label';
        $qdata->labelhypothisistext = 'Hypothesis label';
        $qdata->hypothisistext = 'The hypothesis is...';
        $qdata->hypothisistextformat = FORMAT_PLAIN;
        $qdata->labelnewinformationeffect = 'Your hypothesis or option is';
        $qdata->labelfeedback = 'Comments label';
        $qdata->showfeedback = false;

        $qdata->options = new stdClass();
        $qdata->options->correctfeedback =
                test_question_maker::STANDARD_OVERALL_CORRECT_FEEDBACK;
        $qdata->options->correctfeedbackformat = FORMAT_HTML;
        $qdata->options->partiallycorrectfeedback =
                test_question_maker::STANDARD_OVERALL_PARTIALLYCORRECT_FEEDBACK;
        $qdata->options->partiallycorrectfeedbackformat = FORMAT_HTML;
        $qdata->options->shownumcorrect = 1;
        $qdata->options->incorrectfeedback =
                test_question_maker::STANDARD_OVERALL_INCORRECT_FEEDBACK;
        $qdata->options->incorrectfeedbackformat = FORMAT_HTML;

        $qdata->options->answers = array(
            13 => (object) array(
                'id' => 13,
                'answer' => 'Answer 1',
                'answerformat' => FORMAT_PLAIN,
                'fraction' => 2,
                'feedback' => 'Feedback for answer 1',
                'feedbackformat' => FORMAT_PLAIN,
            ),
            14 => (object) array(
                'id' => 14,
                'answer' => 'Answer 2',
                'answerformat' => FORMAT_PLAIN,
                'fraction' => 2,
                'feedback' => 'Feedback for answer 2',
                'feedbackformat' => FORMAT_PLAIN,
            ),
            15 => (object) array(
                'id' => 15,
                'answer' => 'Answer 3',
                'answerformat' => FORMAT_PLAIN,
                'fraction' => 0,
                'feedback' => '',
                'feedbackformat' => FORMAT_PLAIN,
            )
        );

        return $qdata;
    }

    /**
     * Get the question data for a judgment question, as it would be loaded by get_question_options.
     * @return object
     */
    public static function get_tcsjudgment_question_form_data_judgment() {
        $qdata = new stdClass();

        $qdata->name = 'TCS-002';
        $qdata->questiontext = array('text' => 'Here is the question', 'format' => FORMAT_PLAIN);
        $qdata->generalfeedback = array('text' => 'General feedback for the question', 'format' => FORMAT_PLAIN);

        $qdata->showquestiontext = false;
        $qdata->labelsituation = 'Situation label';
        $qdata->labelhypothisistext = 'Hypothesis label';
        $qdata->hypothisistext = array('text' => 'The hypothesis is...', 'format' => FORMAT_PLAIN);
        $qdata->labelnewinformationeffect = 'Your hypothesis or option is';
        $qdata->labelfeedback = 'Comments label';
        $qdata->showfeedback = false;

        $qdata->correctfeedback = array('text' => test_question_maker::STANDARD_OVERALL_CORRECT_FEEDBACK,
                                                 'format' => FORMAT_HTML);
        $qdata->partiallycorrectfeedback = array('text' => test_question_maker::STANDARD_OVERALL_PARTIALLYCORRECT_FEEDBACK,
                                                          'format' => FORMAT_HTML);
        $qdata->shownumcorrect = 1;
        $qdata->incorrectfeedback = array('text' => test_question_maker::STANDARD_OVERALL_INCORRECT_FEEDBACK,
                                                   'format' => FORMAT_HTML);

        $qdata->fraction = array('2', '2', '0');

        $qdata->answer = array(
            0 => array(
                'text' => 'Answer 1',
                'format' => FORMAT_PLAIN
            ),
            1 => array(
                'text' => 'Answer 2',
                'format' => FORMAT_PLAIN
            ),
            2 => array(
                'text' => 'Answer 3',
                'format' => FORMAT_PLAIN
            )
        );

        $qdata->feedback = array(
            0 => array(
                'text' => 'Feedback for answer 1',
                'format' => FORMAT_PLAIN
            ),
            1 => array(
                'text' => 'Feedback for answer 2',
                'format' => FORMAT_PLAIN
            ),
            2 => array(
                'text' => '',
                'format' => FORMAT_PLAIN
            )
        );

        return $qdata;
    }
}
