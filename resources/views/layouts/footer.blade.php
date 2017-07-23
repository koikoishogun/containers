<div class="container-fluid contact-us">
                <div class="container">
                    <div class="col-md-5 col-md-offset-1">
                        <h3 class="red"><b>Still have a Question?</b></h3>

                        <form action=""  method="post">
                            <div class="form-group">
                              <label for="usr">Your Email</label>
                              <input type="email" class="form-control theemail" id="usr" name="email">
                            </div>

                            <div class="form-group">
                            <label for="pwd">Message</label>
                              <textarea class="message form-control" rows="3" id="message" name="message"></textarea>
                            </div>

                            <button type="submit" class="btn btn-danger pull-right submitmessage"><span class="glyphicon glyphicon-share"></span> <b>Leave us a Message</b> </button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>

                    <div class="col-md-5 gray-bg">
                        <h3 class="red"><b>Get in Touch with us.</b></h3>

                        <div class="row contact-line">

                            <div class="col-md-1 col-xs-2">
                                <img class="img-responsive icon-contact" src="{{ URL::asset('/images/contact-icon-01.png')}}"/>
                            </div>

                            <div class="col-md-11 col-xs-10">
                                <b>Some Random Place.</br>Nairobi.</b>
                           
                           <!-- <div class="col-md-10">
                                Omega Opticians Limited 2nd Floor,<br>
                                Pioneer House Kimathi street <br>
                                P.O Box 61441 – 00200 Nairobi, <br>
                                Kenya
                            </div>
                            -->
                            </div>
                        </div>

                        <div class="row contact-line">
                            <div class="col-md-1 col-xs-2">
                                <img class="img-responsive icon-contact" src="{{ URL::asset('/images/contact-icon-02.png')}}"/>
                            </div>

                             <div class="col-md-11 col-xs-10">
                                <b>+254 797 66 33 72</b>
                            </div>
                           
                        </div>

                        <div class="row contact-line">
                            <div class="col-md-1 col-xs-2">
                                <img class="img-responsive icon-contact" src="{{ URL::asset('/images/contact-icon-03.png')}}"/>
                            </div>

                             <div class="col-md-11 col-xs-10">
                                <b>admin@containerskenya.com</b>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container-fluid web-foot">
                <p class="text-center"><b>Containers Kenya 2107. All rights reserved.</b></p>
            </div>