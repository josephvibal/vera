
<div class="row">
    <div class="col-md-12">

        <div class="portlet light bordered" id="rootwizard">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-red"></i>
                    <span class="caption-subject font-red bold uppercase"> Form Wizard -
                        <span class="step-title"> Step 1 of 4 </span>
                    </span>
                </div>

            </div>
            <div class="portlet-body form">
                <form class="form-horizontal" action="#" id="submit_form" method="POST">
                    <div class="form-wizard">
                        <div class="form-body">
                            <ul class="nav nav-pills nav-justified steps">
                                <li>
                                    <a href="#tab1" data-toggle="tab" class="step">
                                        <span class="number"> 1 </span>
                                        <span class="desc">
                                            <i class="fa fa-check"></i> Account Setup </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab2" data-toggle="tab" class="step active">
                                        <span class="number"> 2 </span>
                                        <span class="desc">
                                            <i class="fa fa-check"></i> Personal Info </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab4" data-toggle="tab" class="step">
                                        <span class="number"> 3 </span>
                                        <span class="desc">
                                            <i class="fa fa-check"></i> Confirm </span>
                                    </a>
                                </li>
                            </ul>
                            <div id="bar" class="progress progress-striped" role="progressbar">
                                <div class="progress-bar progress-bar-success"> </div>
                            </div>
                            <div class="tab-content">
                                <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button> You have some 
form errors. Please check below. </div>
                                <div class="alert alert-success display-none">
                                    <button class="close" data-dismiss="alert"></button> Your form 
validation is successful! </div>
                                <div class="tab-pane active" id="tab1">
                                    <h3 class="block">Provide your account details</h3>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Username
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="username" />
                                            <span class="help-block"> Provide your username </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="email" />
                                            <span class="help-block"> Provide your email address </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <h3 class="block">Provide your billing and credit card details</h3>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">First Name
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" name="first_name" placeholder="Enter First Name" class="form-control">                                            
                                        <span class="help-block"> </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Last Name
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control">                                        
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Gender
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="radio-list">
                                                <label>
                                                    <input type="radio" name="gender" value="M" data-title="Male" /> Male </label>
                                                <label>
                                                    <input type="radio" name="gender" value="F" data-title="Female" /> Female </label>
                                            </div>
                                            <div id="form_gender_error"> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Mobile Number
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" name="mobile_number" placeholder="+63 123 1234567" class="form-control">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Payment Options
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="checkbox-list">
                                                <label>
                                                    <input type="checkbox" name="payment[]" value="1" 
data-title="Auto-Pay with this Credit Card." /> 
Auto-Pay with this Credit Card </label>
                                                <label>
                                                    <input type="checkbox" name="payment[]" value="2" 
data-title="Email me monthly billing." /> Email me 
monthly billing </label>
                                            </div>
                                            <div id="form_payment_error"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <h3 class="block">Confirm your account</h3>
                                    <h4 class="form-section">Account</h4>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Username:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="username"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="email"> </p>
                                        </div>
                                    </div>
                                    <h4 class="form-section">Profile</h4>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Fullname:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="fullname"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Gender:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="gender"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Phone:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="phone"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Address:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="address"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">City/Town:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="city"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Country:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="country"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Remarks:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="remarks"> </p>
                                        </div>
                                    </div>
                                    <h4 class="form-section">Billing</h4>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Card Holder Name:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="card_name"> </p
>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Card Number:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="card_number"> 
</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">CVC:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="card_cvc"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Expiration:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="
card_expiry_date"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Payment Options:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="payment[]"> </p
>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <ul class="pager wizard">
                                       <!--  <li class="previous first" style="display:none;"><a href="#">First</a></li> -->
                                        <li class="previous"><a href="#">Previous</a></li>
                                        <<!-- li class="next last" style="display:none;"><a href="#">Last</a></li> -->
                                        <li class="next"><a href="#">Next</a></li>
                                    </ul>

                                    <a href="javascript:;" class="btn default button-previous">
                                        <i class="fa fa-angle-left"></i> Back </a>
                                    <a href="javascript:;" class="btn btn-outline green button-next next"> 
                                        Continue
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a href="javascript:;" class="btn green button-submit"> Submit
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


     <script src="{{ asset('select2/js/select2.full.min.js') }}"></script>
     <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
     <script src="{{ asset('js/additional-methods.min.js') }}"></script>
     <script src="{{ asset('bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script>
      $(document).ready(function() {
      $('#rootwizard').bootstrapWizard({onNext: function(tab, navigation, index) {
        if(index==1) {
          // Make sure we entered the name
          if(!$('#username').val()) {
            alert('You must enter your name');
            $('#name').focus();
            return false;
          }
        }
   
        // Set the name for the next tab
        $('#tab3').html('Hello, ' + $('#name').val());
   
      }, onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index+1;
        var $percent = ($current/$total) * 100;
        $('#rootwizard .progress-bar').css({width:$percent+'%'});
      }});
  });
    </script>