<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;

class Index extends Component
{
    public $blogs;

    public function __construct()
    {
       $this->blogs = Blog::where('archived', 0)->orderBy('id', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.blog.index');
    }
}
