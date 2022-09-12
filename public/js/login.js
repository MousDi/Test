$("#login_submit").click(function(e){
    e.preventDefault();
 
    var email = $("#login_email_address").val();
    var password = $("#login_password").val();
  
    var data = {
         email:email,
         password:password
        }
    $.ajax({
       type:'POST',
       url:"/api/login",
       data:data
    }).done(function (response) {
        console.log(response);
        initAuthData(response.data.token, response.data.user.id);
        getAllPackages(response.data.token);
    }).fail(function (jqXHR, textStatus) {
        alert(jqXHR.responseText);
    });
});