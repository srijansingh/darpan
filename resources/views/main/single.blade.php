<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/singlepage.css">
    <title>Document</title>
    <script>

        function reg(){
            var a=document.getElementById('register');
            var b=document.getElementById('container');
            a.style.display="block";
            b.style.display="none";


        }
    </script>
</head>
<body>
<div class="main">
</div>
<div class="container" id="container">
    <h1>{{$event->name}}</h1>  <!-- event name -->

    <div class="wrapper">
        <div class="eventDes">

            <p>
                {{$event->description}}
            </p>
          {{--  <p>
                Lorem ipsum dolor sit amet,
                consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor
                invidunt ut labore et dolore
                magna aliquyam erat, sed diam
                voluptua. At vero eos et accusam
                et justo duo dolores et ea rebum.
                Stet clita kasd gubergren, no sea
                magna aliquyam erat, sed diam
                voluptua. At vero eos et accusam
                et justo duo dolores et ea rebum.
                Stet clita kasd gubergren, no sea
            </p>
--}}
            <div class="eventDetail">
                <div class="parts">
                    <span class="left">Date</span><span class="right">{{$event->starting_at}}</span>
                </div>

                <div class="parts">
                    <span class="left">Venue</span><span class="right">{{$event->venue}}</span>
                </div>

                <div class="parts">
                    <span class="left">Registration Fee</span><span class="right">{{$event->regFee}}</span>
                </div>
            </div>
        </div>
        <div class="eventImg">
            <div class="eventPic">
                <img src="../images/about.png" >
            </div>
            <div class="button">
                <a href="#register" onclick="reg()">Register</a>
            </div>
        </div>
    </div>

</div>
`
<div class="register" id="register">
    <div class="regImage">

    </div>
    <div class="regWrapper">
        <div class="regContainer">
            <h1>Register Now</h1>
            @if(count($errors)>0)
                <div class="alert alert-danger col-4">
                    <ul>
                        @foreach($errors as $error)
                            <li>All fields are required</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/register" method="post" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                <input type="hidden" value="{{$event->id}}" name="eventID">
                <div class="section">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Enter e-mail">
                    </div>
                    <div class="form-group">
                        <label for="">Registration ID</label>
                        <input type="text" name="regID" placeholder="Enter Registration ID">
                    </div>
                    <div class="form-group">
                        <label for="">Contact Number</label>
                        <input type="text" name="contact" placeholder="Enter Name">
                    </div>

                    <div class="form-group" >
                        <label for="">School/University</label>
                        <input type="text" name="college" placeholder="You school/University">
                    </div>



                </div>

                <div class="section">
                    <div class="form-group">
                        <label for="">Father's Name</label>
                        <input type="text" name="fname" placeholder="Enter Father's Name">
                    </div>

                    <div class="form-group">
                        <label for="">Mother's Name</label>
                        <input type="text" name="mname" placeholder="Enter Mother's Name">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="address" name="address" placeholder="Enter Residential Address">
                    </div>

                    <div class="form-group">
                        <label for="">Upload Your Photo</label>
                        <input type="file" name="image">
                    </div>
                    <div class="form-group">
                        <input type="submit">
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>


</body>
</html>
