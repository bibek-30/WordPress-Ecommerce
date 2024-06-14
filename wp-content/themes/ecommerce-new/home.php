<?php
//Template Name: Home
get_header();
?>
<!-- Main Section -->
<main class="main">
   <section class="section banner banner-section">
      <div class="container banner-column">
         <img class="banner-image" src="http://localhost/ecommertce/wp-content/uploads/2024/06/dairy-e1718339963236.png" alt="banner">
         <div class="banner-inner">
            <h1 class="heading-xl">Experience Media Like Never Before</h1>
            <p class="paragraph">
               Enjoy award-winning stereo beats with wireless listening freedom and sleek,
               streamlined with premium padded and delivering first-rate playback.
            </p>
            <button class="btn btn-darken btn-inline">
               Our Products<i class="bx bx-right-arrow-alt"></i>
            </button>
         </div>
      </div>
   </section>
   <section class="featured">
      <h1>Featured</h1>
      <div class="cards">
         <a href="#" class="card card-1">
            <article>
               <img src="https://i.ibb.co/d7rcYDv/1.jpg" alt="Food">
               <div class="tag-1">Article</div>
               <div class="comments">
                  <span class="far fa-comment"></span>
                  42
               </div>
               <h2>This is what separates chefs from amateur cooks</h2>
            </article>
         </a>
         <a href="#" class="card card-2">
            <article>
               <img src="https://i.ibb.co/nDjPnYT/2.jpg" alt="Food">
               <div class="tag-1">Recipe</div>
               <div class="comments">
                  <span class="far fa-comment"></span>
                  8
               </div>
               <h2>5 Healthy Snacks to help you get through winter</h2>
            </article>
         </a>
         <a href="#" class="card card-3">
            <article>
               <img src="https://i.ibb.co/dtdTFK9/3.jpg" alt="Food">
               <div class="tag-1">Article</div>
               <div class="comments">
                  <span class="far fa-comment"></span>
                  13
               </div>
               <h2>10 Common beginner mistakes</h2>
            </article>
         </a>
         <a href="#" class="card card-4">
            <article>
               <img src="https://i.ibb.co/PryN0m3/4.jpg" alt="Food">
               <div class="tag-1">Video</div>
               <span class="fas fa-play-circle"></span>
            </article>
         </a>
      </div>
   </section>
   <section class="collections">
      <h1>Diary Collections</h1>
      <div class="cards">
         <a href="#" class="card">
            <article>
               <img src="https://i.ibb.co/VDnRHFY/13.jpg" alt="Food">
               <div class="description">
                  <div class="tag-2">56 recipes</div>
                  <h2>Quick &amp; Easy</h2>
                  <p>Lorem ipsum dolor sit amet.</p>
               </div>
            </article>
         </a>
         <a href="#" class="card">
            <article>
               <img src="https://i.ibb.co/MfHq6Jk/14.jpg" alt="Food">
               <div class="description">
                  <div class="tag-2">120 recipes</div>
                  <h2>Salads</h2>
                  <p>Lorem ipsum dolor sit amet.</p>
               </div>
            </article>
         </a>
         <a href="#" class="card">
            <article>
               <img src="https://i.ibb.co/02qhPP4/15.jpg" alt="Food">
               <div class="description">
                  <div class="tag-2">94 recipes</div>
                  <h2>Fruits</h2>
                  <p>Lorem ipsum dolor sit amet.</p>
               </div>
            </article>
         </a>
      </div>
   </section>

   <script>
      document.addEventListener('DOMContentLoaded', function() {
         document.querySelector('.banner-column').classList.add('animate');
      });
   </script>


</main>
<?php
get_footer();
?>