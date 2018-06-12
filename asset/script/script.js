
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
                          swal({
                              title: 'Ok',
                              text: "Are you sure you want to get out?",
                              type: 'success',
                              showCancelButton: true
                          }).then(function () {
                              window.location.href = '../admins/new-repertoair.php';
                          },function(dismiss) {
                              if (dismiss === 'cancel') {
                                  swal(
                                      'cancel',
                                      'Thank you :)',
                                      'error'
                                  )
                              }
                          });
                      }else{
                          console.error(response);
                      }
            },
            error:  function(error){
                swal({
                    title: 'Error!',
                    text: 'Errors to database,please contact admin',
                    type: 'error',
                    confirmButtonText: 'Ok'
                });
                console.error(error);
            }

        });
    } );

}
 function Logout () {
     $('.finish').on('click', function(e) {
         e.preventDefault();
         $.ajax({
             url: '../request.php',
             method: "POST",
             data:{
               'p':'Logout'
             },
             success: function(response){
                 swal({
                     title: 'Close',
                     text: "Are you sure you want to get out?",
                     type: 'warning',
                     showCancelButton: true
                 }).then(function () {
                     window.location.href = '../?page=Login';
                 },function(dismiss) {
                     if (dismiss === 'cancel') {
                         swal(
                             'cancel',
                             'Thank you :)',
                             'error'
                         )
                     }
                 });
             }
         });
     });
 }


$(document).ready(function () {
   curoselItem();
   apiCall();
   Logout();
});

