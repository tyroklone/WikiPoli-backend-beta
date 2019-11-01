<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Dashboard | General
        </title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/admin-dashboard-general.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/admin-dashboard-sidebar.css')}}">
        <link rel="icon" type="img/png" href="{{asset('images/favicon.png')}}">

    </head>
    <body>

        @include('layouts.admin.navbar')
        @yield('content')


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{asset('scripts/index.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <script>
$(".deleted").on("submit", function () {

    return confirm("Are you sure?");
});
        </script>
        <script>
            let selectStatus = document.querySelector('#select-filter');
            selectStatus.addEventListener('change', function () {
              
                if (selectStatus.value === 'all')
                    window.location.href = "/admin/posts";
                else
                    window.location.href = "/admin/posts?filter=" + selectStatus.value;
            }, false);
           

        </script>
        
         <script>
          
            let selectStatusUser = document.querySelector('#select-filter-user');
            selectStatusUser.addEventListener('change', function () {
             
                if (selectStatusUser.value === 'all')
                    window.location.href = "/admin/users";
                else
                    window.location.href = "/admin/users?filter=" + selectStatusUser.value;
            }, false);

        </script>
    </body>
</html>
