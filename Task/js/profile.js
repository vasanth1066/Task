$(document).ready(function () {
    $('#getdata').click(function (e) {
        e.preventDefault()
        $.ajax({
            type: "POST",
            url: 'http://localhost/Task/php/profile.php',
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            statusCode: {
                200: function (response) {
                    console.log(response)
                    response.forEach(data => {
                        let div = document.createElement("div")
                        div.innerHTML = `<div class="text-center m-5">
                         <h5>NAME: ${data.Name}</h5>
                         <h5>EMAIL: ${data.Email}</h5>
                         <h5>AGE: ${data.Age}</h5>
                         <h5>PHONENO: ${data.PhonNo}</h5>
                         <hr>
                         <br/>
                        </div>`
                        document.body.appendChild(div)
                    })

                }
            }
        })


    })
})
