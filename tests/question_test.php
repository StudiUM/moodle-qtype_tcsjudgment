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
 * Unit tests for the tcs judgment question definition class.
 *
 * @package    qtype_tcsjudgment
 * @copyright  2020 Université de Montréal
 * @author     Issam Taboubi <issa.taboubi@umontreal.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace qtype_tcsjudgment;

use test_question_maker;

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/question/engine/tests/helpers.php');

/**
 * Unit tests for qtype_tcsjudgment_definition.
 *
 * @package    qtype_tcsjudgment
 * @copyright  2020 Université de Montréal
 * @author     Issam Taboubi <issa.taboubi@umontreal.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers \qtype_tcsjudgment_question
 */
final class question_test extends \advanced_testcase {

    public function test_questiondata(): void {
        $question = test_question_maker::get_question_data('tcsjudgment');

        $this->assertEquals('tcsjudgment', $question->qtype);
        $this->assertCount(4, $question->options->answers);
        $answer1 = array_values($question->options->answers)[0];
        $this->assertEquals(get_string('likertscale1', 'qtype_tcsjudgment'), $answer1['answer']);

        // Test form data.
        $formdata = test_question_maker::get_question_form_data('tcsjudgment');
        $this->assertCount(4, $formdata->answer);
        $this->assertCount(4, $formdata->feedback);
        $this->assertCount(4, $formdata->fraction);
        $this->assertEquals(get_string('likertscale1', 'qtype_tcsjudgment'), $formdata->answer[0]['text']);
    }
}
