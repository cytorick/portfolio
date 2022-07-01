<?php

namespace App\Http\Livewire\Admin\Tools;

use App\Models\Todo;
use http\Env\Request;
use Livewire\Component;

class TodoList extends Component
{
    public $todos, $hidden, $title;

    protected $listeners = [
        'refreshTodos' => '$refresh',
        'refreshRecords' => 'mount',
    ];

    public function mount($hidden = false)
    {
        $this->hidden = $hidden;
        $this->todos = Todo::where('completed', 0)->get();
    }

    public function save(Request $request)
    {
        return Todo::make([
            'title' => $request->title,
        ]);
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
