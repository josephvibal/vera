
                                        <div class="form-group">
                                            <label class="control-label">User Name<span class="required"> * </span></label>
                                            <input type="text" name="username" placeholder="username" class="form-control"
                                                value="{{(!old('username')) ? '' : old('username')}}" 
                                                > 
                                                @if ($errors->has('username'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('username') }}</strong>
                                                    </span>
                                                @endif                                               
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Email<span class="required"> * </span></label>
                                            <input type="email" name="email" placeholder="email" class="form-control"
                                                value="{{(!old('email')) ? '' : old('email')}}" 
                                                >
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif                                               
                                        </div>                                                                                     
                                        <div class="form-group">
                                            <label class="control-label">First Name<span class="required"> * </span></label>
                                            <input type="text" name="first_name" placeholder="Enter First Name" class="form-control"
                                                value="{{(!old('first_name')) ? '' : old('first_name')}}" 
                                                > 
                                                @if ($errors->has('first_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('first_name') }}</strong>
                                                    </span>
                                                @endif                                         
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Last Name<span class="required"> * </span></label>
                                            <input type="text" name="last_name" placeholder="Doe" class="form-control"
                                            value="{{(!old('last_name')) ? '' : old('last_name')}}" 
                                            >
                                                @if ($errors->has('last_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                    </span>
                                                @endif                                             
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Gender
                                                <span class="required"> * </span>
                                            </label>
                                            <label>
                                                <input type="radio" name="gender" value="He" data-title="Male"
                                                    <?php
                                                        if(old('gender')){
                                                            if(old('gender') == 'He'){
                                                                echo 'checked="true"';
                                                            }
                                                        }
                                                    ?>
                                                 /> Male 
                                                    
                                            </label>
                                            <label>
                                                <input type="radio" name="gender" value="She" data-title="Female" 
                                                    <?php
                                                        if(old('gender')){
                                                            if(old('gender') == 'She'){
                                                                echo 'checked="true"';
                                                            }
                                                        }
                                                    ?>
                                                /> Female 
                                            </label>
                                                
                                                @if ($errors->has('gender'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('gender') }}</strong>
                                                    </span>
                                                @endif
                                            
                                        </div>                                        
                                        <div class="form-group">
                                            <label class="control-label">Mobile Number</label>
                                            <input type="text" name="mobile_number" placeholder="+63 123 1234567" class="form-control"
                                            value="{{(!old('mobile_number')) ? '' : old('mobile_number')}}"  
                                            >
                                            <span class="help-block">
                                                <strong id="error_mobile_number" style="color:red;"></strong>
                                            </span>                                              
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Interests</label>
                                            <input type="text" name="interest" placeholder="Accounting, Designing, etc.." class="form-control"
                                            value="{{!old('interest') ? '' : old('interest')}}" 
                                            >
                                            <span class="help-block">
                                                <strong id="error_interest" style="color:red;"></strong>
                                            </span>                                             
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Occupation</label>
                                            <input type="text" name="occupation" placeholder="Web Developer" class="form-control"
                                            value="{{(!old('occupation')) ? '' : old('occupation')}}"
                                            >
                                            <span class="help-block">
                                                <strong id="error_occupation" style="color:red;"></strong>
                                            </span>                                               
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">About</label>
                                            <textarea name= "about" class="form-control" rows="3" style="margin: 0px -1px 0px 0px; width: 905px; height: 99px;">
                                                {{(!old('about')) ? '' : old('about')}}
                                            </textarea>
                                            <span class="help-block">
                                                <strong id="error_about" style="color:red;"></strong>
                                            </span>                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Online Portfolio</label>
                                            <input name="online_portfolio" type="text" placeholder="http://www.mywebsite.com" class="form-control"
                                            value="{{(!old('online_portfolio')) ? '' : old('online_portfolio')}}"
                                            >
                                            <span class="help-block">
                                                <strong id="error_online_portfolio" style="color:red;"></strong>
                                            </span>                                              
                                        </div>
                                        <div class="form-group">
 
                                  
                                </div>
                                
                                <h4>User Privileges</h4><hr/>
                                
                                <fieldset>
                                    <legend> Grant All Privilege <input type="checkbox" id="grant_all_privilege"> <label style="color:blue"> check all</legend>
                                    <fieldset>
                                   
                                        <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                 <legend><input class="global-access" type="checkbox"  id="user-prev"> Users</legend>                            
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" name="create_user" class="global-access user_privilege"/> Create User
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" name="edit_user" class="global-access user_privilege"/> Edit User
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" name="delete_user" class="global-access user_privilege"/> Delete User
                                            </div>                                                                                    
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                 <legend><input class="global-access" type="checkbox"  id="comp-prev"> Company</legend>                            
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" name="create_company" class="global-access company_privilege"/> Create Company
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" name="edit_company" class="global-access company_privilege"/> Edit Company
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" name="delete_company" class="global-access company_privilege"/> Delete Company
                                            </div>                                                                                    
                                        </div>     

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                 <legend><input class="global-access" type="checkbox"  id="file-prev"> File</legend>                            
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" name="create_file" class="global-access file_privilege"/> Create File
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" name="edit_file" class="global-access file_privilege"/> Edit File
                                            </div>                                                                                    
                                        </div>                                        


                                        </div>                                    
                                   </fieldset>                                
                                </fieldset>
                                   

                                    
                                    {{csrf_field()}}
                                    <div class="margin-top-10">
                                        <button type="submit" class="btn green"> Submit </button>
                                        <button type="reset" class="btn default"> Cancel </button>
                                    </div>

