@extends('main')

@section('content')
  <div class="project">
    <div class="container">
      <div class="project__item">
        <div class="row">
          <div class="project__item-col col-md-8">
            <div class="project__item-images">
              <img src="https://placeimg.com/730/301/tech" alt="" class="img-fluid">
            </div>
            <div class="project__item-logo">
              <img src="//logo.clearbit.com/facebook.com">
            </div>
          </div>
          <div class="project__col project__col-box col-md-4">
            <a href="https://github.com" class="project__item-link">https://github.com</a>
            <div class="project__item-headline">
              <h2>Project Redesign Github</h2>
            </div>
            <div class="project__item-content">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
            <div class="project__item-btn">
              <a class="btn btn-primary" href="{{ url('/project/single')}}">Read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="project__item">
        <div class="row">
          <div class="project__item-col col-md-8">
            <div class="project__item-images">
              <img src="https://placeimg.com/730/301/tech" alt="" class="img-fluid">
            </div>
            <div class="project__item-logo">
              <img src="//logo.clearbit.com/spotify.com">
            </div>
          </div>
          <div class="project__col project__col-box col-md-4">
            <a href="https://github.com" class="project__item-link">https://github.com</a>
            <div class="project__item-headline">
              <h2>Project Redesign Github</h2>
            </div>
            <div class="project__item-content">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
            <div class="project__item-btn">
              <a class="btn btn-primary" href="{{ url('/project/single')}}">Read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="pagination">
        <nav class="pagination__nav">
          <ul class="pagination__list">
            <li class="pagination__item page-item">
              <a class="pagination__link page-link" href="#">1</a>
            </li>
            <li class="pagination__item page-item">
              <a class="pagination__link page-link" href="#">2</a>
            </li>
            <li class="pagination__item page-item">
              <a class="pagination__link page-link" href="#">3</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
@endsection
