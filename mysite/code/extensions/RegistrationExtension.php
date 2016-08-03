<?php
/**
 *
 */

class RegistrationExtension extends DataExtension {
	private static $db = array(
		'NZLarpsMember' => "Enum('Yes, No, I\'d like to join (please tell me how)', 'No')",
		'Gender' => 'Varchar(255)',
		'LarpExperience' => "Enum('Newbie, Novice (a few games played), Veteran', 'Newbie')",
		'Age' => "Enum('Under 16 (requires supervision), 16 - 18 (requires parental consent), 18+', '18+')",
		'EmergencyContact' => 'Varchar(255)',
		'ComingFrom' => "Enum('Auckland, Hamilton, Tauranga, Wellington, Other North Island, Christchurch, Dunedin, Other South Island, Overseas', 'Auckland')"
	);

	public function updateCMSFields(FieldList $fields) {
		$fields->removeByName('PlayWith');
		$fields->removeByName('NotPlayWith');
		$fields->removeByName('EventID');
	}

	public function updateExportFields(Array &$fields) {
		$custom = array(
			'NZLarpsMember' => "NZ Larps Member",
			'Gender' => 'Gender',
			'LarpExperience' => "Larp Experience",
			'Age' => "Age",
			'EmergencyContact' => 'Emergency Contact',
			'ComingFrom' => "Coming From"
		);
		$fields = array_merge($fields, $custom);

		return $fields;
	}

	public function updateExcelExportFields(Array &$fields) {
		unset($fields['HasPlayedString']);

		return $fields;
	}
}
class RegistrationPage_ControllerExtension extends DataExtension {

	public function addExtraFields($fields) {
		$reg = singleton('Registration');

		$fields->removeByName('PlayWith');
		$fields->removeByName('NotPlayWith');

		$fields->insertAfter(DropdownField::create(
			'NZLarpsMember',
			'NZLarps Member',
			$reg->dbObject('NZLarpsMember')->enumValues()
		), 'Password');

		$fields->insertAfter(DropdownField::create(
			'LarpExperience',
			'Larp experience',
			$reg->dbObject('LarpExperience')->enumValues()
		), 'NZLarpsMember');

		$fields->insertAfter(DropdownField::create(
			'ComingFrom',
			'Coming from',
			$reg->dbObject('ComingFrom')->enumValues()
		), 'LarpExperience');

		$fields->insertAfter(DropdownField::create(
			'Age',
			'Age',
			$reg->dbObject('Age')->enumValues()
		), 'LarpExperience');


		$fields->insertAfter(TextField::create(
			'EmergencyContact',
			'Emergency contact'
		), 'Age');

		$fields->insertBefore(TextField::create(
			'Gender',
			'What gender would you prefer to play?'
		), 'EmergencyContact');

		return $fields;
	}

	public function updateRegisterForm(Form $form) {
		$fields = $form->Fields();
		$fields = $this->addExtraFields($fields);
	}

	public function updateProfileForm(Form $form) {
		$fields = $form->Fields();
		$fields = $this->addExtraFields($fields);
	}
}
