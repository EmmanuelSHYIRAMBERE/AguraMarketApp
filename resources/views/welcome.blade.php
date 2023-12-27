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
          - #CONTACT
        -->
        
        @include('welcome.contact')

        
        <!-- 
          - FOOTER
        -->  
        @include('welcome.footer')
        
      </article>
    </main>
    
    <!-- 
      - custom js link
    -->
    @include('welcome.script')
    
  </body>
</html>
