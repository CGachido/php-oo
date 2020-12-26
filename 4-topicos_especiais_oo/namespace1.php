<?php

// Namespace 
// é uma separação lógica (pacote) ao redor de uma classe, interface, função;
// Mapeamento
// \Livro\Widgets\Form\Field => Lib/Livro/Widgets/Form/Field.php

namespace Application;

class Form
{
}

namespace Components;

class Form
{
}
echo "<pre>";
var_dump(new Form);
echo "<hr>";
var_dump(new \Application\Form);
var_dump(new \Components\Form);
var_dump(new \SplFileInfo('base2.xml'));
var_dump(new SplFileInfo('base2.xml'));
echo "</pre>";
