<?php

namespace App\Http\Livewire\Admin\Tools;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{
    public $todos;

    protected $listeners = [
        'refreshTodos' => '$refresh',
        'refreshRecords' => 'mount',
    ];

    public function mount()
    {
        $this->todos = Todo::where('completed', 0)->get();
    }

    public function setCompleted($todoId)
    {
        $todoItem = Todo::find($todoId);

        $todoItem->update([
            'completed' => 1,
        ]);

        $this->emitSelf('refreshRecords');
    }

    public function render()
    {
        return view('livewire.admin.tools.todo-list');
    }
}
