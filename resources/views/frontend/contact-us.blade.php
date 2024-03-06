@extends('frontend.layouts.main')
@section('content')

    <!-- Content -->
    <div id="content" class="grid-container clearfix remove_padding">
        <section class="content">


            <div id="col-main" class="contact content">

                <div id="breadcrumb">
                    <a href="/" class="homepage-link" title="Back to the frontpage">Home</a>

                    <span class="separator">»</span>
                    <span class="page-title">Contact Us</span>

                </div>

                <div id="page-header">
                    <h1 id="page-title">Contact Us</h1>
                </div>

                <div class="contact-content align-left add_margin">
                    <p><span>We will get back to you within 24 hours</span></p>
                </div>

                <div class="grid-container remove_padding">

                    <div class="grid-50 tablet-grid-50 add_margin">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.473732141964!2d85.3088749501809!3d27.702655982709413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1855076e815b%3A0xcf6405e5e4e3151e!2sDeep+Music+Store!5e0!3m2!1sen!2snp!4v1499596090346" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>



                    <div class="grid-45 push-5 tablet-grid-45 tablet-push-5">
                        <form method="post" action="/contact-us" id="contact_form" class="contact-form" accept-charset="UTF-8"><input type="hidden" value="contact" name="form_type"><input type="hidden" name="utf8" value="✓">

                            <h4>Drop us a line</h4>





                            <ul id="contact-form">
                                <li class="clearfix type-text">
                                    <label for="name" class="label1">Your Name</label>
                                    <input type="text" id="name" class="input1 width1" name="name">
                                </li>
                                <li class="clearfix type-text">
                                    <label for="email" class="label1">Your Email <span class="req">*</span></label>
                                    <input type="email" id="email" class="input1 width1 email" name="email">
                                </li>
                                <li class="clearfix type-textarea">
                                    <label for="message" class="label1">Your Message <span class="req">*</span></label>
                                    <textarea id="message" class="textarea1 width1" name="body"></textarea>
                                </li>
                                <li class="clearfix type-submit">
                                    <input type="submit" class="button3" value="Submit Contact">
                                </li>
                            </ul>
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div><!-- /#col-main -->


        </section>
    </div><!-- /.content -->
@endsection