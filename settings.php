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
 * Roled Image settings.
 *
 * @package   tinymce_roledimage
 * @copyright 2013 Justin Hunt {@link http://www.poodll.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

   $options = array('0' => new lang_string('usecapabilities', 'tinymce_roledimage'),
			'1' => new lang_string('usecheckboxes', 'tinymce_roledimage'));

				
	$settings->add(new admin_setting_configselect('tinymce_roledimage/role_eval',
					   get_string('roleeval', 'tinymce_roledimage'),
					   get_string('roleevaldetails', 'tinymce_roledimage'), 0,$options));
	
	// Section for evaluating by checkbox
	$settings->add(new admin_setting_heading('evalcheckboxheading', '', get_string('evalcheckboxheading', 'tinymce_roledimage')));

                
// Show Permissions
	$settings->add(new admin_setting_configcheckbox('tinymce_roledimage/allow_guest',
					   get_string('allowguest', 'tinymce_roledimage'),
					   get_string('allowguestdetails', 'tinymce_roledimage'), 0));
					   
	$settings->add(new admin_setting_configcheckbox('tinymce_roledimage/allow_frontpage',
				   get_string('allowfrontpage', 'tinymce_roledimage'),
				   get_string('allowfrontpagedetails', 'tinymce_roledimage'), 0));
	
	$settings->add(new admin_setting_configcheckbox('tinymce_roledimage/allow_authuser',
				   get_string('allowauthuser', 'tinymce_roledimage'),
				   get_string('allowauthuserdetails', 'tinymce_roledimage'), 0));
					   
	$settings->add(new admin_setting_configcheckbox('tinymce_roledimage/allow_student',
					   get_string('allowstudent', 'tinymce_roledimage'),
					   get_string('allowstudentdetails', 'tinymce_roledimage'), 0));
					   
	$settings->add(new admin_setting_configcheckbox('tinymce_roledimage/allow_noneditteacher',
					   get_string('allownoneditteacher', 'tinymce_roledimage'),
					   get_string('allownoneditteacherdetails', 'tinymce_roledimage'), 1));
					   
	$settings->add(new admin_setting_configcheckbox('tinymce_roledimage/allow_teacher',
					   get_string('allowteacher', 'tinymce_roledimage'),
					   get_string('allowteacherdetails', 'tinymce_roledimage'), 1));
	
	$settings->add(new admin_setting_configcheckbox('tinymce_roledimage/allow_manager',
					   get_string('allowmanager', 'tinymce_roledimage'),
					   get_string('allowmanagerdetails', 'tinymce_roledimage'), 1));
	
	$settings->add(new admin_setting_configcheckbox('tinymce_roledimage/allow_coursecreator',
					   get_string('allowcoursecreator', 'tinymce_roledimage'),
					   get_string('allowcoursecreatordetails', 'tinymce_roledimage'), 1));
	
	$settings->add(new admin_setting_configcheckbox('tinymce_roledimage/allow_admin',
					   get_string('allowadmin', 'tinymce_roledimage'),
					   get_string('allowadmindetails', 'tinymce_roledimage'), 1));				   
	
					   
}
