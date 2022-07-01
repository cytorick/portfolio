<?php

namespace App\Http\Livewire\Admin\Tools;

use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks, $hidden, $title;

    protected $listeners = [
        'refreshTodos' => '$refresh',
        'refreshRecords' => 'mount',
    ];

    public function mount($hidden = false)
    {
        $this->hidden = $hidden;
        $this->tasks = Task::where('completed', 0)->get();
    }

    public function save(Request $request)
    {
        return Task::make([
            'title' => $request->title,
        ]);
    }

    public function setCompleted($todoId)
    {
        $todoItem = Task::find($todoId);

        $todoItem->update([
            'completed' => 1,
        ]);

        $this->emitSelf('refreshRecords');
    }

    public function render()
    {
        return view('livewire.admin.tools.task-list');
    }
}
