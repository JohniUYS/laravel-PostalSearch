<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PostalRender extends Component
{
    public $search;
    public $primaryBeat;
    protected $queryString = ['search'];
    public $postal;

    public function submit(){
        $this->postal = DB::collection('postals')->where('postal', $this->search)->first();
        /*if($this->postal->district != 0){
            $this->primaryBeat = $this->postal->district;
        }else if($this->postal->isDNR){
            $this->primaryBeat = "DNR";
        }else{
            $this->primaryBeat = $this->postal->area;
        }
        */
        //return redirect()->to('/');
        return view('postal', ['postal' => $this->postal, 'primaryBeat' => $this->primaryBeat]);

    }

    public function render()
    {
        return view('livewire.postal-render');
    }
}
