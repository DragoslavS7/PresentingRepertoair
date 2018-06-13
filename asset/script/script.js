
 function curoselItem() {
    $('.carousel .carousel-item[data-src]').each(function() {
        var $this = $(this);

        $this.prepend([
            '<div style="background-image: url(', $this.attr('data-src'), ')"></div>'
        ].join(''));
    });
 }

 function loginForm() {

    $('#sub-login').on('click', function (e) {
        e.preventDefault();
        var email    = $('#email').val(),
            password = $('#password').val();

        $.ajax({
            url: "../request.php",
            method: "POST",
            data: {
                'email': email,
                'password': password,
                'p': 'Login'
            },
            success: function(response) {
                if(response.success == "OK"){
                    swal({
                        title: 'Success',
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
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Invalid email/password!'
                    });
                }
            },
            error:  function(error){
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Errors to database,please contact admin!'
                });
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
        var title       = $('#title').val(),
            dateOf      = $('#dateOf').val(),
            dateTo      = $('#dateTo').val(),
            description = $('#description').val(),
            file        = $('#file').val();
        $.ajax({
            url:'../request.php',
            method:'POST',
            data:{
                'title':title,
                'dateOf':dateOf,
                'dateTo':dateTo,
                'description':description,
                'file':file,
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
   loginForm();
   Logout();
   CreateRepertoair();
});

