@extends('main')

@section('content')


<div class="contact">
  <div class="contact__container container">
    <div class="contact__form">
      <form method="post" action="">
        <label for="firstname">Your first name *</label>
        <input type="text" id="firstname" name="firstname" value="" required>
        <label for="lastname">Your last name *</label>
        <input type="text" id="lastname" name="lastname" value="" required>
        <label for="email">Your email address *</label>
        <input type="email" id="email" name="email" value="" required>
        <label for="massage">Tell me more*</label>
        <textarea name="massage" rows="8" cols="80"></textarea>
        <button name="submit" type="submit" id="submit" class="submit">Send your message</button>
      </form>
    </div>
  </div>
</div>
@endsection
