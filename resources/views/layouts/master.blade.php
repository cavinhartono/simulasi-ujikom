<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @stack('style')
  <title>@stack('title') | Furnitur</title>
</head>

<body>
  <section class="container">
    <header class="header">
      <div class="header_logo">
        <span class="logo">
          <svg width="auto" height="auto" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M22 9H2V15H22V9Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 9C1.25 8.58579 1.58579 8.25 2 8.25H22C22.4142 8.25 22.75 8.58579 22.75 9V15C22.75 15.4142 22.4142 15.75 22 15.75H2C1.58579 15.75 1.25 15.4142 1.25 15V9ZM2.75 9.75V14.25H21.25V9.75H2.75Z" />
            <path d="M22 15H2V21H22V15Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 15C1.25 14.5858 1.58579 14.25 2 14.25H22C22.4142 14.25 22.75 14.5858 22.75 15V21C22.75 21.4142 22.4142 21.75 22 21.75H2C1.58579 21.75 1.25 21.4142 1.25 21V15ZM2.75 15.75V20.25H21.25V15.75H2.75Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.25 12C10.25 11.5858 10.5858 11.25 11 11.25H13C13.4142 11.25 13.75 11.5858 13.75 12C13.75 12.4142 13.4142 12.75 13 12.75H11C10.5858 12.75 10.25 12.4142 10.25 12Z" fill="#fafafa" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.25 18C10.25 17.5858 10.5858 17.25 11 17.25H13C13.4142 17.25 13.75 17.5858 13.75 18C13.75 18.4142 13.4142 18.75 13 18.75H11C10.5858 18.75 10.25 18.4142 10.25 18Z" fill="#fafafa" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 20.25C4.41421 20.25 4.75 20.5858 4.75 21V23C4.75 23.4142 4.41421 23.75 4 23.75C3.58579 23.75 3.25 23.4142 3.25 23V21C3.25 20.5858 3.58579 20.25 4 20.25Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20 20.25C20.4142 20.25 20.75 20.5858 20.75 21V23C20.75 23.4142 20.4142 23.75 20 23.75C19.5858 23.75 19.25 23.4142 19.25 23V21C19.25 20.5858 19.5858 20.25 20 20.25Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4.25C12.4142 4.25 12.75 4.58579 12.75 5V9C12.75 9.41421 12.4142 9.75 12 9.75C11.5858 9.75 11.25 9.41421 11.25 9V5C11.25 4.58579 11.5858 4.25 12 4.25Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25 5C7.25 4.58579 7.58579 4.25 8 4.25H16C16.4142 4.25 16.75 4.58579 16.75 5C16.75 5.41421 16.4142 5.75 16 5.75H8C7.58579 5.75 7.25 5.41421 7.25 5Z" />
          </svg>
        </span>
        <h2 class="title">Furnitur</h2>
      </div>
      <ul class="nav">
        <li class="item active"><a href="#home" class="link">home</a></li>
        <li class="item"><a href="#about" class="link">about</a></li>
        <li class="item"><a href="#shop" class="link">shop</a></li>
        <li class="item">
          <a href="#testimonial" class="link">testimonial</a>
        </li>
        <li class="item"><a href="#contact" class="link">contact</a></li>
      </ul>
      <ul class="action">
        <li class="item">
          <a href="#" class="link">
            <span class="logo">
              <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" viewBox="0 0 512 512">
                <path d="M256,48C141.31,48,48,141.31,48,256s93.31,208,208,208,208-93.31,208-208S370.69,48,256,48Zm2,96a72,72,0,1,1-72,72A72,72,0,0,1,258,144Zm-2,288a175.55,175.55,0,0,1-129.18-56.6C135.66,329.62,215.06,320,256,320s120.34,9.62,129.18,55.39A175.52,175.52,0,0,1,256,432Z" />
              </svg>
            </span>
          </a>
        </li>
        <li class="item">
          <a href="#" class="link">
            <span class="logo">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="auto" height="auto" viewBox="0 0 512 512">
                <circle cx="176" cy="416" r="32" />
                <circle cx="400" cy="416" r="32" />
                <path d="M456.8,120.78A23.92,23.92,0,0,0,438.24,112H133.89l-6.13-34.78A16,16,0,0,0,112,64H48a16,16,0,0,0,0,32H98.58l45.66,258.78A16,16,0,0,0,160,368H416a16,16,0,0,0,0-32H173.42l-5.64-32H409.44A24.07,24.07,0,0,0,433,284.71l28.8-144A24,24,0,0,0,456.8,120.78Z" />
              </svg>
              <span class="red" style="position: absolute; top: 0; right: 0; width: 10px; height: 10px; border-radius: 50%; background: #f00"></span>
            </span>
          </a>
        </li>
      </ul>
    </header>
    @yield('contents')
    <footer class="footer">
      @yield('footer')
      <div class="footer_text">
        <p class="text small">© Furnitur | All Right Received</p>
      </div>
    </footer>
  </section>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  @stack('script')
</body>

</html>