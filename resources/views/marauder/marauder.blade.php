@include('marauder.header')

<?php // https://speckyboy.com/css-javascript-snippets-harry-potter/ ?>
<div class="main-content">
  <div class="map-base" onclick="toggleMap()">
    <div class="footsteps footsteps-1">
      <div class="footstep left"></div>
      <div class="footstep right"></div>
      <div class="scroll-name"> 
        <p>Severus Snape</p>
      </div>
    </div>
    <div class="footsteps footsteps-2">
      <div class="footstep left"></div>
      <div class="footstep right"></div>
      <div class="scroll-name"> 
        <p>Harry Potter</p>
      </div>
    </div>
    <div class="map-flap flap--1">
      <div class="map-flap__front"></div>
      <div class="map-flap__back"></div>
    </div>
    <div class="map-flap flap--2">
      <div class="map-flap__front"></div>
      <div class="map-flap__back"></div>
    </div>
    <div class="map-side side-1">
      <div class="front" style="--image: url('https://meowlivia.s3.us-east-2.amazonaws.com/codepen/map/8.png')"></div>
      <div class="back"></div>
    </div>
    <div class="map-side side-2">
      <div class="front" style="--image: url('https://meowlivia.s3.us-east-2.amazonaws.com/codepen/map/18.png')"></div>
      <div class="back"></div>
    </div>
    <div class="map-side side-3">
      <div class="front" style="--image: url('https://meowlivia.s3.us-east-2.amazonaws.com/codepen/map/7.png')"></div>
      <div class="back"></div>
    </div>
    <div class="map-side side-4">
      <div class="front" style="--image: url('https://meowlivia.s3.us-east-2.amazonaws.com/codepen/map/10.png')"></div>
    </div>
    <div class="map-side side-5">
      <div class="front" style="--image: url('https://meowlivia.s3.us-east-2.amazonaws.com/codepen/map/6.png')"></div>
      <div class="back"></div>
    </div>
    <div class="map-side side-6">
      <div class="front" style="--image: url('https://meowlivia.s3.us-east-2.amazonaws.com/codepen/map/11.png')"></div>
      <div class="back"></div>
    </div>
  </div>
</div>
@include('footer')