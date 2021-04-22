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
 * Tcs judgment question type upgrade code.
 *
 * @package    qtype_tcsjudgment
 * @copyright  2020 Université de Montréal
 * @author     Issam Taboubi <issam.taboubi@umontreal.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Upgrade code for the tcs judgment question type.
 * @param int $oldversion the version we are upgrading from.
 */
function xmldb_qtype_tcsjudgment_upgrade($oldversion) {
    global $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2021030100) {

        // Labelfeedback.
        $table = new xmldb_table('qtype_tcsjudgment_options');

        // Showoutsidefieldcompetence.
        $field = new xmldb_field('showoutsidefieldcompetence', XMLDB_TYPE_INTEGER, '1', null, null, null, '0');
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Tcs savepoint reached.
        upgrade_plugin_savepoint(true, 2021030100, 'qtype', 'tcsjudgment');
    }

    return true;
}
