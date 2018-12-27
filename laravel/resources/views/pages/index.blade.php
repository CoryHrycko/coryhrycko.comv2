@extends('Layouts.app')

@section('content')


<div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    {{$title}}
                </div>
                <video  src="coryhrycko.com/clocks.mp4"></video>

                <nav class="links" id="navBar">
                    @if(count($pages) > 0)
                            @foreach ($pages as $page)
                                    <a href="/{{$page}}">{{$page}}</a>
                            @endforeach
                    @endif
                </nav>
            </div>
        </div>
<div class="position-ref full-height">
    <div class="content2 container">
        <div class= " about">
            <div class= "Skills">
                <div class="skillsBackEnd flex-center-right links2">
                            {{-- Experimenting with Carosal --}}

<div class="divC">

		<input class="inputC w-100"checked id="one" name="multiples" type="radio" value="1">
        <label class="labelC" for="one">1</label>

		<input class="inputC w-100" id="two" name="multiples" type="radio" value="2">
        <label class="labelC" for="two">2</label>

        <input class="inputC w-100" id="three" name="multiples" type="radio" value="3">
        <label class="labelC"for="three">3</label>

        <input class="inputC w-100" id="four" name="multiples" type="radio" value="4">
        <label  class="labelC"for="four">4</label>

        <input class="inputC w-100" id="five" name="multiples" type="radio" value="5">
        <label class="labelC" for="five">5</label>

        <input class="inputC w-100" id="six" name="multiples" type="radio" value="6">
        <label class="labelC" for="six">6</label>

        <input class="inputC w-100" id="seven" name="multiples" type="radio" value="7">
        <label class="labelC" for="seven">7</label>

        <input class="inputC w-100" id="eight" name="multiples" type="radio" value="8">
        <label class="labelC" for="eight">8</label>

		<div class="containerC">
			<div class="carouselC">
                <h1 class="d-block w-100 flex-center"> PHP-Laravel/Laravel Routes</h1>
				<h1 class="d-block w-100 flex-center"> Java</h1>
				<h1 class="d-block w-100 flex-center"> API's, HTTP Methods</h1>
				<h1 class="d-block w-100 flex-center"> SQL/MYSQL/TSQL/POSTGREs</h1>
				<h1 class="d-block w-100 flex-center"> NODE.JS/NODE.JS Routes</h1>
				<h1 class="d-block w-100 flex-center"> Version Controls</h1>
				<h1 class="d-block w-100 flex-center"> Python-Flask</h1>
				<h1 class="d-block w-100 flex-center"> Advanced Statistics</h1>
			</div>
		</div>
        {{-- End of Caro --}}
         {{-- Start front end caro --}}
        <div class="divC">

		<input class="inputC w-100"checked id="nine" name="multiples" type="radio" value="1">
        <label class="labelC" for="nine">Front End</label>

		<input class="inputC w-100" id="ten" name="multiples" type="radio" value="2">
        <label class="labelC" for="ten">Front End</label>

        <input class="inputC w-100" id="eleven" name="multiples" type="radio" value="3">
        <label class="labelC"for="eleven">Front End</label>

        <input class="inputC w-100" id="twelve" name="multiples" type="radio" value="4">
        <label  class="labelC"for="twelve">Front End</label>

        <input class="inputC w-100" id="thirteen" name="multiples" type="radio" value="5">
        <label class="labelC" for="thirteen">Front End</label>

        <input class="inputC w-100" id="fourteen" name="multiples" type="radio" value="6">
        <label class="labelC" for="fourteen">Front End</label>

        <input class="inputC w-100" id="fifteen" name="multiples" type="radio" value="7">
        <label class="labelC" for="fifteen">Front End</label>

        <input class="inputC w-100" id="sixteen" name="multiples" type="radio" value="8">
        <label class="labelC" for="sixteen">Front End</label>

		<div class="containerC">
			<div class="carouselC">
                <h1 class="d-block w-100 flex-center"> Html5-Ham/XML</h1>
				<h1 class="d-block w-100 flex-center"> Css3-Sass/Scss/Bootstrap</h1>
				<h1 class="d-block w-100 flex-center"> Webpack/Gulp</h1>
				<h1 class="d-block w-100 flex-center"> JavaScript</h1>
				<h1 class="d-block w-100 flex-center"> React-Redux/Vue/jQuery</h1>
				<h1 class="d-block w-100 flex-center"> Version Controls</h1>
				<h1 class="d-block w-100 flex-center"> JSON/AJAX</h1>
				<h1 class="d-block w-100 flex-center"> Blade/WordPress</h1>
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
<div class="flex-center position-ref flex full-height ">
    <div class="content3 container">
        <div class="projects">
            <div class="frontEnd links">
                    @if(count($pages) > 0)
                    @foreach ($pages as $page)
                            <a href="/{{$page}}">{{$page}}</a>
                    @endforeach
            @endif
            </div>
            {{-- Experimenting with Carosal --}}
            <div class="backEnd links2">
                    @if(count($pages) > 0)
                    @foreach ($pages as $page)
                            <a href="/{{$page}}">{{$page}}</a>
                    @endforeach
            @endif
            </div>
            {{-- End of Caro --}}
            <div class="multiMedia links2">

            </div>
        </div>
    </div>
</div>
{{--  --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://source.unsplash.com/user/erondu/800x400" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/user/erondu/800x400" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/user/erondu/800x400" alt="Third slide">
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
<div class="flex-center position-ref full-height">
    <div class="content4 container">
        <form>
            <input type="text" name="firstName" />
            <input type="text" name="lastName"/>
            <input type="email" name="email"/>
        </form>
    </div>
</div>

@endsection

