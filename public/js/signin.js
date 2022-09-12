$("#submit").click(function(e){
    e.preventDefault();
 
    var name = $("#name").val();
    var email = $("#email_address").val();
    var password = $("#password").val();
    var confirmPassword = $("#confirm_password").val();

    var data = {
         name:name,
         email:email,
         password:password,
         confirm_password:confirmPassword
        }
    $.ajax({
       type:'POST',
       url:"/api/signin",
       data:data
    }).done(function (response) {
        console.log(response);
        initAuthData(response.data.token, response.data.user.id);
        getAllPackages(response.data.token);
    }).fail(function (jqXHR) {
        alert(jqXHR.responseText);
    });

});
