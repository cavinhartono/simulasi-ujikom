@extends('layouts.master')

@push('title')
P-{{ $product->id }}
@endpush

@push('style')
<link rel="stylesheet" href="{{ asset('assets/css/view.css') }}">
@endpush

@section('contents')
<section class="view">
  <div class="content">
    <div class="center_content">
      <div class="img">
        <img src="{{ asset('storage/' . $product->image) }}" class="photo" />
      </div>
      <div class="figure_caption">
        <div class="breakside">
          <a href="#">shop</a>
          <span>\</span>
          <a href="#" style="text-transform: lowercase;">{{ $product->category->name }}</a>
        </div>
        <div class="product">
          <div class="left_side">
            <h2 class="heading">{{ $product->name }}</h2>
            <p class="price">@rupiah($product->price)</p>
          </div>
          <div class="right_side">
            <p class="sku">SKU: 494321</p>
            <div class="rating">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" viewBox="0 0 512 512" fill="currentColor">
                  <path d="M496,203.3H312.36L256,32,199.64,203.3H16L166.21,308.7,107.71,480,256,373.84,404.29,480,345.68,308.7Z" />
                </svg>
              </span>
              <span class="subtitle">4,60 (14)</span>
            </div>
          </div>
        </div>
        <p class="text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
          non velit nulla.
        </p>
        <form action="" class="action">
          <input type="number" />
          <button class="btn">Cart</button>
        </form>
        <p class="category">
          category:
          <a href="#" class="link">{{ $product->category->name }}</a>
        </p>
      </div>
    </div>
  </div>
</section>
<section class="info">
  <div class="review">
    <div class="figure">
      <span class="line"></span>
      <p class="subtitle">Reviews</p>
    </div>
    <ul class="card">
      <li class="item">
        <img src="assets/img/download.jpg" class="photo" />
        <div class="review_info">
          <h2 class="heading">Asep van Muliyana</h2>
          <p class="text">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Sapiente itaque consequatur officia.
          </p>
        </div>
        <div class="rating">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" viewBox="0 0 512 512" fill="currentColor">
              <path d="M496,203.3H312.36L256,32,199.64,203.3H16L166.21,308.7,107.71,480,256,373.84,404.29,480,345.68,308.7Z" />
            </svg>
          </span>
          <span class="subtitle">4,5</span>
        </div>
      </li>
    </ul>
  </div>
  <div class="product_desc">
    <div class="description">
      <div class="figure">
        <span class="line"></span>
        <p class="subtitle">Description</p>
      </div>
      <p class="text">
        {{ $product->desc }}
      </p>
    </div>
    <div class="bahan">
      <div class="figure">
        <span class="line"></span>
        <p class="subtitle">Bahan</p>
      </div>
    </div>
  </div>
</section>
@section('footer')
<footer class="footer">
  <div class="contact" id="contact">
    <form action="" class="form">
      <div class="field two">
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" viewBox="0 0 512 512" fill="currentColor">
            <path d="M496,203.3H312.36L256,32,199.64,203.3H16L166.21,308.7,107.71,480,256,373.84,404.29,480,345.68,308.7Z" />
          </svg>
        </span>
        <input type="number" max="5" name="rating" placeholder="Rating" />
      </div>
      <div class="field one">
        <textarea name="message" placeholder="Message"></textarea>
      </div>
      <button class="btn">Send</button>
    </form>
  </div>
  <div class="footer_text">
    <p class="text small">© Furnitur | All Right Received</p>
  </div>
</footer>
@endsection
@endsection