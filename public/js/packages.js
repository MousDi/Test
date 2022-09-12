
let url = "/api/packages";
let apiToken;
let userId;


function getAllPackages (token) {
    $.ajax({
        headers: setHeader(token),
        type:'GET',
        url: url
     }).done(function (response) {
         console.log(response);
         renderPackages(response.data)
     }).fail(function (jqXHR) {
         alert(jqXHR.responseText);
     });
}



function initAuthData(token, id) {
    apiToken = token;
    userId = id;
}
  


function renderPackages (packages) {
    $('#card-container').html('');
    for (let i = 0; i < packages.length; i++) {
        let button = '';
        if(packages[i].status  == 'Available'){
            button = '<button type="button" btn-primary id="' + i + '">Subscribe</button>';
           
        }
        $('#card-container')
        .append( '<div class="card" style="text-align: center"><div class="card-header">Package '
        + packages[i].name 
        +'</div><div class="card-body"><div>'
        + packages[i].status 
        +'</div><div>' +
        button
        +
        '</div></div>');
        $("#" + i).click(e =>{
            subscribePackage(packages[i].id);
        });
    }
    $("#packages").show();
}



function setHeader(token){
    let headers =  {
        'Authorization':'Bearer ' + token,
        'Content-Type':'application/json'
    }
    return headers;
}


function subscribePackage (packageId) {
    var data = {
         packageid:packageId,
         userid:userId}
    $.ajax({
     headers: setHeader(apiToken),
     type:'POST',
     data:JSON.stringify(data),
     url: url + '/subscribe'
  }).done(function (response) {
      console.log(response);
      renderPackages(response.data)
  }).fail(function (jqXHR) {
      alert(jqXHR.responseText);
  });
 }
 