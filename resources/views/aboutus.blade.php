@extends('master')
@section('title', 'Fortnite Tracker')
@section('content')
<section id="context" class="heading contact text-center mt-3">
  <h3>About Us</h3>
  <hr>
</section>


    <div id="rowMove" class="text-center row">
        <div id="colOne" class="col-4" style="border-right: 1px solid white;">
            <img id="hit" src="images/Hit.png" />
            <h3 id="chris">Chris Ramirez<h3>
            <p class="chris">Entry-Level full stack web developer who has experience in many languages including HTML, CSS, JS and JQuery. Graduated from Veterans-Memorial High School, worked on several other projects and am currently continuing my career as a web dev.</p>
        </div>

        <div id="colTwo" class="col-4" style="border-right: 1px solid white;">
            <img id="beerus" src="images/beerus.png" />
            <h3 id="mike">Michael Fami<h3>
                <p class="mike">Michael is a graduate of The University of Texas­Pan American in south Texas. He has a Bachelor’s Degree in International Business with a Minor in Global Security. His banking management work experience and upbringing in the manufacturing industries of Mexico have proven to be the perfect blend in preparing Michael for the recruiting industry.</p>
        </div>
        <div id="colThree" class="col-4">
            <img id="goku" src="images/goku.png" />
            <h3 id="brandon">Brandon Romo<h3>
                <p class="brandon">Brandon is a graduate of PSJA North Early College Highschool in Pharr, Texas. After a semester at South Texas College he was presented with an opportunity to  study at Valley Technical Academy. He now studies to become a Full Stack Developer.</p>
        </div>
    </div>




@endsection
