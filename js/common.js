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

      $( document ).ajaxComplete(function() {
//        console.log(comments);	
//        console.log(likes);
//        console.log(data.data[0].user.profile_picture);
//        console.log(data.data[0].user.full_name);


if(access_token != ''){
        $(".avatar").attr("src", ""+data.data[0].user.profile_picture+"")
          $(".full_name").text(data.data[0].user.full_name)
          $(".like_it").text(likes);
          $(".comment_it").text(comments);

    
   $.magnificPopup.open({
  items: {
      src: '.with-modal',
      type: 'inline'
  },
  closeBtnInside: true
  
});
    
}
        
});
            $.ajax({
              url: "sql.php", // Обработчик
              type: "POST",       // Отправляем методом POST
              data: {"profile_picture": data.data[0].user.profile_picture , "full_name": data.data[0].user.full_name, "likes": likes, "comments": comments, "access_token": access_token},
              cache: false,		
            
              success: function(response){
              console.log(response);
                  
          }
				});
            
  }

});

});
