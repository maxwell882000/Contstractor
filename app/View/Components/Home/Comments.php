<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class CommentsModel
{
    public $comment;
    public $avatar_path;
    public $name;
    public $profession;

    public function __construct($comment, $avatar_path, $name, $profession)
    {
        $this->comment = $comment;
        $this->avatar_path = $avatar_path;
        $this->name = $name;
        $this->profession = $profession;
    }
}

class Comments extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $comments;

    public function __construct()
    {
        $this->comments = collect([
            new CommentsModel(
                "There is huahe;fl fs;lk af alsfk;lasfk aj asoksa f;laa kaf;l akfl;as fj pgsksd",
                "images_admin/resource/author-thumb-1.jpg",
                "Adam Something",
                "Seo 521Or Bla"
            ),
            new CommentsModel(
                "There is huahe;fl fs;lk af alsfk;lasfk aj asoksa f;laa kaf;l akfl;as fj pgsksd",
                "images_admin/resource/author-thumb-1.jpg",
                "Adam Something",
                "Seo 3Or Bla"
            ),
            new CommentsModel(
                "There is huahe;fl fs;lk af alsfk;lasfk aj asoksa f;laa kaf;l akfl;as fj pgsksd",
                "images_admin/resource/author-thumb-1.jpg",
                "Adam Something",
                "Seo2 Or Bla"
            ),
            new CommentsModel(
                "There is huahe;fl fs;lk af alsfk;lasfk aj asoksa f;laa kaf;l akfl;as fj pgsksd",
                "images_admin/resource/author-thumb-1.jpg",
                "Adam Something",
                "Seo1 Or Bla"
            ),

        ]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.comments');
    }
}
