//<![CDATA[
window.onload=function(){
	
Vue.component('upload-image', {
	
  template: '#dropzone',
  
  props: ['help'],

  data() {
      return {
          image: '',
          hovering:false
      }
  },

  methods: {
      onFileChange(e) {
  var maxsize = 5000 * 1024; // 500 KB

  var files = e.target.files || e.dataTransfer.files;
        
	
	

  $('#max-size').html((maxsize/1024).toFixed(2));
    $('#message').empty();

    var file = files[0];
    var match = ["image/jpeg", "image/png", "image/jpg"];
	var file_name = file.name ;
	$('#file-name').attr('placeholder',file.name);
    if ( !( (file.type == match[0]) || (file.type == match[1]) || (file.type == match[2]) ) )
    {
	var image = new Image();
          var reader = new FileReader();
          var vm = this;
       this.image = '';

 	toastr.error('Chỉ hỗ trợ các định dạng ảnh là : JPG , PNG , JPEG .', 'Error');
      return false;
    }

    if ( file.size > maxsize )
    {
	 var image = new Image();
          var reader = new FileReader();
          var vm = this;
      this.image = '';
       	toastr.error('Ảnh giới hạn là 5MB ! .', 'Error',{preventDuplicates: true});

	  

      return false;
    }
	else{


	var dataup = new FormData(); 
	var datatime=$('#time').val();
	dataup.append('file', $('input[type=file]')[0].files[0]);
        dataup.append('time', datatime); 





   
toastr.success('Đang tải ảnh lên ...', 'Thông báo',{positionClass: 'toast-bottom-center',showEasing: 'swing'});

	$.ajax({
      url: "handleImage.php",
      type: "POST",
      data: dataup ,
      contentType: false,
      cache: false,
      dataType: 'json',
      processData: false,
      success: function(data)
      {
        
       if (data.error == "0"){
		   toastr.info("Đang tiến hành nén ảnh .....", 'Thông báo',{positionClass: 'toast-top-center',showEasing: 'swing'});
		   setTimeout(function(){
			   window.location.href = "nen.php?file=" + data.file_url;
			   toastr.success('Ảnh của bạn đã được nén và tải xuống.', 'Thông báo',{positionClass: 'toast-bottom-left', preventDuplicates:true,newestOnTop:true});
		   },2000);

	   }
			else {
				toastr.warning(data.error, 'Thông báo',{positionClass: 'toast-top-center',showEasing: 'swing'});

			}	 
		
		}
    });

}
	
    var reader = new FileReader();
    reader.readAsDataURL(files[0]);
		


   
      },
     /*** Ta?o A?nh */
	 
	  createImage(file) {
          var image = new Image();
          var reader = new FileReader();
          var vm = this;

          reader.onload = (e) => {
              vm.image = e.target.result;
          };
          reader.readAsDataURL(file);
      },
      removeImage: function (e) {
          this.image = '';
      },
	  
	  /*** Up A?nh */
	  uploadimg: function(){
	



   alert("OK ");
   
   
 
	      
	  
	  }
	
  }
  
});

new Vue({
	el: '#wrapper'
});
}//]]> 
