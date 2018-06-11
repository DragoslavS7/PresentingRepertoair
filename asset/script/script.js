
function curoselItem() {
    $('.carousel .carousel-item[data-src]').each(function() {
        var $this = $(this);

        $this.prepend([
            '<div style="background-image: url(', $this.attr('data-src'), ')"></div>'
        ].join(''));
    });
}

function apiCall() {

    $('#sub-login').on('click', function (e) {
        e.preventDefault();

        $.ajax({
            url: "../request.php",
            method: "POST",
            data: {
                'p': 'Login'
            },
            success: function(response) {
                      if(response.status == "OK"){
                         console.log(response);
                         window.location.href = "../admins/new-repertoair.php";
                      }else{
                          console.error(response);
                      }
            },
            error:  function(error){
                console.error(error);
            }

        });
    } );

}
// function Logout () {
//     $('.finish').on('click', function(e) {
//         e.preventDefault();
//         $.ajax({
//             url: '../request.php',
//             success: function(data){
//                 console.log(data);
//

//             }
//         });
//     });
// }


$(document).ready(function () {
   curoselItem();
   //apiCall();
   //Logout();
});

