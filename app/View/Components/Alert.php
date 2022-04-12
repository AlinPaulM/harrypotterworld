<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    private bool $prvVal = true;
    
// "All public properties on a component will automatically be made available to the component's view. It is not necessary to pass the data to the view from the component's render method"
    // non-required data: public properties or methods that you don't pass to the constructor
    public $nonRequired = 'non required property';

    public $alertType;
    public $message;
    
// the constructor contains the component's REQUIRED data (it HAS to be public properties)
    // (p.s. you can also use protected/private ones, BUT you must pass the data to the view in render(), which is not how components are meant to be used most likely, so don't do that)
    /**
     * Create a new component instance.
     *
     * @param string $alertType
     * @param string $message
     * @return void
     */
    public function __construct($alertType, $message)
    {
        $this->alertType = $alertType;
        $this->message = $message;
    }
    
    public function fct($param)
    {
        return $param === $this->prvVal ? 'fct-yes' : 'fct-no';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }

    /* // https://laravel.com/docs/9.x/blade#using-attributes-slots-within-component-class
    public function render()
    {
        return function (array $data) {
            // $data['componentName'];
            // $data['attributes'];
            // $data['slot'];

            // echo '<pre>'; var_dump($data);echo '</pre>';
            echo '<pre>' . var_export($data, true) . '</pre>';

            return 'components.alert';
        };
    }
    */
}
