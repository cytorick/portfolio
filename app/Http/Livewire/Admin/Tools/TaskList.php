<?php

namespace App\Http\Livewire\Admin\Tools;

use App\Models\Task;
use Illuminate\Http\Request;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks, $hidden;
    public $title;
    public $importance;

    protected $rules = [
        'title' => 'required',
        'importance' => 'nullable',
    ];

    protected $listeners = [
        'refreshTodos' => '$refresh',
        'refreshRecords' => 'mount',
    ];

    public function mount($hidden = false)
    {
        $this->hidden = $hidden;
        $this->tasks = Task::where('completed', 0)->orderBy('importance', 'desc')->get();
//        dump($this->title);
    }

    public function createRecord()
    {
        $this->validate();

        Task::create([
            'title' => $this->title,
            'importance' => $this->importance ?? '!',
            'completed' => 0,
        ]);

        $this->reset('title');
        $this->emitSelf('refreshRecords');
        $this->dispatchBrowserEvent('notify', 'Successfully created task!');
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
