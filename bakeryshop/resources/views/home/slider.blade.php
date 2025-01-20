<style>
  @import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik+Vinyl&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');



  :root{

    --primary-color:#42200b;
    --secondary-color:#ffc135;
    --tertiary-color:#df1c1c;
    --text-dark:#212529;
    --white:#ffffff;
    --max-width:1200px;
    --header-font-1: "Alfa Slab One", serif;
    --header-font-2: "Bebas Neue", serif;

  }

 *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  header{
    /* background-image: url(images/pinkbackground.jpg); */
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
  }
  .header-container {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Two equal columns */
    align-items: center; /* Vertically aligns the content */
    gap: 2rem;
    overflow: hidden;
    position: relative;
    top: -50px;
}

.header-image {

  max-width: 700px;
  max-height: 550px;
  margin-inline: auto; /* Place the image in the second column */
}

.header-image img {
    width: 480px; /* Make the image responsive */
    height: 690px;
    margin-inline: 0; /* Ensures no extra margin */
    padding: 20px; /* Adds padding around the image */
}

.header-content {
    display: flex;
    flex-direction: column; /* Stack the headings vertically */
    align-items: flex-start; /* Align the content to the left within its column */
    justify-content: center; /* Center content vertically within the container */
    padding: 20px; /* Adds padding inside the header content */
}

.header-content h2 {
    max-width: 600px;
    margin: 0 0 2rem 0; /* Removes auto margins and adjusts spacing */
    padding: 1rem 2rem;
    font-size: 2rem;
    font-weight: 400;
    font-family: var(--header-font-2);
    color: var(--primary-color);
    border: 2px dashed var(--primary-color);
    text-align: center; /* Align text to the left */
}

.header-content h1 {
    font-size: 4.5rem;
    font-weight: 500;
    font-family: var(--header-font-1);
    color: var(--primary-color);
    text-align: center; /* Centers the text */
    text-shadow: 2px 2px var(--white);
    margin: 0 auto; /* Centers the element horizontally */
}

.header-content h1 .baked-with {
    font-size: 4rem;
    display: flex; /* Places "Baked" and "With" on the same line */
    justify-content: center; /* Centers "Baked" and "With" horizontally */
    gap: 0.5rem; /* Adds spacing between "Baked" and "With" */
}

.header-content h1 .love {
    display: block; /* Moves "Love" to the next line */
    font-size: 4.5rem;
    text-align: center; /* Centers "Love" horizontally */
    margin-top: 0.1rem; /* Adds some spacing above "Love" */
}

.banner-container {
      display: grid;
      grid-template-columns: repeat(4, 1fr); /* 4 equal columns */
      grid-template-rows: auto;
      gap: 1rem; /* Space between banners */
      margin-top: 30px;
    }

    .banner-card {
      padding: 1rem;
      background-position: center center;
      background-size: cover;
      background-repeat: no-repeat;
      border-radius: 1.6rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: var(--white); /* Ensure text is white */
      text-align: center;
      min-height: 200px; /* Set minimum height */
      overflow: hidden;
      position: relative;
      transition: transform 0.3s ease; /* Smooth zoom-in effect */
    }

    .banner-card:hover {
      transform: scale(1.05); /* Slight zoom-in on hover */
    }

    .banner-card:nth-child(1) {
      background-image: url("images/christmas-bakery-sy-5120x2880.jpg");
      grid-column: span 2; /* Larger card spans 2 columns */
      grid-row: span 2; /* Larger card spans 2 rows */
    }

    .banner-card:nth-child(2),
    .banner-card:nth-child(3) {
      grid-column: span 2; /* Both cards span 2 columns */
    }

    .banner-card:nth-child(2) {
      background-image: url("images/breadforhome.JPG");
    }

    .banner-card:nth-child(3) {
      background-image: url("images/cinnaboncookie.jpg");
    }

    .banner-card p {
      margin-bottom: 0.5rem;
      font-size: 2rem; /* Larger text */
      
      color: var(--white); /* White text */
      font-family:var(--header-font-1); 
      text-transform: uppercase; /* Uppercase for emphasis */
      text-shadow: 2px 2px rgba(0, 0, 0, 0.5); /* Subtle shadow for readability */
    }

    .banner-card h4 {
      font-size: 1rem;
      font-weight: 300;
      color: var(--white);
      font-family: var(--header-font-1); /* Theme font */
    }



</style>
<header>
<div class="section-container header-container" id="home">
            <div class="header-image">
                <img src="images/file.png" alt="header">
            </div>
            <div class="header-content">
                <h2>LET US BE PART OF YOUR CELEBRATIONS WITH OUR DELIGHTFUL BAKED CREATIONS!</h2>
                <h1>
        <span class="baked-with">
            Baked <span>With</span>
        </span>
        <span class="love">Love</span>
    </h1>
            </div>
        </div>
        </header>
    <section class="section-container banner-container" id="special">
        <div class="banner-card">
          <p>SEASONAL SPECIALS</p>
          <h4>SAVOR THE FLAVORS OF THE SEASON!</h4>
        </div>
        <div class="banner-card">
          <p>Freshly Baked Daily</p>
          <h4>FRESH OUT OF THE OVEN<br />BAKED WITH LOVE DAILY!</h4>
        </div>
        <div class="banner-card">
          <p>Customer Favorites</p>
          <h4>CAN’T DECIDE?<br /> TRY OUR BESTSELLERS!</h4>
        </div>
      </section>
    <script src="https://unpkg.com/scrollreveal"></script>
    
  <script>
    const scrollRevealOption = {
      distance: '50px',
      duration: 1000,
      easing: 'ease-in-out',
      reset: true,
    };

    ScrollReveal().reveal(".header-image img", {
      ...scrollRevealOption,
      origin: "right",
    });

    ScrollReveal().reveal(".header-content h2", {
      ...scrollRevealOption,
      delay: 500,
    });

    ScrollReveal().reveal(".header-content h1", {
      ...scrollRevealOption,
      delay: 1000,
    });
  </script>