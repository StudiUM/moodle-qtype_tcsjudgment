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
 * Provides the information to restore Concordance questions.
 *
 * @package    qtype_tcsjudgment
 * @subpackage backup-moodle2
 * @category   backup
 * @copyright  2020 Université de Montréal
 * @author     Marie-Eve Lévesque <marie-eve.levesque.8@umontreal.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class restore_qtype_tcsjudgment_plugin extends restore_qtype_tcs_plugin {

    /**
     * @var string The qtype name.
     */
    protected static $qtypename = 'tcsjudgment';

    /**
     * @var string The tcs table name.
     */
    protected static $tablename = 'qtype_tcsjudgment';

    /**
     * @var array The name of columns for decoding content.
     */
    protected static $optionsdecodecontent = ['hypothisistext'];

    /**
     * Process the qtype/tcsjudgment element.
     *
     * @param array|object $data tcsjudgment object to work with.
     */
    public function process_tcsjudgment($data) {
        parent::process_tcs($data);
    }
}
