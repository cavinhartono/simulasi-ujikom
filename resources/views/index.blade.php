@extends('layouts.master')

@push('title')
Homepage
@endpush

@push('style')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
@endpush

@section('contents')
<section class="homepage">
  @if (Session::get('success'))
  <div class="greating">
    <span class="message">{{ Session::get('success') }}</span>
  </div>
  @endif
  <div class="content">
    <div class="center_content">
      <div class="figure_caption">
        <div class="figure">
          <span class="line"></span>
          <p class="subtitle">New Furniture</p>
        </div>
        <h2 class="heading"><b>White Sofa</b><br />Limited Edition</h2>
        <h2 class="price"><s>IDR. 1.000.000</s> IDR. 600.000</h2>
        <div class="action">
          <a href="#" class="btn"><span>Buy</span></a>
          <a href="#" class="btn outline">
            <span class="title_icon">Cart</span>
            <span class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="auto" height="auto" viewBox="0 0 512 512">
                <circle cx="176" cy="416" r="32" />
                <circle cx="400" cy="416" r="32" />
                <path d="M456.8,120.78A23.92,23.92,0,0,0,438.24,112H133.89l-6.13-34.78A16,16,0,0,0,112,64H48a16,16,0,0,0,0,32H98.58l45.66,258.78A16,16,0,0,0,160,368H416a16,16,0,0,0,0-32H173.42l-5.64-32H409.44A24.07,24.07,0,0,0,433,284.71l28.8-144A24,24,0,0,0,456.8,120.78Z" />
              </svg>
            </span>
          </a>
        </div>
      </div>
      <div class="img">
        <img src="{{ asset('assets/img/product-2_trans.png') }}" class="photo" />
      </div>
    </div>
    <ul class="social_media">
      <li class="item">
        <a href="#" class="link">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>
          </span>
        </a>
      </li>
      <li class="item">
        <a href="#" class="link">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
              <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
            </svg>
          </span>
        </a>
      </li>
      <li class="item">
        <a href="#" class="link">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
              <path d="M256.05,32c-123.7,0-224,100.3-224,224,0,91.7,55.2,170.5,134.1,205.2-.6-15.6-.1-34.4,3.9-51.4,4.3-18.2,28.8-122.1,28.8-122.1s-7.2-14.3-7.2-35.4c0-33.2,19.2-58,43.2-58,20.4,0,30.2,15.3,30.2,33.6,0,20.5-13.1,51.1-19.8,79.5-5.6,23.8,11.9,43.1,35.4,43.1,42.4,0,71-54.5,71-119.1,0-49.1-33.1-85.8-93.2-85.8-67.9,0-110.3,50.7-110.3,107.3,0,19.5,5.8,33.3,14.8,43.9,4.1,4.9,4.7,6.9,3.2,12.5-1.1,4.1-3.5,14-4.6,18-1.5,5.7-6.1,7.7-11.2,5.6-31.3-12.8-45.9-47-45.9-85.6,0-63.6,53.7-139.9,160.1-139.9,85.5,0,141.8,61.9,141.8,128.3,0,87.9-48.9,153.5-120.9,153.5-24.2,0-46.9-13.1-54.7-27.9,0,0-13,51.6-15.8,61.6-4.7,17.3-14,34.5-22.5,48a225.13,225.13,0,0,0,63.5,9.2c123.7,0,224-100.3,224-224S379.75,32,256.05,32Z" />
            </svg>
          </span>
        </a>
      </li>
    </ul>
    <div class="visi">
      <ul class="list">
        <li class="item">Cashback</li>
        <li class="item">High Quality</li>
        <li class="item">Fast Gan</li>
      </ul>
    </div>
  </div>
</section>
<section class="about" id="about">
  <div class="content_one">
    <div class="figure">
      <span class="line"></span>
      <h2 class="heading title">About</h2>
    </div>
    <p class="text">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur
      neque debitis natus consectetur.
    </p>
  </div>
  <div class="content_two">
    <p class="text">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio fuga
      possimus ea iusto deserunt modi aspernatur ducimus soluta sequi
      dignissimos!
    </p>
  </div>
</section>
<section class="shop" id="shop">
  <div class="content_one">
    <h2 class="heading title">Recent Product</h2>
    <ul class="product">
      @forelse ($products as $product)
      <li class="item">
        <a href="/view/{{ $product->id }}" class="link">
          <div class="img">
            <img src="{{ asset('storage/' . $product->image) }}" class="photo" />
          </div>
          <div class="desc">
            <div class="title">
              <h2 class="category">{{ $product->category->name }}</h2>
              <h2 class="heading title">{{ $product->name }}</h2>
            </div>
            <p class="price">@rupiah($product->price)</p>
          </div>
        </a>
      </li>
      @empty
      <li class="item">
        <h2 class="heading">Tidak ada</h2>
      </li>
      @endforelse
    </ul>
  </div>
</section>
<section class="testimonial" id="testimonial">
  <h2 class="heading title">Testimonial</h2>
  <p class="text">
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus?
  </p>
  <div class="content_one">
    <ul class="card">
      <li class="item">
        <p class="text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Reprehenderit, consequatur.
        </p>
        <p class="text"><b>John Doe</b></p>
      </li>
      <li class="item">
        <p class="text">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </p>
        <p class="text"><b>Asep Muliyana</b></p>
      </li>
      <li class="item">
        <p class="text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatem distinctio itaque quas.
        </p>
        <p class="text"><b>Abdul Salim</b></p>
      </li>
    </ul>
  </div>
</section>
@section('footer')
<div class="contact" id="contact">
  <ul class="contact_info">
    <div class="figure">
      <span class="line"></span>
      <p class="subtitle">Contact Info</p>
    </div>
    <li class="item">
      <a href="#tel:+6282263450127" class="link">
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
            <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
          </svg>
        </span>
        <p class="text">+62 82263450127</p>
      </a>
    </li>
    <li class="item">
      <a href="mailto:funitur@gmail.com" class="link">
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
          </svg>
        </span>
        <p class="text">funitur@gmail.com</p>
      </a>
    </li>
    <li class="item">
      <a href="#" class="link">
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
            <path d="M256,32C167.67,32,96,96.51,96,176c0,128,160,304,160,304S416,304,416,176C416,96.51,344.33,32,256,32Zm0,224a64,64,0,1,1,64-64A64.07,64.07,0,0,1,256,256Z" />
          </svg>
        </span>
        <p class="text">Jl. Soeharto-Hatta, Bandung</p>
      </a>
    </li>
  </ul>
  <form action="" class="form">
    <div class="field two">
      <input type="text" name="email" placeholder="Email" />
      <input type="text" name="username" placeholder="Username" />
    </div>
    <div class="field one">
      <textarea name="message" placeholder="Message"></textarea>
    </div>
    <button class="btn">Send</button>
  </form>
</div>
@endsection
@endsection

@if (Auth::user()->isAdmin)
<div class="isAdmin">
  <button class="isAdd">Add</button>
  <button class="isRead">Read</button>
</div>

<div class="read">
  <div class="black"></div>
  <div class="form">
    <div class="header_read">
      <div class="figure">
        <span class="line"></span>
        <h4 class="heading">Product Data</h4>
      </div>
      <h4 class="subtitle">Berikut produk yang disajikan</h4>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th data-label="ID" style="width: 50px">ID</th>
          <th data-label="Category" style="width: 100px">Category</th>
          <th data-label="Name" style="width: 100px">Name</th>
          <th data-label="Price" style="width: 100px">Price</th>
          <th data-label="Desc" style="text-align: start; width: 250px">
            Desc
          </th>
          <th data-label="Action" style="width: 150px">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($products as $product)
        <tr>
          <td style="text-align: center">{{ $product->id }}</td>
          <td style="text-transform: capitalize;">{{ $product->category->name }}</td>
          <td style="text-transform: capitalize;">{{ $product->name }}</td>
          <td style="text-align: center">{{ $product->price }}</td>
          <td style="
                  width: 250px;
                  display: block;
                  white-space: nowrap;
                  overflow: hidden;
                  text-overflow: ellipsis;
                ">
            {{ $product->desc }}
          </td>
          <td style="text-align: center">
            <a href="/edit/{{ $product->id }}" class="isEdit"><span class="icon">Edit</span></a>
            <a href="#" class="isDelete"><span class="icon">Delete</span></a>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="6" style="text-align: center;">No Data</td>
        </tr>
        @endforelse
      </tbody>
    </table>
    @if($products->hasPages())
    <div class="card_footer">
      {{ $products->links() }}
    </div>
    @endif
    <div class="action">
      <button class="btn" id="close">Close</button>
    </div>
  </div>
</div>

<div class="create">
  <div class="black"></div>
  <div class="form">
    <div class="header_read">
      <div class="figure">
        <span class="line"></span>
        <p class="heading">Create Product</p>
      </div>
      <h4 class="subtitle">Menambahkan produk-produk terbaru</h4>
    </div>
    <form action="{{ route('products.store') }}" method="POST" class="validation" enctype="multipart/form-data">
      @csrf
      <div class="form_two">
        <input type="text" placeholder="Name" name="name" />
        <input type="number" placeholder="Price" name="price" />
      </div>
      <div class="form_one">
        <textarea name="desc" placeholder="Description"></textarea>
      </div>
      <div class="form_two">
        <input type="number" name="qty" placeholder="QTY" />
        <select name="category_id">
          @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form_one">
        <input type="file" name="image" id="image" />
      </div>
      <div class="action">
        <button name="submit" class="btn">Add</button>
        <div class="btn" id="close">Close</div>
      </div>
    </form>
  </div>
</div>

<div class="update">
  <div class="black"></div>
  <div class="form">
    <div class="header_read">
      <div class="figure">
        <span class="line"></span>
        <p class="heading">Edit Product</p>
      </div>
      <h4 class="subtitle">Menyunting sebuah data</h4>
    </div>
    <form action="{{ route('products.update') }}" method="POST" class="validation" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="form_two">
        <input type="text" placeholder="Name" name="name" value="{{ $product->name }}" />
        <input type="number" placeholder="Price" name="price" value="{{ $product->price }}" />
      </div>
      <div class="form_one">
        <textarea name="desc" placeholder="Description">{{ $product->desc }}</textarea>
      </div>
      <div class="form_two">
        <input type="number" name="qty" placeholder="QTY" />
        <select name="category_id">
          @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form_one">
        <input type="file" name="image" id="image" />
      </div>
      <div class="action">
        <button name="submit" class="btn">Add</button>
        <div class="btn" id="close">Close</div>
      </div>
    </form>
  </div>
</div>
@endif