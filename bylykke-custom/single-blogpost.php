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

  /* font */
  .rubrik {
    font-family: "Marcellus", serif;
    font-size: 2em !important;
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

  /* Section 1 */

  #sec_1 {
      height: 350px;
      background-color: var(--cafelatte);
  }

  .info {
    margin-left: 0px;
margin-right: 0px;
  }

  @media (min-width:1300px) {
    .rubrik {
    font-family: "Marcellus", serif;
    font-size: 4em !important;
  }

    /* Section 3 */

    #sec_3 {
      margin-top: 4em;
      margin-bottom: 4em;
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
                <div class="col-12 d-flex flex-column align-items-center"
                ><h1 class="rubrik text-center">
                </h1>
        </div>
        <div class="info row d-flex flex-column align-items-center m-0">
            <div class="col-12 col-md-4">
                    <p class="underrubrik text-center"></p>
            </div>
        </div>
            </div>
            
        </div></section>
        
<section id="sec_2">
<div class="container">
        <div class="row mt-5 mb-md-5 flex-column-reverse flex-md-row">
                <div class="col-12 col-sm-6 d-flex mt-md-5 mt-md-0 p-4">
                <p class="brodtekst1 align-self-center"></p>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                <img class="image1" src="" alt="">
                </div>
            </div>
            
        </div>
    </div>
</section>
 
<section id="sec_3">
<div class="container">
        <div class="row">
                <div class="col-12 col-md-6  d-flex justify-content-center">
                <img class="image2" src="" alt="">
                </div>
                <div class="col-12 col-md-6 d-flex p-4">
                <p class="brodtekst2 align-self-center mt-md-5"></p>
                
                </div>
            </div>
            
        </div>
    </div>
</section>

<section id="sec_4" class="mt-1 mt-md-5 mb-5">
    <div class="container">
    <div class="row"> 
                <div class="col d-flex justify-content-center">
                    <button class="knap elementor-button-link elementor-button elementor-size-sm elementor-animation-grow align-self-center">Back to articles</button>
            </div>
    </div>
</section>

    </main>
    </section>
    <script>
        let blogpost;
        let aktuelBlogpost = <?php echo get_the_ID() ?>;

        const articles = "https://bylykkeskincare.com/articles/";

        const dbUrl = "https://bylykkeskincare.com/wp-json/wp/v2/blogpost/" + aktuelBlogpost;

        const container = document.querySelector("#blogpost");

        async function getJson() {
            const data = await fetch(dbUrl);
            blogpost = await data.json();

            visBlogpost();
        }

        function visBlogpost() {
            console.log("hej med dig", blogpost);
            document.querySelector(".rubrik").textContent = blogpost.title.rendered;
            document.querySelector(".underrubrik").textContent = blogpost.underrubrik;
            document.querySelector(".image1").src = blogpost.image1.guid;
            document.querySelector(".brodtekst1").innerHTML = blogpost.brodtekst1;
            document.querySelector(".image2").src = blogpost.image2.guid;
            document.querySelector(".brodtekst2").innerHTML = blogpost.brodtekst2;
            document.querySelector(".knap").addEventListener("click", () => {
                location.href = articles;
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