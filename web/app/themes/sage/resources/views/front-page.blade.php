@extends('layouts.app')

@section('content')

@php(the_content())


  <div class="banner__desc container">
    <div>
      <h1></h1>
      <h2></h2>
      <p></p>
      <a href="#">Try for free</a>
    </div>
  </div>

  <section class="victory-music">
    <div class="victory-music__content">
      <h1 class="victory-music__content__title">Listen victory of music</h1>
      <div class="victory-music__content__cards">
        <div class="victory-music__content__cards__card">
          <div class="card__album"></div>
          <div class="card__desc">
            <div class="card__desc__title">
              <h2>STROMAE</h2>
              <h3>Multitude</h3>
            </div>
            <p class="card__desc__year">2021</p>
            <p class="card__desc__genre">Hip hop, Electronic</p>
          </div>
        </div>
        <div class="victory-music__content__cards__card">
        <div class="card__album"></div>
          <div class="card__desc">
            <div class="card__desc__title">
              <h2>STROMAE</h2>
              <h3>Multitude</h3>
            </div>
            <p class="card__desc__year">2021</p>
            <p class="card__desc__genre">Hip hop, Electronic</p>
          </div>
        </div>
        <div class="victory-music__content__cards__card">
        <div class="card__albul Rights Reserved.h3>
            </div>
            <p class="card__desc__year">2021</p>
            <p class="card__desc__genre">Hip hop, Electronic</p>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="download-app">
  <div class="download-app__content">
    <h1 class="download-app__content__title">Listen to your favourite music at any time</h1>
    <p class="download-app__content__desc">On mobile, computer, tablet... Choose how you listen.</p>
    <a class="download-app__content__link" href="#">download our app</a>
  </div>
  <div class="phone"></div>
</section>

<section class="gift-card">
  <div>
    <div class="cards"></div>
    <div class="gift-card__content">
      <h1 class="gift-card__content__title">Gift card for streaming or download</h1>
      <p class="gift-card__content__desc">Gift an unrivalled musical experience. Streaming gift cards available from 3 months. Store gift cards available from 20$.</p>
      <a class="gift-card__content__link" href="#">Get your gift card</a>
    </div>
  </div>
</section>

<section class="users">
  <h1 class="users__title">User testimonials</h1>
  <div class="users__content">
    <div class="users__content__user">
    <div class="user__profil"></div>
      <h2 class="user__name">Terminator</h2>
      <p class="user__quote">Cyborgs validate Mew6.</p>
    </div>
    <div class="users__content__user">
      <div class="user__profil"></div>
      <h2 class="user__name">Terminator</h2>
      <p class="user__quote">Cyborgs validate Mew6.</p>
    </div>
    <div class="users__content__user">
      <div class="user__profil"></div>
      <h2 class="user__name">Terminator</h2>
      <p class="user__quote">Cyborgs validate Mew6.</p>
    </div>
  </div>
</section>



@endsection
