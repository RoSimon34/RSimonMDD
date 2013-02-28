$(function() {
   $('#upload_file').submit(function(e) {
      e.preventDefault();
      $.ajaxFileUpload({
         url         :'./upload/upload_file/',
         secureuri      :false,
         fileElementId  :'userfile',
         dataType    : 'json',
         data        : {
            'title'           : $('#title').val(),
            'medium'           : $('#medium').val(),
            'description'           : $('#description').val(),
            'inspiration'           : $('#inspiration').val()
         },
         success  : function (data, status)
         {
            if(data.status != 'error')
            {
               $('#files').html('<p>Reloading files...</p>');
               refresh_files();
               $('#title').val('');
               $('#medium').val('');
               $('#description').val('');
               $('#inspiration').val('');
            }
            alert(data.msg);
         }
      });
      return false;
   });
   refresh_files();
   
});

function refresh_files()
{
   $.get('/gestureArt/upload/files/')
   .success(function (data){
      $('#files').html(data);
   });
}