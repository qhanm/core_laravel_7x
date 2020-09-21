<?php
/**
 * @author qhnam.67@gmail.com
 */
namespace App\Components;

use Kris\LaravelFormBuilder\Events\AfterFormCreation;
use Kris\LaravelFormBuilder\FormBuilder;

class CFormBuilder extends FormBuilder
{
    public $options = [
        'wrapper' => ['class' => 'form-group q-from-group'],
    ];


    public function qCreate($formClass, array $objectValue = [],array $options = [], array $data = [])
    {
        $options = $this->options;
        return $this->create($formClass, $options, $data);
    }
}
