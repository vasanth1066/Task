

$(document).ready(function(){
    $('#register').click(function(e){
        // alert("clicked")
        e.preventDefault()
        let Name=$('#Name').val()
        let Email=$('#Email').val();
        let Password=$('#Password').val();
        let Cpassword=$('#ConfirmPassword')
        $.ajax({
            type:"post",
            url:'http://localhost/Task/php/register.php',
            dataType: "json",
            data:{
                Name:Name,
                Email:Email,
                Password:Password
            },
            statusCode: {
                200: function (response) {
                    let splited = response.responseText.split('|')
                    console.log(splited)
                   alert(splited[1])
                }
            }
        })
    })
    
})