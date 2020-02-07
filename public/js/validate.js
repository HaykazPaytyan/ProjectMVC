
const LOG_FORM = document.querySelector('#log-in');
let log_email = document.querySelector('#log_email');
let log_pass  = document.querySelector('#log_pwd');

LOG_FORM.addEventListener('submit',function(event){
   
     if (log_email.value == null || log_email.value == "") {
     	  event.preventDefault();
     	  document.querySelector('#log_email_required').innerHTML="*Required";
     	  return false;
     }

      if (log_pass.value == null || log_pass.value == "") {
     	   event.preventDefault();
     	   document.querySelector('#log_pass_required').innerHTML="*Required";
     	   return false;
     }

     return true;
});


const REG_FORM = document.querySelector('#register');
let reg_fname = document.querySelector('#reg_fname');
let reg_lname  = document.querySelector('#reg_lname');
let reg_email = document.querySelector('#reg_email');
let reg_pwd  = document.querySelector('#reg_pwd');
let reg_rwd_rpt =document.querySelector('#reg_pwd_rpt');

REG_FORM.addEventListener('submit',function(event){
   
     if (reg_fname.value == null || reg_fname.value == "") {
            event.preventDefault();
            document.querySelector('#reg_fname_required').innerHTML="*Required";
            return false;
     }

      if (reg_lname.value == null || reg_lname.value == "") {
             event.preventDefault();
             document.querySelector('#reg_lname_required').innerHTML="*Required";
             return false;
     }

     if (reg_email.value == null || reg_email.value == "") {
            event.preventDefault();
            document.querySelector('#reg_email_required').innerHTML="*Required";
            return false;
     }

      if (reg_pwd.value == null || reg_pwd.value == "") {
             event.preventDefault();
             document.querySelector('#reg_pwd_required').innerHTML="*Required";
             return false;
     }

     if (reg_pwd_rpt.value == null || reg_pwd_rpt.value == "") {
             event.preventDefault();
             document.querySelector('#reg_pwd_rpt_required').innerHTML="*Required";
             return false;
     }

     return true;
});