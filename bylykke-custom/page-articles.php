<?php
get_header();
?>
<style>

:root {
    --cafelatte: #e8e0ce;
    --creme:#FFFBF4;
    --golden: #dbbf80;
    --black: #1d1c1c; 

}

.text {
  font-size: 21px;
  font-family: bilo, sans-serif;
font-style: normal;
font-weight: 300;
}

h1, h2 {
  font-family: 'Marcellus', serif;
  font-size: 4rem!important;
}

.knap {
  font-family: 'Marcellus', serif;
  font-size: 21px;
  color: white;
  background-color: var(--golden);
  padding: 0.8em;
  border: none;
}
#content {
height: auto;
width: 100vw;
overflow-x: hidden;
padding: 0;
margin: 0;
}
#sec_1 {
height: 350px;
background-color: var(--cafelatte)
}

.hero-text {
width: 650px;
}

#sec_3 {
  background-color: var(--creme)
}
</style>

<!--fonts-->
<link rel="stylesheet" href="https://use.typekit.net/tpc3uze.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;400&family=Marcellus&display=swap" rel="stylesheet">


<!-- Bootstrap CSS -->
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous"
/>
<section id="content">
<section id="sec_1" class="d-flex justify-content-center align-items-center">
<div id="hero">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1 class="headline text-center">Articles</h1>
        <p class="text hero-text text-center">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Eligendi, id provident. Inventore aut blanditiis velit distinctio
          necessitatibus ea earum libero!
        </p>
      </div>
    </div>
  </div>
</div>
</section>
<section id="sec_2">
  <div>
    <nav id="filter"></nav>
</div>
<div id="blog-post-oversigt">
</div>
  </div>
<template>
  <article class="blog-post">
    <img src="" alt="" class="image" />
    <div class="info">
      <h3 class="headline"></h3>
      <p class="paragraph"></p>
      <button>Read more</button>
    </div>
  </article>
</template>
</section>
<section id="sec_3">
<div id="highlight" class="container-fluid">
    <div class="row">
        <div id="col-1" class="col-6 d-flex flex-column p-5">
            <h2>Shop our skincare</h2>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente iste quisquam voluptatum tempore rem placeat rerum aspernatur nesciunt magni quas fuga neque inventore, repellat ipsam dolorum incidunt distinctio. Ipsam, sequi!</p>
   <button class="knap align-self-start">Discover shop</button>     
          </div>
        <div id="col-2" class="col-6">
        </div>
    </div>
</div>
</section>
</section>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
<?php
get_footer();
?>