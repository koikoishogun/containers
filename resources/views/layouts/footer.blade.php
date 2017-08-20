<!--START OF FOOTER -->

<div class="container-fluid contact-us">
                <div class="container contact-holder">
                    <script src="/js/msg/msg.js"></script>
                            <div class="col-md-5 col-md-offset-1 question-form">
                                <h3 class="red"><b>Still have a Question?</b></h3>

                                <form class="msg_form">
								{{csrf_field()}}
								<div class="form-group">
                                      <label for="usrr">Your Name</label>
                                      <input type="text" class="form-control theemail" id="usrr" name="name">
                                    </div>
                                    <div class="form-group">
                                      <label for="usr">Your Email</label>
                                      <input type="email" class="form-control theemail" id="usr" name="email">
                                    </div>

                                    <div class="form-group">
                                    <label for="pwd">Message</label>
                                      <textarea class="message form-control" rows="3" id="message" name="message"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-danger pull-right submitmessage"><span class="glyphicon glyphicon-share"></span> <b>Leave us a Message</b> </button>
                                    
                                </form>
                            </div>

                    <div class="col-md-5 gray-bg get-in-touch">
                        <h3 class="red"><b>Get in Touch with us.</b></h3>

                        <div class="row contact-line">

                            <div class="col-md-1 col-xs-2">
                                <img class="img-responsive icon-contact" src="{{ URL::asset('/images/contact-icon-01.png')}}"/>
                            </div>

                            <div class="col-md-11 col-xs-10">
                                <b>Along Kuguru Loop</br>Off Entreprise Road near General Motors</br> Mombasa road</b>
                           
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
                                <b>+254 797 66 33 72 (Mary)</b>
                                <b>+254 707 05 30 48 (Mary)</b>
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
                <p class="text-center white"><b>Containers Kenya 2107. All rights reserved.</b></p>
            </div>
			<!--msg success modal  -->
			<div class="modal fade" id="msg_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document" >
          <div class="modal-content">
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
          </div>
          <div class="modal-body">
                <p>Your Message  Has been Sent we'll email shortly</p>
            
            
          </div>

          <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
          </div>
          </div>
        </div>

      </div>
	  <!-- End msg success modal  -->
	  
	  
	  <!-- End footer ---->