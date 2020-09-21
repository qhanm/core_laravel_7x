<?php
/**
 * @author qhnam.67@gmail.com
 */
namespace App\Components;

use Kris\LaravelFormBuilder\Form;

class CForm extends Form
{
    const INPUT_TEXT = 'text';
    const INPUT_TEXTAREA = 'textarea';
    const INPUT_CHECKBOX = 'checkbox';

    const SELECT = 'select';
    const SELECT2 = 'select';
    const SELECT_MUlTI = 'select';
    public function __construct()
    {

    }

    public function addTextInput(string $name, bool $modify = true)
    {
        $options = [
            'wrapper' => ['class' => 'form-group q-form-group'],
            'attr' => ['class' => 'form-control'],
            'label' => $this->name,  // Field name used
            'label_show' => true,
            'label_attr' => ['class' => 'control-label', 'for' => $this->name],
            'errors' => ['class' => 'text-danger'],
        ];

        return $this->add($name, self::INPUT_TEXT, $options, $modify);
    }

    public function addTextarea(string $name, bool $modify = true)
    {
        //$options = [
        //    'template' => 'layout.form.textarea',
        //    'value' => $value,
        //];
        $options = [
            'wrapper' => ['class' => 'form-group df-form-group-area'],
            'attr' => ['class' => 'summernote'],
        ];

        return $this->add($name, self::INPUT_TEXTAREA, $options, $modify);
    }

    public function addCheckBox(string $name, bool $modify = false)
    {
        $options = [];
        return $this->add($name, self::INPUT_CHECKBOX, $options, $modify);
    }

    public function addSwitch(string $name, array $options = [],bool $modify = false)
    {
        $_options = [
            'wrapper' => ['class' => 'form-group square-switch q-square-switch'],
            'attr' => ['class' => '', 'switch' => 'none'],
            'help_block' => [
                'text' => null,
                'tag' => 'p',
                'attr' => ['class' => 'help-block']
            ],
            'default_value' => null,
            'label' => null,
            'label_show' => true,
            'label_attr' => [
                'data-on-label' => $options['on'] ?? 'On',
                'data-off-label' => $options['off'] ?? 'Off',
                'class' => 'q-label q-label-js'
            ],
            'errors' => ['class' => 'text-danger'],
        ];

        return $this->add($name, self::INPUT_CHECKBOX, $_options, $modify);
    }

    public function addSelect(string $name,array $options = [], $modify = false)
    {
        $options['attr'] = [
            'class' => 'form-control q-form-control'
        ];
        return $this->add($name, self::SELECT, $options, $modify);
    }

    public function addSelect2(string $name, array $options = [], $modify = false)
    {
        $options['attr'] = [
            'class' => 'form-control select2 q-form-control',
        ];

        return $this->add($name, self::SELECT, $options, $modify);
    }
}
