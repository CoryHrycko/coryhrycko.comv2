@extends('Layouts.app')

@section('content')


<div class="flex-center position-ref full-height" id="#home">

            <div class="content">
                <div class="title m-b-md specialSig">
                    {{$title}}
                </div>
                {{-- <video  src="coryhrycko.com/clocks.mp4"></video> --}}
    
<br>
<br>
<br>
<br>
<br>
<br>
                <nav class="links" id="navBar">
                    @if(count($pages) > 0)
                            {{-- @foreach ($pages as $page) --}}
                                    <a href="#">{{$pages[0]}}</a>
                                    <a href="#projects">{{$pages[1]}}</a>
                                    <a href="https://anchor.fm/corys-corner">{{$pages[2]}}</a>
                                    <a href="https://www.instagram.com/cory_hrycko/">{{$pages[3]}}</a>
                                    <a href="https://www.linkedin.com/in/cory-hrycko/">{{$pages[4]}}</a>
                                    <a href="https://github.com/CoryHrycko/">{{$pages[5]}}</a>
                                    <a href="https://twitter.com/CoryHrycko">{{$pages[6]}}</a>
                                    <a href="#hireMe">Hire me?</a>
                            {{-- @endforeach --}}
                    @endif
                </nav>
            </div>
        </div>
<div class="position-ref full-height">
    <div class="content2 container">
        <div class= " about">
            <div class= "Skills">
                <div class="skillsBackEnd flex-center-right links2">
{{--* Experimenting with Carosal --}}

{{--*  --}}



<div class="container text-left specialSig " id="#BackSkills">Back End</div> 
<div class="divC">

		<input class="inputC w-100"checked id="one" name="multiples" type="radio" value="1">
        <label class="labelC" for="one">L</label>

		<input class="inputC w-100" id="two" name="multiples" type="radio" value="2">
        <label class="labelC" for="two">PHP</label>

        <input class="inputC w-100" id="three" name="multiples" type="radio" value="3">
        <label class="labelC"for="three">Stats</label>

        <input class="inputC w-100" id="four" name="multiples" type="radio" value="4">
        <label  class="labelC"for="four">SQL</label>

        <input class="inputC w-100" id="five" name="multiples" type="radio" value="5">
        <label class="labelC" for="five">Node</label>

        <input class="inputC w-100" id="six" name="multiples" type="radio" value="6">
        <label class="labelC" for="six">git</label>

        <input class="inputC w-100" id="seven" name="multiples" type="radio" value="7">
        <label class="labelC" for="seven">Flask</label>

        <input class="inputC w-100" id="eight" name="multiples" type="radio" value="8">
        <label class="labelC" for="eight">Java</label>

		<div class="containerC">
			<div class="carouselC">
                <img src="https://cdn4.iconfinder.com/data/icons/logos-3/256/laravel-512.png" />
                <img src="https://7php.com/pimg/2014/01/elephpant_281_193.png" />
                <img src="https://www.addonflare.com/styles/addons/icons/ajax-advanced-forum-stats.png" />
                <img src="https://cdn0.iconfinder.com/data/icons/superuser-extension-light/512/675277-data_database_sql_query-512.png" />
                <img src="https://cdn2.iconfinder.com/data/icons/nodejs-1/512/nodejs-512.png" />
                <img src="https://res.cloudinary.com/teepublic/image/private/s--ppdOl2Ji--/t_Preview/b_rgb:ffffff,c_limit,f_jpg,h_630,q_90,w_630/v1503907752/production/designs/1855865_1.jpg" />
                <img src="https://s3.amazonaws.com/com.twilio.prod.twilio-docs/images/flask-oauth.width-808.png" />
                <img src="https://cdn3.iconfinder.com/data/icons/developer-files-2-add-on/48/v-35-512.png" />
			</div>
        </div>
    </div>
    
<br>
<br>
<br>

        {{-- End of Caro --}}
         {{-- Start front end caro --}}
         <div class="container text-center specialSig " id="#FrontSkills">Front End</div> 
        <div class="divC">
		<input class="inputC w-100"checked id="nine" name="multiples" type="radio" value="1">
        <label class="labelC" for="nine">Base</label>

		<input class="inputC w-100" id="ten" name="multiples" type="radio" value="2">
        <label class="labelC" for="ten">Sass</label>

        <input class="inputC w-100" id="eleven" name="multiples" type="radio" value="3">
        <label class="labelC"for="eleven">WP</label>

        <input class="inputC w-100" id="twelve" name="multiples" type="radio" value="4">
        <label  class="labelC"for="twelve">JS</label>

        <input class="inputC w-100" id="thirteen" name="multiples" type="radio" value="5">
        <label class="labelC" for="thirteen">RV</label>

        <input class="inputC w-100" id="fourteen" name="multiples" type="radio" value="6">
        <label class="labelC" for="fourteen">WP</label>

        <input class="inputC w-100" id="fifteen" name="multiples" type="radio" value="7">
        <label class="labelC" for="fifteen">Aj</label>

        <input class="inputC w-100" id="sixteen" name="multiples" type="radio" value="8">
        <label class="labelC" for="sixteen">JQ</label>
		<div class="containerC">
            <div class="carouselC">
                    <img src="https://www.viewlike.us/wp-content/uploads/2013/04/html5_css3.png" />
                    <img src="https://sass-lang.com/assets/img/logos/logo-b6e1ef6e.svg" />
                    <img src="https://cdn-eliostruyf.azureedge.net/wp-content/uploads/2016/10/101116_0811_Gettingupto1.png" />
                    <img src="https://raw.githubusercontent.com/mailtoharshit/awesome-salesforce/master/src/JavaScript.png" />
                    <img src="https://res.cloudinary.com/dukp6c7f7/image/upload/f_auto,fl_lossy,q_auto/s3-ghost/2018/01/reactvue-1515897405981.png" />
                    <img src="https://cdn3.iconfinder.com/data/icons/flat-icons-web/40/WordPress-512.png" />
                    <img src="https://cdn2.iconfinder.com/data/icons/minimal-flat-arrows/50/reload3-512.png" />
                    <img src="https://cdn4.iconfinder.com/data/icons/scripting-and-programming-languages/512/JQuery_logo-512.png" />
                </div>
		</div>
	</div>

	</div>

                 {{-- End of Caro --}}

            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container text-right specialSig " id="Projects">Projects</div> 
{{-- hidden tag to try to make this appear as well as the rest --}}
<div class="flex-center position-ref flex full-height">
    <div class="content5 container">
        <div class="projects">
            <b>
            <div class="project1 col">
                <a class="links2" href="https://github.com/CoryHrycko/JavaScriptTetris"><h1>JavaScript Tetris</h1></a>
                <p>This web application uses vanilla Javascript with no extra libraries to recreate a classic. It manipulates the DOM to paint the blocks onto a canvas element. These blocks are represented as individual objects in a multi layered array. Self identifying if the blocks do illegal moves and try to leave the canvas or move into other blocks. </p>
            </div>
            <div class="project2 col">
                <a class="links2" href="https://coryhrycko.github.io/ShoppingCarteCommerce/"><h1 class="individualProjectTitles">eCommerce/Cart example</h1></a>
                <p> https://coryhrycko.github.io/ShoppingCarteCommerce/ <br>This project uses many different aspects of React to update a shopping cart in real time from items that the user chooses. Uses redux to manage state. Easily able to place in php for validation and fullfillment. Built this freehand.Besides for the framwork involved.</p>
            </div>
            <div class="project3 col">
                <a class="links2" href="https://coryhrycko.github.io/ShoppingCarteCommerce/"><h1>Virtual Java Bank Account App </h1></a>
                <p>This project is a command line Bank account app.It uses encapsulation and other OOP techniques, this is going to be turned into an API, that focuses on Database rendering, readers and buffers, which a front end website will be able to grab and request information about the bank accounts it is going to be a superagent api interfacer as well. The back end uses various constructors in order to achieve this outcome. The front end is going to show off either Vue or React which ever seems to be better with UI/UX.</p>
            </div>
            <div class="project4 col">     
                <a class="links2" href="https://www.coryhrycko.com/coffee"><h1 class="individualProjectTitles">Coffee Shop Restaurant</h1></a>      
                <p>https://www.coryhrycko.com/coffee. This project uses Laravel with asyncronis calls to load in chucks so that it can be loaded in under 3 seconds on a 80kbs bandwidth line. It is an exercise in optimization and speed. Uses every trick in the book from Service workers to loading in only the parts of the page that are valuable at that time.</p>
            </div>
            <div class="project4 col">     
                <a class="links2" href="https://github.com/CoryHrycko/FirstRestPythonApi"><h1 class="individualProjectTitles">Python API</h1></a>      
                <p>https://github.com/CoryHrycko/FirstRestPythonApi This uses HTTP methods to return a hello world function for first introductions to api creation.</p>
            </div>

            <div class="project6 col">    
                <a class="links2" href="https://github.com/CoryHrycko/CountDownTimmer"><h1 class="individualProjectTitles">Count Down</h1></a>       
                <p>https://github.com/CoryHrycko/CountDownTimmer  https://coryhrycko.github.io/CountDownTimmer/ Count down time to halloween using css and math floor javascript. </p>
            </div>
            <div class="project7 col">      
                <a class="links2" href="https://github.com/CoryHrycko/profilewebsite"><h1 class="individualProjectTitles">Old Profile Website 1.0</h1></a>     
                <p>https://github.com/CoryHrycko/profilewebsite. First attempt at a react website in which the state is manged by redux and used scss for the first time to try to align items.  THIS IS AN OLD FIRST ATTEMPT AT THE PROFILE WEBSITE. AFTER LEARNING MORE I HAD MADE A BETTER PROFILE WEBSITE PLEASE VISIT WWW.CORYHRYCKO.COM TO SEE. Profile-Website https://coryhrycko.github.io/profilewebsite/ </p>
            </div></b>
        </div>
    </div>
</div>
{{--  --}}
<br>
<br>
<br>
<br>
<div class="container text-right specialSig " id="#Clients">Client Websites</div> 
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('svg/chapmans/1.png')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('svg/chapmans/2.png')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('svg/chapmans/3.png')}}" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('svg/chapmans/4.png')}}" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('svg/chapmans/5.png')}}" alt="Fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('svg/AllenArts/1.png')}}" alt="Sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('svg/AllenArts/2.png')}}" alt="Seventh slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('svg/coffeehouse.temp/1.png')}}" alt="Eigth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('svg/coffeehouse.temp/2.png')}}" alt="Nineth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('svg/coffeehouse.temp/3.png')}}" alt="Tenth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('svg/coffeehouse.temp/4.png')}}" alt="Eleventh slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
{{--  --}}

{{--  --}}
<div class="flex-center position-ref full-height" id="hireMe">
    <div class="content4 container flex-center">
        <div class="container text-center specialSig ">Come Talk</div>
        <br><br>
        <form>
            <div class="span">
            <input type="text" name="firstName" placeholder="First Name"/>
            <input type="text" name="lastName" placeholder="Last Name"/>
            <input type="email" name="email" placeholder="Enter your email"/>
            </div>
            <br>
            <textarea type="message" class="container flex-center" placeholder="Enter your message"></textarea>
        </form>
    </div>
</div>

@endsection

