 <div class="container-fluid contact-us">
                <div class="container">
                    <div class="col-md-5">
                        <h3 class="red"><b>We would love to hear from you</b></h3>

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

                    <div class="col-md-7">
                        <h1 class="red"><b>CONTACT</b> US</h1>

                        <div class="row">
                            <div class="col-md-2">
                                <img class="img-responsive center-block contact-icon" src="{{ URL::asset('/images/png/contact-icon-01.png')}}"/>
                            </div>
                            <div class="col-md-10">
                                Omega Opticians Limited 2nd Floor,<br>
                                Pioneer House Kimathi street <br>
                                P.O Box 61441 – 00200 Nairobi, <br>
                                Kenya
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <img class="img-responsive center-block contact-icon" src="{{ URL::asset('/images/png/contact-icon-02.png')}}"/>
                            </div>

                            <div class="col-md-10">
                                <b>+254 (20) 2215957 | +254 726 129331 | +254 736 133480</b>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <img class="img-responsive center-block contact-icon" src="{{ URL::asset('/images/png/contact-icon-03.png')}}"/>
                            </div>

                             <div class="col-md-10">
                                <b> info@omegaopticians.com</b>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container-fluid web-foot">
                <p class="text-center"><b>Omega Opticians 2016. All rights reserved.</b></p>
            </div>