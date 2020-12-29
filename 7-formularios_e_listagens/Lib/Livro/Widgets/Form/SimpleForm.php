<?php

namespace Livro\Widgets\Form;


class SimpleForm
{
	private $name, $action, $fields, $title;

	public function __construct($name)
	{
		$this->name = $name;
		$this->fields = [];
		$this->title = "";
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function addField($label, $name, $type, $value, $class = "")
	{
		$this->fields[] = [
			'label' => $label,
			'name' 	=> $name,
			'type' 	=> $type,
			'value' => $value,
			'class' => $class,
		];
	}

	public function setAction($action)
	{
		$this->action = $action;
	}

	public function show()
	{
		echo "<div class='card' style='margin: 40px;'>\n";
		echo "<div class='card-header'>{$this->title}</div>\n";
		echo "<div class='card-body'>\n";
		echo "<form method='POST' action='{$this->action}' class='form-horizontal'>\n";

		if ($this->fields) {
			foreach ($this->fields as $field) {
				echo "<div class='form-group mb-3'>\n";
				echo "<label class='col-sm-2 form-label'>{$field['label']}</label>\n";
				echo "<div class='col-sm-10'>\n";
				echo "<input
					type='{$field['type']}'
					name='{$field['name']}'
					value='{$field['value']}'
					class='{$field['class']}'
				/>\n";
				echo "</div>\n";
				echo "</div>\n";
			}
		}

		echo '<div class="form-group mb-3">';
		echo '<div class="col-sm-offset-2 col-sm-8">';
		echo '<input type="submit" class="btn btn-success" value="Enviar">';
		echo '</div>';
		echo '</div>';

		echo "</form>";
		echo "</div>";
		echo "</div>";
	}
}
