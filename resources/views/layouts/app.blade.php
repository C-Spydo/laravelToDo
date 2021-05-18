<!DOCTYPE html>
<html>
    <head>
    <title>Todo List</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

                <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 4px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 45px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>
    <body>
        <div class="flex-center position-ref">

            <div class="content">
                <div class="title m-b-md">
                    C-Spydo ToDo App
                </div>
            </div>
        </div>
 <div class="flex-center position-ref ">
        @yield("content2")
</div>

    {{-- <div class="flex-center position-ref ">

        <div class="content">
        <div class="links">
            <a href="https://cspydo.com.ng" target="_blank">Developer</a>
            <a href="https://bytelabs.ng/" target="_blank">Company</a>
            <a href="https://laravel.com/" target="_blank">Technology</a>
            <a target="_blank" href="https://www.techomoro.com/how-to-create-a-todo-list-application-in-laravel-5-6/">Reference</a>
        </div>
        </div></div> --}}

    </body>
</html>
