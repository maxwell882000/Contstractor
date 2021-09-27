<?php

namespace App\View\Components\ContactUs;

use App\Models\ContactUs\FormTitle;
use App\TraitDirectory\LanguageCheckTrade;
use Illuminate\View\Component;

class Titles
{
    use LanguageCheckTrade;

    public $data;

    public function __construct($en, $ru, $uz)
    {
        $this->data = [
            "title^ru" => $ru,
            "title^uz" => $uz,
            "title^en" => $en,
        ];
    }

    public function __get($name)
    {
        if ($this->checkItIsTranslatable($name)) {
            return $this->data[$this->translate($name)];
        }
        return "";
    }
}

class FromSubmissionModel
{
    use LanguageCheckTrade;

    public $firstname;
    public $lastname;
    public $email;
    public $subject;
    public $message;

    public function __construct($firstname, $lastname, $email, $message, $subject)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }


}

class FormSubmission extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $button;
    public $form;

    public function __construct()
    {
        $title = FormTitle::all()->first();
        if ($title) {
            $this->title = $title->title;
            $this->button = $title->button_name;
        } else {
            $this->title = "";
            $this->button = "";
        }
        $name = new Titles("First Name", "Имя", "Ism");
        $last = new Titles("Last Name", "Фамилия", "Familiya");
        $email = new Titles("Email", "Электроная почти", "Email");
        $subject = new Titles("Subject", "Тема", "Mavzu");
        $message = new Titles("Message", "Сообщение", "Xabar");
        $this->form = new FromSubmissionModel($name->title, $last->title, $email->title, $message->title, $subject->title);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact-us.form-submission');
    }
}
