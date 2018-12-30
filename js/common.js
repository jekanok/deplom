$(document).ready(function () {
    var access_token = window.location.hash.substr(1);
    var arr = access_token.split('.');
    var id = arr[0].substr(13);
    var tokens = access_token.substr(13);
$.ajax({  
  url: 'https://api.instagram.com/v1/users/'+id+'/media/recent/?client_id=01e9a9797a45457db450eac2e2989036&access_token='+tokens+'',  
  dataType: "jsonp",  
  success: function(data){
      
			var likes = 0;
            var comments = 0;
			 $.each(data.data, function(index, data){
//                 count = Number(data.likes.count);
                 likes += parseFloat(data.likes.count);
                 comments += parseFloat(data.comments.count);

 });
      
            console.log(comments);	
            console.log(likes);
  }

});
});
