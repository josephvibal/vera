
<style type="text/css">
    legend{
        font-size: 16px;
    }
</style>
<form method="POST" action="{{url('/system-users/update-privilege')}}">
<fieldset>
    <legend> Grant All Privilege <input type="checkbox" id="grant_all_privilege"> <label style="color:blue"> check all</legend>
    <fieldset>
   
        <div class="row">

        <div class="col-md-4">
            <div class="form-group">
                 <legend><input class="global-access" type="checkbox"  id="user-prev"> Users</legend>                            
            </div>
            <div class="form-group">
                <input {{($user->functions->add_user) ? 'checked="true"' : ''}} type="checkbox" name="create_user" class="global-access user_privilege"/> Create User
            </div>
            <div class="form-group">
                <input {{($user->functions->edit_user) ? 'checked="true"' : ''}} type="checkbox" name="edit_user" class="global-access user_privilege"/> Edit User
            </div>
            <div class="form-group">
                <input {{($user->functions->delete_user) ? 'checked="true"' : ''}} type="checkbox" name="delete_user" class="global-access user_privilege"/> Delete User
            </div>                                                                                    
        </div>

        <div class="col-md-4">
            <div class="form-group">
                 <legend><input class="global-access" type="checkbox"  id="comp-prev"> Company</legend>                            
            </div>
            <div class="form-group">
                <input {{($user->functions->add_company) ? 'checked="true"' : ''}} type="checkbox" name="create_company" class="global-access company_privilege"/> Create Company
            </div>
            <div class="form-group">
                <input {{($user->functions->edit_company) ? 'checked="true"' : ''}} type="checkbox" name="edit_company" class="global-access company_privilege"/> Edit Company
            </div>
            <div class="form-group">
                <input {{($user->functions->delete_company) ? 'checked="true"' : ''}} type="checkbox" name="delete_company" class="global-access company_privilege"/> Delete Company
            </div>                                                                                    
        </div>     

        <div class="col-md-4">
            <div class="form-group">
                 <legend><input class="global-access" type="checkbox"  id="file-prev"> File</legend>                            
            </div>
            <div class="form-group">
                <input {{($user->functions->can_upload_file) ? 'checked="true"' : ''}} type="checkbox" name="create_file" class="global-access file_privilege"/> Create File
            </div>
            <div class="form-group">
                <input {{($user->functions->can_edit_file) ? 'checked="true"' : ''}} type="checkbox" name="edit_file" class="global-access file_privilege"/> Edit File
            </div>                                                                                    
        </div>                                        


        </div>                                    
   </fieldset>                                
</fieldset>
                                @if(session('global'))
       
                           
                                   
                                    <span>{{session('global')}}</span>
                                                          
                                @endif

   <div class="form-group">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{!! $user->id !!}">
            <button type="submit" class="btn btn-default pull-right">
                 Update
            </button>                                   
      
    </div>
</form>
                <br/>
    <script>
        (function(){
            var global_p = document.getElementById('grant_all_privilege');
            var cb = document.getElementsByClassName('global-access');
            global_p.onchange = function (){
                if(global_p.checked){
                    for (var i = cb.length - 1; i >= 0; i--) {
                             cb[i].checked = true;
                     }                   
                }else{
                    for (var i = cb.length - 1; i >= 0; i--) {
                             cb[i].checked = false;
                     }                     
                }
            }          

        })();

        (function(){

            var user_prev = document.getElementById('user-prev');
            var up = document.getElementsByClassName('user_privilege');

            user_prev.onchange = function (){
                if(user_prev.checked == true){
                    for (var i = up.length - 1; i >= 0; i--) {
                             up[i].checked = true;
                     } 
                }else{
                    for (var i = up.length - 1; i >= 0; i--) {
                             up[i].checked = false;
                     }                     
                }
            }

        })();

        (function(){

            var comp_prev = document.getElementById('comp-prev');
            var cp = document.getElementsByClassName('company_privilege');

            comp_prev.onchange = function (){
                if(comp_prev.checked == true){
                    for (var i = cp.length - 1; i >= 0; i--) {
                             cp[i].checked = true;
                     } 
                }else{
                    for (var i = cp.length - 1; i >= 0; i--) {
                             cp[i].checked = false;
                     }                     
                }
            }

        })();

        (function(){

            var file_prev = document.getElementById('file-prev');
            var fp = document.getElementsByClassName('file_privilege');

            file_prev.onchange = function (){
                if(file_prev.checked == true){
                    for (var i = fp.length - 1; i >= 0; i--) {
                             fp[i].checked = true;
                     } 
                }else{
                    for (var i = fp.length - 1; i >= 0; i--) {
                             fp[i].checked = false;
                     }                     
                }
            }

        })();        


    </script>    