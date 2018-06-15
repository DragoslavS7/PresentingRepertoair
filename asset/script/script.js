
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
                if(response.success == "OK"){
                    swal({
                        title: 'Success',
                        text: "Are you sure you want to get out?",
                        type: 'success'
                    });
                }else{
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Fill in all the fields!'
                    });
                }

            },
            error:function(error){
                console.log(error);
            }

        });
    });

 }

 function fileHeandler() {

    $('#fileBtn').on('click',function(e){
        e.preventDefault();
        $('#file').trigger('click');
    });
        $('#file').change(function(e){
            e.preventDefault();

            var form = new FormData();

            form.append('file',  $('#file')[0].files[0]);
            $.ajax({
                url: '../request.php?p=file',
                method: 'POST',
                data: form,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (data) {
                    console.log(data[0])
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });

 }

 function reservedHen() {

    $('#reservedBtn').on('click',function(e){
        e.preventDefault();
        $.ajax({
            url: '../request.php',
            method: 'POST',
            data: {
                'Title': $('#Title').val(),
                'firstName': $('#firstName').val(),
                'lastName': $('#lastName').val(),
                'username': $('#username').val(),
                'email': $('#email').val(),
                'address': $('#address').val(),
                'address2': $('#address2').val(),
                'country': $('#country').val(),
                'state': $('#state').val(),
                'zip': $('#zip').val(),
                'tik_s': $('#tik_s').val(),
                'p':'reservedForm'
            },
            success: function (response) {
                if(response.success == "OK"){
                        swal({
                            title: 'Success',
                            text: "Are you sure you want to get out?",
                            type: 'success',
                            showCancelButton: true
                        }).then(function () {
                            $.ajax({
                                url: '../request.php',
                                method: 'POST',
                                data: {
                                    'p': 'sendEmail'
                                },
                                success: function (response) {
                                    console.log(response);
                                }
                            });
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
                        text: 'Invalid fields!'
                    });
                }
            },
            error: function (error) {
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
   fileHeandler();
   reservedHen();
});


