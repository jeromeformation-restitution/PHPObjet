<?php


class GenerateHTML{



	public function formRow(string $nom, string $type, string $id, ?string $placeholder=""): string

	{

		$oldvalue=(isset($_POST[$id])) ? $_POST[$id] : '';

switch($type){

	case'text':
	case'number':
	$widget=$this->generateInput($type, $id, $oldvalue, $placeholder);
	break;

	case'textarea':
	$widget=$this->generateTextarea($id, $oldvalue, $placeholder);
	break;

	default;

}

	return <<<EOT
<div class="form-group">
    <label for="name">$nom</label>
   $widget
</div>
EOT;
	}

	public function generateInput(string $type, string $id,string $oldvalue, string $placeholder){
		return <<<EOT
		<input name="$id" id="$id" value="$oldvalue" type="$type" placeholder="$placeholder" class="form-control">
EOT;
	}

	public function generateTextarea(string $id, string $oldvalue, string $placeholder){
		return <<<EOT
		<textarea name="$id" id="$id" placeholder="$placeholder" class="form-control">$oldvalue</textarea>
EOT;
	}


}