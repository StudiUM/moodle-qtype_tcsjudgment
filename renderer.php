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
 * tcs judgment question renderer class.
 *
 * @package qtype
 * @subpackage tcsjudgment
 * @copyright  2020 Université de Montréal
 * @author     Marie-Eve Lévesque <marie-eve.levesque.8@umontreal.ca>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/question/type/tcs/renderer.php');


/**
 * Generates the output for tcs judgment questions.
 *
 * @copyright  2020 Université de Montréal
 * @author     Marie-Eve Lévesque <marie-eve.levesque.8@umontreal.ca>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_tcsjudgment_renderer extends qtype_tcs_renderer {

    /**
     * @var string The qtype name.
     */
    protected static $qtypename = 'tcsjudgment';
}

/**
 * A format renderer for tcs judgment questions where the student should use a plain input box.
 *
 * @package qtype
 * @subpackage tcsjudgment
 * @copyright  2020 Université  de Montréal.
 * @author     Issam Taboubi <issam.taboubi@umontreal.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_tcsjudgment_format_plain_renderer extends qtype_tcs_format_plain_renderer {

    /**
     * Return class name.
     *
     * @return string class name
     */
    protected function class_name() {
        return 'qtype_tcsjudgment_plain';
    }
}
