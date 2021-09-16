<?php

require_once('./components'. '/' . JFactory::getApplication()->input->get('option') . '/' . 'helper.php');

class TvoFormRuleRegex extends JFormRule {

    public function test(&$element, $value, $group = null, &$input = null, &$form = null)   {

        $this->regex = (string)$element['regex'];

        ComTvoHelper::varDump(parent::test($element, $value, $group, $input, $form));

        return parent::test($element, $value, $group, $input, $form);
    }
}



 ?>
