<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Post')]

class Index extends Component
{
    #[On('postCreated')]
    public function updateList($post)
    {
        
    }

    public function placeholder()
    {
        // return <<<BLADE
        //     <div>
        //         Loading...
        //     </div>
        // BLADE;

        return view('livewire.posts.placeholder');
    }

    public function render()
    {
        sleep(2);

        $posts = Post::query()->with('user')->latest()->get();
        return view('livewire.posts.index', [
            'posts' => $posts
        ]);
    }
}
