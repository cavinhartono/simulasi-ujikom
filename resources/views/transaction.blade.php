@extends('layouts.master')

@push('title')
Carts
@endpush

@push('style')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
@endpush

@section('contents')
<section class="transaction">
  <div class="t_content">
    <h2 class="title">Carts</h2>
    <ul class="t_main">
      @forelse ($carts as $cart)
      <li class="t_list">
        <div class="img">
          <img src="{{ asset('storage/' . $cart->product->image) }}" class="photo">
        </div>
        <div class="t_product">
          <div class="t_name">
            <h2 class="title" style="text-transform: capitalize;">$cart->product->name</h2>
            <h2 class="subtitle">@rupiah($cart->product->price)</h2>
          </div>
          <form action="/cart/{{ $cart->id }}/delete" class="t_action">
            <button class="btn primary">Close</button>
          </form>
        </div>
      </li>
      @empty
      <li class="t_list">
        <div class="img">
          <span src="" class="photo"></span>
        </div>
        <div class="t_product">
          <div class="t_name">
            <h2 class="title">John Doe</h2>
            <h2 class="subtitle">@rupiah(45000)</h2>
          </div>
          <form action="/cart/{ }/delete" class="t_action">
            <button class="btn primary" disabled>Close</button>
          </form>
        </div>
      </li>
      @endforelse
    </ul>
  </div>
</section>
@endsection