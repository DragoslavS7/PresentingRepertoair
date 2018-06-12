
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
                    console.log(response);
            },
            error:  function(error){
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

 function CreateRepertoair() {
    $('#submitCreat').on('click',function(e) {
        e.preventDefault();
        $.ajax({
            url:'../request.php',
            method:'POST',
            data:{
                'p':'createRep'
            },
            success:function(response){
                    console.log(response);

            },
            error:function(error){
                console.log(error);
            }

        });
    });
 }


$(document).ready(function () {
   curoselItem();
   apiCall();
   Logout();
   CreateRepertoair();
});

