<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    @include('partials.head')
  </head>
  <body style="background-color: #1E1E1E; ">
    <!-- Header Start -->
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
      @include('partials.navbar')
    </header>
    <!-- Header End -->


    @yield('main')

    <!-- Footer Start -->
    <footer class="bg-white pt-24 pb-12">
      @include('partials.footer')
    </footer>
    <!-- Footer End -->


    <!-- Back to top Start -->
    <a href="#home" class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse" id="to-top">
       <!-- icon666.com - MILLIONS vector ICONS FREE --><svg id="Layer_2" enable-background="new 0 0 32 32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="m16 22.5 13.7 3.9c.4.1.9 0 1.1-.4s.2-.8 0-1.2l-14-19c-.2-.3-.5-.4-.8-.4s-.6.2-.8.4l-14 19c-.1.3-.2.5-.2.7s.1.4.2.6c.2.4.7.5 1.1.4zm0-14.3 11.5 15.5-11.5-3.2-11.5 3.2z"/></svg>
    </a>
    <!-- Back to top End -->

    <script src="js/script.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/swiper.js"></script>
   
  </body>
</html>
