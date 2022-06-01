<?php
get_header();
?>
<style>
  :root {
    --cafelatte: #e8e0ce;
    --creme: #fffbf4;
    --golden: #dbbf80;
    --black: #1d1c1c;
  }

  /* Font og fontsize */

  .text {
    font-size: 21px;
    font-family: bilo, sans-serif;
    font-style: normal;
    font-weight: 300;
  }

  .headline {
    font-family: "Marcellus", serif;
    font-size: 2em !important;
  }

  .blogpost-headline {
    font-family: "Marcellus", serif;
    font-size: 1.6rem !important;
  }

  /* Knapper */

  .knap {
    font-family: "Marcellus", serif;
    font-size: 21px;
    color: white;
    background-color: var(--golden);
    padding: 0.8em;
    border: none;
    border-radius: 0;
  }
  .knap:hover {
    background-color: var(--golden);
  }
.read:hover {
    background-color: var(--golden);
  }

  .read {
    font-family: "Marcellus", serif;
    font-size: 18px;
    color: white;
    background-color: var(--golden);
    padding: 0.5em;
    border: none;
    border-radius: 0;
  }

  .filter:active {
    background-color: var(--black);
  }

  .filter:focus {
    background-color: var(--black);
  }

  /* billeder */ 
  .img {
    background-image: url(https://bylykkeskincare.com/wp-content/uploads/2022/05/Artboard-2.png);
    width: 100%;
    height: auto;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .image {
    width: 400px;
  }

  /*section 1*/
  #sec_1 {
    height: 350px;
    background-color: var(--cafelatte);
  }

  /* section 2*/
  .blogpost {
    background-color: var(--cafelatte);
  }

  /*section 3*/
  #sec_3 {
    background-color: var(--creme);
    height: 80vh;
  }

  #highlight {
    height: 80vh;
  }

  @media (min-width:1300px) {
    .headline {
    font-family: "Marcellus", serif;
    font-size: 4em !important;
  }

  .blogpost-headline {
    font-family: "Marcellus", serif;
    font-size: 2rem !important;
  } 
  }
</style>

<!--fonts-->
<link rel="stylesheet" href="https://use.typekit.net/tpc3uze.css" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;400&family=Marcellus&display=swap"
  rel="stylesheet"
/>

<!-- Bootstrap CSS -->
<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
  crossorigin="anonymous"
/>

<section id="primary" class="content-area">
  <main id="main" class="main">
    <section id="sec_1" class="d-flex align-items-center">
      <div class="container-fluid">
        <div class="row">
          <div class="col d-flex flex-column align-items-center">
            <h1 class="headline text-center">Articles</h1>
            <p class="text hero-text text-center">
              Here you can read our monthly articles about skincare, new products, events and inspirational articles - enjoy!
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="sec_2" class="m-5">
      <div class="container-fluid">
        <div class="row m-5">
          <div class="col d-flex justify-content-center">
            <nav class="d-flex gap-5" id="filtrering"></nav>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <section
              id="blogpost-oversigt"
              class="d-flex flex-wrap justify-content-evenly gap-5 m-sm-5"
            ></section>
          </div>
        </div>
      </div>
    </section>

    <section id="sec_3">
      <div class="container-fluid">
        <div id="highlight" class="row">
          <div
            id="col-1"
            class="col-12 col-sm-6 d-flex flex-column p-5 justify-content-center"
          >
            <h2 class="headline">Shop our skincare</h2>
            <p class="text mt-5 mb-5">
            Since 2012 ByLykke has worked towards creating the best skin care for you and your loved once.  Every step of the way we have been focused on making sure, that we only use the best and most active ingredients to help your skin be the best version of itself.
            </p>
            <button
              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow knap align-self-start"
            >
              Discover our shop
            </button>
          </div>
          <div id="col-2" class="col-12 col-sm-6 img"></div>
        </div>
      </div>
    </section>
  </main>
</section>

<section id="oversigt">
  <template>
    <article class="blogpost p-xs-2 p-4">
      <img src="" alt="" class="image" />
      <div class="info d-flex flex-column">
        <h3 class="blogpost-headline mt-2 mb-3"></h3>
        <p class="excerpt text"></p>
        <button class="read align-self-center elementor-button-link elementor-button elementor-size-sm elementor-animation-grow">Read more</button>
      </div>
    </article>
  </template>
</section>

<script>
  //Variabler//
  let blogpost;
  let categories;
  let filterBlogpost = "alle";

  const url = "https://bylykkeskincare.com/wp-json/wp/v2/blogpost?per_page=100";
  const catUrl = "https://bylykkeskincare.com/wp-json/wp/v2/categories";

  //Henter content fra Pods & opretter knapper //
  async function getJson() {
    let data = await fetch(url);
    let catdata = await fetch(catUrl);
    blogposts = await data.json();
    categories = await catdata.json();
    console.log(categories);
    visBlogposts();
    console.log("Nu viser jeg blogposts");
    opretKnapper();
    console.log("Nu opretter jeg knapper");
  }

  // Funktion der opretter kategori knapper i html og tilføjer classes //
  function opretKnapper() {
    categories.forEach((cat) => {
      document.querySelector(
        "#filtrering"
      ).innerHTML += `<button class="filter knap elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" data-blogpost="${cat.id}">${cat.name}</button>`;
    });

    addEventListenerToButtons();
  }

  //Tilføjer eventlistener til knapperne, som gør at blogposts bliver filtreret efter kategori //
  function addEventListenerToButtons() {
    document.querySelectorAll("#filtrering button").forEach((elm) => {
      elm.addEventListener("click", filtrering);
    });
  }

  function filtrering() {
    filterBlogpost = this.dataset.blogpost;
    console.log(filterBlogpost);

    visBlogposts();
  }

  //Funktion som placere information fra pods i de respektive tags som er tilføjet til oversigten //
  function visBlogposts() {
    console.log(blogpost);
    let temp = document.querySelector("template");
    let container = document.querySelector("#blogpost-oversigt");
    container.innerHTML = "";
    blogposts.forEach((blogpost) => {
      if (
        filterBlogpost == "alle" ||
        blogpost.categories.includes(parseInt(filterBlogpost))
      ) {
        let klon = temp.cloneNode(true).content;
        klon.querySelector(".blogpost-headline").textContent = blogpost.title.rendered;
        klon.querySelector(".excerpt").innerHTML = blogpost.excerpt.rendered;
        klon.querySelector(".image").src = blogpost.image1.guid;
        klon.querySelector(".read").addEventListener("click", () => {
          location.href = blogpost.link;
        });
        container.appendChild(klon);
      }
    });
  }

  getJson();
</script>

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