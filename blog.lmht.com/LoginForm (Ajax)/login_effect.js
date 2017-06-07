function responsivePHP(){
	$.ajax({
                    url : "dologin.php",
                    type : "post",
                    dataType:"text",
                    data : {
                       uid: $('#login').val(),
                       upass: $('#password').val()
                    },
                    success : function (result){
                        $('#result').html(result);
                        // window.location="http://dantri.com.vn";
                        setTimeout("location.href = 'http://localhost:800/blog.lmht.com/LoginForm%20(Ajax)/index.php';",2400);
                        
                    }
                });
}