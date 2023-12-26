<!DOCTYPE html>
<html lang="en">
  <head>
    @include('welcome.css')
  </head>
  <body>
    <!-- 
        -#HEADER
     -->

    @include('welcome.header')
    
    <main>
      <article>
        <!-- 
          - #HERO
        -->
        @include('welcome.hero')
        
        
        
        <!-- 
          - #SERVICE
        -->
        @include('welcome.services')
        
        
        
        <!-- 
          - #ABOUT
        -->
        @include('welcome.about')
        
        
        
        <!-- 
          - CTA
        -->
        @include('welcome.cta')
        
        
        
        <!-- 
          - FOOTER
        -->  
        @include('welcome.footer')
        
        <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="{{url('/')}}">AguraMarket</a><br>
         
         </p>
      </div>
        
      </article>
    </main>
    
    <!-- 
      - custom js link
    -->
    @include('welcome.script')
    
  </body>
</html>
