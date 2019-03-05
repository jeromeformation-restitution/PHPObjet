<?php


class GenerateHTML{

	public function formRow(string $nom): string
{
	return <<<EOT
<div class="form-group">
    <label for="name">$nom</label>
    <input name="name" id="name" type="text" class="form-control">
</div>
EOT;
	}
}