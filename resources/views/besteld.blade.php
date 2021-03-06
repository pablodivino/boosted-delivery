<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
  Boosted Delivery | Besteld
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
<div class="besteld">
    <h1 class="besteld__title">Bedankt voor het kiezen van het weekelijkse Boosted PowerCrate abonnement!</h1>
    <p class="besteld__subtitle">Uw eerste bestelling zal geleverd worden op: <span class="besteld__subtitle__date">22 Juni 2020</span></p>

    <a href="{{ url('/profiel') }}" class="besteld__button"><div class="besteld__button__context">Uw abonnement bekijken?</div></a>
</div>
@endsection