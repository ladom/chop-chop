<?php

	function showFormData() {
		foreach ($_POST as $name => $value) {
			$name = $name;
			$value = $value;
		}

		if (empty($value)) {
			echo '<div class="form__response">';
			echo '<h2 class="form__response--error">';
			echo 'Brak danych do wyświetlenia</h2></div>';
		} else {
			echo '<div class="form__response">';
			echo '<h2 class="form__response--succes">';
			echo 'Dziękujemy za wysłanie formularza z następującymi danymi:';
			echo '</h2><br><p class="form__response--text">';
			foreach ($_POST as $name => $value) {
				echo $name;
				echo ': ';
				echo $value;
				echo '<br>';
			}
			echo '</p></div>';
		}
	}

	showFormData();	
?>