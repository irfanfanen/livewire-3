<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use \App\Livewire\Forms\PostForm;

class Create extends Component
{
    public PostForm $form;

    public function save()
    {
        $post = $this->form->store();

        $this->dispatch('postCreated', $post->id);
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
