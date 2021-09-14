<?php

namespace App\View\Components\ContactUs;

use Illuminate\View\Component;

class FromSubmissionModel
{
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
        $this->title = "There is a title";
        $this->button = "Submit now";
        $this->form = new FromSubmissionModel("First Name", "Last Name", "Email", "Message", "Subject");
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
