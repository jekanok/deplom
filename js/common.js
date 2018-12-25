$(document).ready(function () {

    var access_token = window.location.hash.substr(1);
    
	var id = access_token.split('.')[0];
   
	var id = id.replace('access_token=', '');
    if (access_token != '') {
        $.ajax({
            type: "POST",
            url: "auth.php",
            data: {"access_token": access_token,"id":id},
            cache: false,
            success: function (data) {
    			data = JSON.parse(data);
			    $.each(data, function(index, data){});
                console.log(data.like);
                console.log(data.sql);
                console.log(data.access_token);
            }
        });
    }

});
