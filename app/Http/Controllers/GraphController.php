<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\View\Components\Graph;
use App\Events\GraphUpdated;

class GraphController extends Controller
{
    public function updateGraph()
    {
        $graph = new Graph([], request('data'));
        $new_data = $graph->updateGraph(request('graph'), request('value'));
        GraphUpdated::dispatch($new_data);
    }
}
