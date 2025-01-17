
@extends('layouts.master_home')
@section('about_content')
<div class="container">
   <div class="row">
     <div class="col-xs-12">

        <div class="card">
          <div class="card-block">
            <h2>About me</h2>
            <div class="row">
              <div class="col-md-4">
                <p><img src="{{asset('frontend/assets/images/img-01.jpg')}}" class="img-responsive" alt=""></p>
              </div>
              <div class="col-md-8">

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <h2>Projects</h2>
            <div class="row">
              <div class="col-md-4">
                <img src="{{asset('frontend/assets/images/img-02.jpg')}}" class="img-responsive" alt="">
                <h3 class="h5">Amelia App</h3>
                <p>June 2017</p>
              </div>
              <div class="col-md-4">
                <img src="{{asset('frontend/assets/images/img-03.jpg')}}" class="img-responsive" alt="">
                <h3 class="h5">Portland</h3>
                <p>March 2017</p>
              </div>
              <div class="col-md-4">
                <img src="{{asset('frontend/assets/images/img-04.jpg')}}" class="img-responsive" alt="">
                <h3 class="h5">Denz for Nilon</h3>
                <p>Jan 2017</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <h2>Work</h2>
            <div class="work-experience">
              <small class="date">2017-2015</small>
              <h3 class="h5 date-title">Web developer - <a href="http://en.orson.io" title="Create professionnal website">Orson.io</a></h3>
              

              <p>Leo vel orci porta non pulvinar neque laoreet suspendisse interdum. Vitae ultricies leo integer malesuada nunc. Imperdiet proin fermentum leo vel orci porta non pulvinar neque. Fermentum leo vel orci porta non. Posuere sollicitudin aliquam ultrices sagittis. Aliquam faucibus purus in massa tempor nec.</p>
            </div>

            <div class="work-experience">
              <small class="date">2017-2015</small>
              <h3 class="h5 date-title">Web developer - <a href="http://mashup-template.com" title="">Mashup Template</a></h3>
              
              <p>Fermentum leo vel orci porta non. Posuere sollicitudin aliquam ultrices sagittis. Aliquam faucibus purus in massa tempor nec.</p>
            </div>
          </div>
        </div>
        

        <div class="card">
          <div class="card-block">
            <h2>Education</h2>
            <div class="row">
              <div class="col-md-4">
                <div class="education-experience">
                  <small class="date">2017-2015</small>
                  <h3 class="h5 date-title">Design Master</h3>
                  <p>Chicago University</p>
                </div>
                
              </div>
              <div class="col-md-4">
                <div class="education-experience">
                  <small class="date">2015-2012</small>
                  <h3 class="h5 date-title">Metrics Degree</h3>
                  <p>Ecole 87</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="education-experience">
                  <small class="date">2012-2011</small>
                  <h3 class="h5 date-title">Motion Design Course</h3>
                  <p>Pascal’s Lee Studio</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card">
          <div class="card-block">
            <h2>Language</h2>
            <div class="row">
              <div class="col-md-4">
                <div class="language-experience">
                  <h3 class="h5">English  <small>Bilingual</small></h3>
                </div>
              </div>
              <div class="col-md-4">
                <div class="language-experience">
                  <h3 class="h5">French  <small>Fluent</small></h3>
                </div>
              </div>
              <div class="col-md-4">
                <div class="language-experience">
                  <h3 class="h5">Russian  <small>Beginner</small></h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <h2>Projects</h2>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="{{asset('frontend/assets/images/img-05.jpg')}}" class="img-responsive" alt="...">
                <div class="carousel-caption">
                  <h3 class="h5">Jules for Bastion</h3>
                  <p>2017</p>
                </div>
              </div>
              <div class="item">
                <img src="{{asset('frontend/assets/images/img-06.jpg')}}" class="img-responsive" alt="...">
                <div class="carousel-caption">
                  <h3 class="h5">Jules for Bastion</h3>
                  <p>2017</p>
                </div>
              </div>

              <div class="item">
                <img src="{{asset('frontend/assets/images/img-08.jpg')}}" class="img-responsive" alt="...">
                <div class="carousel-caption">
                  <h3 class="h5">Jules for Bastion</h3>
                  <p>2017</p>
                </div>
              </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

          </div>
          </div>
        </div>
        
        <div class="card">
          <div class="card-block">
            <h2>Social Network</h2>
            <div class="row">
              <div class="col-md-3">
                <p class="social-buttons"><a href="https://twitter.com/" title=""><span class="social-round-icon fa-icon"><i class="fa fa-twitter"></i></span>@David_Folley</a></p>
              </div>
              <div class="col-md-3">
                <p class="social-buttons"><a href="https://www.linkedin.com/" title=""><span class="social-round-icon fa-icon"><i class="fa fa-linkedin"></i></span>David Folley</a></p>
              </div>
              <div class="col-md-3">
                <p class="social-buttons"><a href="https://dribbble.com/" title=""><span class="social-round-icon fa-icon"><i class="fa fa-dribbble"></i></span>David Folley</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <h2>Contact</h2>
            <form action="" class="reveal-content">
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="5" placeholder="Enter your message"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class=" btn btn-primary">Send message</button>
              </div> 
            </form>
          </div>
        </div>
       
     </div>
   </div>
 </div>
 @endsection