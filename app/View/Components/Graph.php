<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Graph extends Component
{
    public $labels;
    public $datasets;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($labels, $datasets)
    {
        $this->labels = json_encode($labels);
        $this->datasets = json_encode($datasets);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.graph');
    }

    public function updateGraph($graph_color, $new_value)
    {
        $data = json_decode($this->datasets);
        $new_data = [];
        foreach($data as $item){
            if($item->backgroundColor == $graph_color){
                $item->data[] = $new_value;
            }
            $new_data[] = $item;
        }
        return $new_data;
    }
}
