<?php

namespace App\View\Components\Home;

use App\Models\Home\CommentModel;
use Illuminate\View\Component;
use function Symfony\Component\Translation\t;

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
        $this->setComments();
//        $this->comments = collect([
//
//            new CommentsModel(
//                "There is huahe;fl fs;lk af alsfk;lasfk aj asoksa f;laa kaf;l akfl;as fj pgsksd",
//                "images_admin/resource/author-thumb-1.jpg",
//                "Adam Something",
//                "Seo 3Or Bla"
//            ),
//            new CommentsModel(
//                "There is huahe;fl fs;lk af alsfk;lasfk aj asoksa f;laa kaf;l akfl;as fj pgsksd",
//                "images_admin/resource/author-thumb-1.jpg",
//                "Adam Something",
//                "Seo2 Or Bla"
//            ),
//            new CommentsModel(
//                "There is huahe;fl fs;lk af alsfk;lasfk aj asoksa f;laa kaf;l akfl;as fj pgsksd",
//                "images_admin/resource/author-thumb-1.jpg",
//                "Adam Something",
//                "Seo1 Or Bla"
//            ),
//        ]);
    }
    public function setComments()
    {

        $this->comments = \App\Models\Home\CommentModel::all()->map(function ($item) {
            return new CommentsModel(
                $item->body,
                $item->avatar(),
                $item->name,
                $item->profession
            );
        });
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
