@extends('master')
@section('title', 'Fortnite Tracker')
@section('content')
<section id="context" class="heading contact text-center mt-3">
  <h3>Contact Us</h3>
  <hr>
</section>


<section class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="form-area">
        <form id="text" role="form">
          <br style="clear:both">
          <h5 style="margin-bottom: 10px;">Please leave us a message</h5>
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Gamer Tag" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>

          <div class="form-group">
            <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
          </div>
          <button type="button" id="submit" name="submit" class="btn btn-outline-dark pull-right" style="color:white;">Submit</button>
        </form>
      </div>
    </div>
    <div id="detailsbg" class="col-md-4">
      <div class="contact-details">
        <br style="clear:both">
        <h5 style="margin-bottom: 10px; color: white;"><b>Top Weapons</b></h5>
        <hr>
          <img id="scar" src="https://i.ytimg.com/vi/SZtI23XEhSg/maxresdefault.jpg" />
        <br>
          <img id="sniper" src="https://i.ytimg.com/vi/XG6CXpFhfv4/maxresdefault.jpg" />
      </div>
      <br>
    </div>
  </div>
</section>
@endsection
