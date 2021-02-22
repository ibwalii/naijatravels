//LOGGING
$('#password').keypress(function(e){
    if(e.keyCode == 13){
        $('#login').trigger('click');	
    }
});

$('#login').click(function(){
    let feedback = $('#feedback');

    feedback.html('<img class="loading-img" src="./images/loading.gif">');

    let username = $('#username').val();
    let password = $('#password').val();
        
        if(username.length > 0){
            if(password.length > 0){
                $.post('./functions/logging.php', {username:username, password:password}, 
                function(data){
                    feedback.html(data);
                });
            }else{
                feedback.html('<div class="col-sm-12 bg-danger text-white py-2">Password field empty...</div>');
            }
        }else{
            feedback.html('<div class="col-sm-12 bg-danger text-white py-2">Username field empty...</div>');
        }
});
//LOGGING