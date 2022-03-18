<?php

namespace App\Http\Livewire;

use App\Models\Person;
use Livewire\Component;

class HelloController extends Component
{
    public $name;
    public $peoples;

    protected $rules = [
        'name' => 'required',
    ];

    public function mount()
    {
        $this->peoples = null;
    }

    public function store()
    {
        $this->validate();

        $person = new Person();
        $person->name = $this->name;
               
        $person->save();
        
        $this->peoples = Person::latest()->take(1)->get();
        $this->render();
    }

    public function restart()
    {
        $this->reset(['peoples', 'name']);
        $this->render();
    }
    public function render()
    {
        return view('livewire.hello-controller');
    }
}
