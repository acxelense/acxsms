function dologin()
{  
  jQuery.ajax({
  type: 'POST',
  url: 'http://localhost/acxsms/login/loginprocess',
  data: $("#login").serialize(),
  dataType: "json",
  beforeSend: function()
  {
    $('#submitBtn').prop("disabled",true);
  },
  success: function(result)
  {
    if (result.errorMsg)
    {
      toastr.error(result.errorMsg);
      toastr.options.showEasing = 'easeOutBounce';
      $('#submitBtn').prop("disabled",false);
    } 
    else 
    {
      toastr.success('Sign in successful!');
      window.location.href="http://localhost/acxsms/dashboard";
    }
  }
  });
}
