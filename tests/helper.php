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

global $CFG;
require_once($CFG->dirroot . '/question/type/tcs/tests/helper.php');

/**
 * Test helper class for the Concordance of judgment question type.
 *
 * @copyright  2020 Université de Montréal
 * @author     Marie-Eve Lévesque <marie-eve.levesque.8@umontreal.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_tcsjudgment_test_helper extends qtype_tcs_test_helper {

    /**
     * @var string The qtype name.
     */
    protected static $qtypename = 'tcsjudgment';

    /**
     * @var int The default answers number.
     */
    protected static $nbanswers = 4;

    /**
     * Implements the parent function.
     *
     * @return array of example question names that can be passed as the $which
     * argument of test_question_maker::make_question when $qtype is
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
        return parent::get_tcs_question_data_reasoning();
    }

    /**
     * Get the question data for a judgment question, as it would be loaded by get_question_options.
     * @return object
     */
    public static function get_tcsjudgment_question_form_data_judgment() {
        return parent::get_tcs_question_form_data_reasoning();
    }
}
