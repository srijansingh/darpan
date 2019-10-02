<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/firstpage.css">

    <link href="{{ asset('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <title>Darpan</title>
    <script>
    </script>
</head>
<body>
<div class="main" id="home">

</div>

<div class="container" id="container" >
    <img src="images/darpan3.png">
    <div class="wrapper" id="about">
        <div class="aboutus">
            <div class="aboutimg">
                <img src="images/about.png" alt="">
            </div>
            <div class="aboutdes">
                <h1>About Us</h1>
                <small>First Ever Media Fest</small>
                <p>This is your year, lets celebrate in a memorable way.</p>
                <button>View Events</button>
            </div>
        </div>
    </div>


    <div class="events" id="events">
        <div class="eventBox">
            <h1>All Events</h1>

            <div class="eventsName">
                @foreach($event as $events)
                    <a href="{{route('darpans.show',$events->id)}}">
                    <section>
                        <div class="eventImage">
                            <img src="images/about.png" alt="" id="img" onmouseover="fun()">

                        </div>

                        <div class="show" id="show">
                            <span>{{$events->name}}</span>
                        </div>

                        <div class="view" id="view">
                            <span><i class="fas fa-eye" style="font-size:48px;"></i> </span>
                        </div>
    {{--
                        <div class="button">
                            <a href="{{route('darpans.show',$events->id)}}"> <button>{{$events->name}}</button>
                        </div>--}}
                    </section>
                    </a>
                @endforeach


            </div>
        </div>
    </div>


    <div class="footer">

        <img src="images/darpan.png" alt="">




        <div class="footerBox">

            <div class="socialMedia" id="footbox">
                <small>Follow Us On</small>
                @foreach($link as $links)
                <div class="socialLinks">
                    <a href="{{$links->facebook}}">
                        <i class="fa fa-facebook-square"></i></a>
                    <a href="{{$links->instagram}}">
                        <i class="fa fa-instagram"></i></a>
                    <a href="{{$links->twitter}}">
                        <i class="fa fa-twitter"></i></a>
                </div>
                    @endforeach
            </div>

            <div class="policy" id="footbox">
                <small>Our Policy</small>
                <div class="policyBar">
                    <a href="">Privacy Policy</a>
                    <a href="">Terms and Condition</a>
                </div>
            </div>

            <div class="subscribe" id="footbox">
                <small>Subscribe Darpan</small>
                <form action="" id="contact">
                    <input type="email" name="subscribeEmail" placeholder="Enter Email">
                    <input type="submit" name="subscribe" value="Subscribe">
                </form>
            </div>

        </div>


        <div class="sponsors">


            <h1>Sponsored By</h1>


            <div class="sponsorsDes">
                @foreach($sponsor as $sponsors)
                <section>
                    <div class="sponsorsImg">
                        <img src="images/darpan.png" alt="">
                    </div>
                    <div class="sponsorsName">
                        <span>{{$sponsors->name}}</span>
                    </div>
                </section>
                @endforeach



            </div>


        </div>

    </div>

</div>

<div class="header">
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#events">Events</a>
        <a href="#about" onclick="about()">About Us</a>
        <a href="#contact">Contact Us</a>
    </div>
</div>
</body>
</html>
