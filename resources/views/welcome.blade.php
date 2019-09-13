<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Patrick</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>

            @import url('https://fonts.googleapis.com/css?family=Raleway&display=swap');

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                scroll-behavior: smooth;
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
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #about {
                padding: 5%;
                height: 950px;
                background: #FCBF49;
            }

            #career {
                padding: 5%;
                height: 950px;
                background: #D93B3B;
            }

            #experience {
                padding: 5%;
                height: 950px;
                background: #457A4A;
            }

            #posts {
                padding: 5%;
                height: 950px;
                background: blue;
            }

            #contact {
                padding: 5%;
                height: 950px;
                background: pink;
            }

            #more {
                padding: 5%;
                height: 950px;
                background: yellow;
            }
            .head {
                color: black;
                text-align: center;
                font-family: "Raleway";
                margin-top: -3%;
                margin-bottom: 2%;
            }
            /*progress bar top*/
            .progress-bar {
                background: #F77F00;
                /*border: 2px solid black;*/
            }
            /*progress bar background*/
            .progress {
                background: #FCBF49;
            }
            .card1 {
                background: #EAE2B7;
                padding: 3%;
                width: 100%;
                height: 90%;
                margin: auto;
            }

            .bars {
                padding: 1%;
                width: 75%;
            }

            h3 {
                color: #333333;
            }

            .return {
                color: white;
            }

            .return:hover {
                color: #003049;
                text-decoration: none;
            }

            img {
                height: 75px;
                width: 75px;
            }
            #vrtp {
                height: 70px;
                width: 80px;
            }

            #bottom-border {
                width: 30%;
                border-bottom: 1px solid #8a8a8a;
            }

            .icons {
                color: #454545;
                border-right: 1px solid #8a8a8a;
                width: 3.5%;
            }

            .icon-div {
                display: inline-flex;
            }
            .right-box {
                width: 45%;
                height: 200px;
                float: left;
            }

            .left-box {
                margin-left: 50%;
                height: 200px;
            }

            .list-group-item {
                background: #EFE9CA;
                color: #555e66;
            }

            .linkdin {
                color: #555e66;
            }

            .linkdin:hover {
                color: #555e66;
            }

        </style>
    </head>
    <body id="home">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Profile</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Patrick Gold
                </div>

                <div class="links" id="top">
                    <a href="#about">About Me</a>
                    <a href="#career">Career Aspirations</a>
                    <a href="#experience">Experience</a>
                    <a href="#contact">Contact Me</a>
                    <a href="#posts">Posts</a>
                    <a href="#more">More</a>
                </div>
            </div>
        </div>

        <div class="main" id="about">
            <h1 class="head"> About Patrick. </h1>
            <div class="card1">

                <div class="right-box">
                    <h3> Software Experience </h3>

                    <ul class="list-group list-group-flush list-style mt-3">
                        <li class="list-group-item">System network troubleshooting and configuration using <span style="color: red">Cisco servers, routers & switches.</span> </li>
                        <li class="list-group-item">Terminal emulation using <span style="color: red"> PuTTY </span></li>
                        <li class="list-group-item">Network troubleshooting and packet analysis using <span style="color: red">WireShark</span></li>
                        <li class="list-group-item">Thorough understanding of network topologies using <span style="color: red">Packet Tracer</span></li>
                        <li class="list-group-item">Intermediate programming and scripting using <span style="color: red">Python</span></li>
                        <li class="list-group-item">Website Development using <span style="color: red">PHP Laravel, Javascript, HTML & CSS</span></li>
                        <li class="list-group-item">VM and Web Hosting with <span style="color: red">Microsoft Azure</span></li>
                        <li class="list-group-item">Mobile Application design using <span style="color: red">Adobe XD</span></li>
                        <li class="list-group-item">Mobile Application development using <span style="color: red">Ionic (Angular, Node, Typescript)</span></li>
                        <li class="list-group-item">Microsoft Windows & Linux OS Experience</li>
                        <li class="list-group-item">Mastery of MS Office (Word, Excel, Powerpoint)</li>
                    </ul>
                </div>

                <div class="left-box">
                    <h3> How Do I Spend My Time? </h3>
                    <p> Currently studying a Bachelor of Information Technology, whilst studying to complete my CCNA. </p>
                    <p> When I don't have my hands glued to a keyboard, i've got a Brandon Sanderson book firmly equipped. </p>


                    <h3> Technology Interests </h3>
                    <p> Web Development - PHP(Laravel) </p>
                    <p> Mobile Development - Ionic, Flutter </p>
                    <p> Network Engineering - Cisco </p>

                    <h3> Programming Skills </h3>


                    <div class="bars">
                        <h3> HTML </h3>
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <h3> CSS </h3>
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <h3> JavaScript </h3>
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <h3> PHP </h3>
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="btn-group btn-group-toggle mt-5" data-toggle="buttons">
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option1" autocomplete="off">
                    <a class="return" href="#home"> Return </a>
                </label>
                <label class="btn btn-secondary active ml-3">
                    <input type="radio" name="options" id="option2" autocomplete="off" checked>
                    <a class="return" href="#about"> About </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" autocomplete="off">
                    <a class="return" href="#career"> Career Aspirations </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#experience"> Experience </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#contact"> Contacts </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#posts"> Posts </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#more"> More </a>
                </label>
            </div>
        </div>

        <div class="main" id="career">
            <h1 class="head"> Career Aspirations. </h1>
            <div class="card1">
                <div class="right-box">
                    <h3> Jobs I'm Working Towards </h3>
                    <p> Certified Cisco Network Engineer </p>
                    <p> Full Stack Web Developer </p>

                    <h3> Inspirational Companies </h3>
                    <div class="media mt-3">
                        <img src="http://pngimg.com/uploads/google/google_PNG19635.png" class="mr-3" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0" style="color: #333333;" >Google</h5>
                            <p> From Youtube to Android, Google truly is an inspiration to anyone with a technological interest. <br> Firebase has been making an appearance in my backend services. </p>
                        </div>
                    </div>

                    <div class="media mt-3">
                        <img src="https://pngimg.com/uploads/tesla_logo/tesla_logo_PNG19.png" class="mr-3" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0" style="color: #333333;" >Tesla</h5>
                            <p> Elon Musk has boldly pioneered the electrical car industry with Tesla. His many business ventures <br> inspire me greatly, from PayPal to SpaceX and even The Boring Company.  </p>
                        </div>
                    </div>
                    <h3> Plans For The Future </h3>
                </div>

                <div class="left-box">
                    <h3> How I'm Working Towards My Goals </h3>
                </div>
            </div>
            <div class="btn-group btn-group-toggle mt-5" data-toggle="buttons">
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option1" autocomplete="off">
                    <a class="return" href="#home"> Return </a>
                </label>
                <label class="btn btn-secondary ml-3">
                    <input type="radio" name="options" id="option2" autocomplete="off">
                    <a class="return" href="#about"> About </a>
                </label>
                <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option2" autocomplete="off" checked>
                    <a class="return" href="#career"> Career Aspirations </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#experience"> Experience </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#contact"> Contacts </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#posts"> Posts </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#more"> More </a>
                </label>
            </div>
        </div>

        <div class="main" id="experience">
            <h1 class="head"> Experience. </h1>
            <div class="card1">
                <div>
                    <h3> Professional Experience </h3>
                    <br>
                    <div class="media mt-3" id="bottom-border">
                        <img src="http://villageroadshow.com.au/-/media/VRL-Corporate-Media-Library/Images-Header/VRL-Logo-2017.png" id="vrtp" class="mr-3 mt-2" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0" style="color: #333333;" > Village roadshow Themeparks </h5>
                            <p> Food & Beverage Attendant </p>
                            <p> 2016 - Current </p>
                        </div>
                    </div>

                    <div class="media mt-3 mb-4" id="bottom-border">
                        <img src="https://thelingoclub.com/wp-content/uploads/2017/02/logo.png" id="vrtp" class="mr-3 mt-3" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0" style="color: #333333;" > The Lingo Club </h5>
                            <p> Primary & High School Coding Instructor </p>
                            <p> 2018 - 2019 </p>
                        </div>
                    </div>

                    <h3 class="mb-3"> Personal Experience </h3>
                    <p> This website showcases the ability to use CSS frameworks (Bootstrap) & PHP Laravel. </p>
                    <p> List More Experience </p>

                </div>
            </div>
            <div class="btn-group btn-group-toggle mt-5" data-toggle="buttons">
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option1" autocomplete="off">
                    <a class="return" href="#home"> Return </a>
                </label>
                <label class="btn btn-secondary ml-3">
                    <input type="radio" name="options" id="option2" autocomplete="off">
                    <a class="return" href="#about"> About </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" autocomplete="off">
                    <a class="return" href="#career"> Career Aspirations </a>
                </label>
                <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option3" autocomplete="off" checked>
                    <a class="return" href="#experience"> Experience </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#contact"> Contacts </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#posts"> Posts </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#more"> More </a>
                </label>
            </div>
        </div>

        <div class="main" id="contact">
            <h1 class="head"> Contact Me. </h1>
            <div class="card1">
                <h3> Contact Details </h3>
                    <div class="icons mt-5">
                        <div class="icon-div mb-3">
                            <i class="fa fa-envelope icon mr-5" style="font-size: 32px;"></i> <h5> goldpatrick@hotmail.com</h5>
                        </div>

                        <div class="icon-div mt-3">
                            <i class="fa fa-linkedin icon mr-5" style="font-size: 38px;"></i>
                            <a href="https://www.linkedin.com/in/patrick-gold-420a64178/" class="mt-2 linkdin">
                                <h5> LinkdIn </h5>
                            </a>
                        </div>

                        <div class="icon-div mt-4">
                            <i class="fa fa-phone icon mr-5" style="font-size: 40px;"></i> <h5 class="mt-1"> 0448801090 </h5>
                        </div>
                    </div>
            </div>

            <div class="btn-group btn-group-toggle mt-5" data-toggle="buttons">
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option1" autocomplete="off">
                    <a class="return" href="#home"> Return </a>
                </label>
                <label class="btn btn-secondary ml-3">
                    <input type="radio" name="options" id="option2" autocomplete="off">
                    <a class="return" href="#about"> About </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" autocomplete="off">
                    <a class="return" href="#career"> Career Aspirations </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#experience"> Experience </a>
                </label>
                <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option3" autocomplete="off" checked>
                    <a class="return" href="#contact"> Contacts </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#posts"> Posts </a>
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off">
                    <a class="return" href="#more"> More </a>
                </label>
            </div>
        </div>

        <div class="main" id="posts">
            <h1> Posts </h1>
            <a href="">
                <h5> Return to Top </h5>
            </a>
        </div>

        <div class="main" id="more">
            <h1> More </h1>
            <a href="">
                <h5> Return to Top </h5>
            </a>
        </div>
    </body>
</html>
