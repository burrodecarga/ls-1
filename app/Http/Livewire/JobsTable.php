<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class JobsTable extends Component
{
   use WithPagination;

   public $search = '';

    public function render()
    {
        return view('livewire.jobs-table',[
            'jobs'=>Post::where('position','like',"%{$this->search}%")
                         ->paginate(5)
            ])->layout('layouts.guest');
    }
}
