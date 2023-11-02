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
 * Question type class for the tcsjudgment question type.
 *
 * @package qtype_tcsjudgment
 * @copyright  2020 Université de Montréal
 * @author     Marie-Eve Lévesque <marie-eve.levesque.8@umontreal.ca>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/questionlib.php');
require_once($CFG->dirroot . '/question/engine/lib.php');
require_once($CFG->dirroot . '/question/type/tcs/questiontype.php');
require_once($CFG->dirroot . '/question/type/tcsjudgment/question.php');


/**
 * The judgment question type.
 *
 * @copyright  2020 Université de Montréal
 * @author     Marie-Eve Lévesque <marie-eve.levesque.8@umontreal.ca>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_tcsjudgment extends qtype_tcs {

    /**
     * @var string The qtype name.
     */
    protected static $qtypename = 'tcsjudgment';

    /**
     * @var string The qtype table name.
     */
    protected static $tablename = 'qtype_tcsjudgment';

    /**
     * Create an appropriate question_definition for the question of this type
     * using data loaded from the database.
     * @param object $questiondata the question data loaded from the database.
     * @return qtype_tcsjudgment_question an instance of the appropriate question_definition subclass.
     *      Still needs to be initialised.
     */
    protected function make_question_instance($questiondata) {
        question_bank::load_question_definition_classes($this->name());
        return new qtype_tcsjudgment_question();
    }

}
