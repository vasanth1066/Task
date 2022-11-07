$(document).ready(function () {
    $('#login').click(function (e) {
        // alert("clicked")
        e.preventDefault()
        let Email = $('#Email').val();
        let Password = $('#Password').val();
        $.ajax({
            type: "POST",
            url: 'http://localhost/Task/php/login.php',
            dataType: "text",
            data: {
                Email: Email,
                Password: Password
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