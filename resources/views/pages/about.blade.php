@extends('main')

@section('content')

  <div class="page">
    <div class="page__banner">
      <div class="page__banner-bg" style="background:linear-gradient(0deg, rgba(59,89,152,0.7), rgba(109, 132, 180,0.60)), url('http://via.placeholder.com/1500x750') no-repeat center center;">
        <div class="page__banner-subtitle">
          <p>Wer bin ich?</p>
        </div>
        <h1 class="page__banner-title">David Herzog</h1>
      </div>
    </div>
  </div>
  <div class="timeline">
    <div class="timeline__container container">
      <div class="timeline__box">
        <div class="timeline__box-head">
  				<div class="timeline__box-date">
  					<time>Jul 2014 - Sep 2016</time>
  				</div>
          <div class="timeline__box-headline">
            <h3>Builderama</h3>
            <h4>CEO & Founder</h4>
          </div>
			  </div>
        <div class="timeline__box-body">
          <p>
            <strong>Development</strong>
            <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </p>
          <p>
            <strong>Project Management</strong>
            <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </p>
          <div class="timeline__box-logo"></div>
        </div>
      </div>
    </div>
  </div>




@endsection
