<section class="contact-section">
    <div class="auto-container">
        <!--Section Title-->
        <div class="sec-title-one">
            <h2>{{$title}}</h2>
        </div>

        <div class="contact-form default-form">
            <form method="post" action="{{route("admin.main_input",0)}}" id="contact-form">
                @csrf
                <div class="row clearfix">
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="firstname" value="" placeholder="{{$form->firstname}} *">
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="lastname" value="" placeholder="{{$form->lastname}} *">
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="email" name="email" value="" placeholder="{{$form->email}} *">
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="subject" value="" placeholder="{{$form->subject}} *">
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <textarea name="message" placeholder="{{$form->message}} *" required></textarea>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center">
                            <button type="submit" class="theme-btn btn-style-one">{{$button}} </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
