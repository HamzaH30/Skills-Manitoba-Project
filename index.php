<!-- Program entry point is index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Manitoba</title>

  <link rel="stylesheet" href="style.css" />
  <script src="app.js" defer></script>
</head>

<body>
  <!-- 
    This overlay is displayed when the user clicks the mobile hamburger menu.
    The class 'overlay' is applied via a click event configured in the app.js file
  -->
  <div id="overlay" class=""></div>

  <!-- Loading in php code for processing the form. Not using action attribute because there are some additional functionalities which can be simplified by simply just requiring the file liek this: -->
  <?php require('processForm.php') ?>

  <!-- Header -->
  <?php require('header.php') ?>

  <!-- Line beneath header -->
  <div class="border-line"></div>

  <main>
    <!-- Hero -->
    <section class="hero container">
      <div class="hero-img-section img-full">
        <h1>Canada's heart is calling</h1>
      </div>
      <div class="description">
        <h2>Welcome to <span class="gold-text">Manitoba</span>, the heart of <span class="red-text">Canada</span>!</h2>
        <p>Your heart needs travel. It doesn't matter where you're from or your age or ability, your heart needs travel. So, follow your heart and whatever it needs to the middle of Canada.</p>
        <p>Here, a 100-kilometer-wide sunset over a mirror lake makes everything else disappear. Here, a rib-crushing hug chases the cold from a winter day. Here, a fiddle contest gets your toe tapping. Here, the rhythm of a jingle dress dance comforts your spirit.</p>
        <p>Every heart needs something a little different, but the power in all of these moments calls us to venture forward.</p>
      </div>
    </section>

    <!-- Wear Canada’s heart on your sleeve Section -->
    <section class="img-full canada-heart-sleeve container">
      <h2>Wear Canada’s heart on your sleeve</h2>
      <p>Show the world that you found what your heart needs in Manitoba. Whether it's to remember your visit, show off your local pride or just keep warm on your next adventure, visit our online shop to browse a range of toques, mitts, shirts, sweaters and more.</p>
    </section>

    <!-- Canada's Heart is Calling Section -->
    <section class="heart-needs container">
      <h2>Whatever your heart needs,<br />Canada’s Heart is Calling.</h2>
      <p>Explore Manitoba for all that it has to offer—and take a piece of it home with you.</p>
    </section>

    <!-- Manitoba Passion Section -->
    <section class=" mb-passion container">
      <div class="img-full img-bg-text">
        <h2>A passion for Manitoba</h2>
        <p>There’s a lot to be proud of here in Manitoba, so definitely grab some official Hunt Fish MB gear before your next journey, getaway, or daytrip.</p>
      </div>
      <div class="description">
        <p>A visit to Manitoba means travelling through Treaty 1, 2, 3, 4 and 5 Territories and through communities who are signatories to Treaties 6 and 10. </p>
        <p>Manitoba is located on the ancestral land of the Anishinaabeg, Anishininewuk, Dakota Oyate, Denesuline and Nehethowuk Nations and is the Homeland of the Red River Métis. Northern Manitoba includes lands that were and are the ancestral lands of the Inuit.</p>
        <p>Travel Manitoba respects the spirit and intent of Treaties and Treaty Making and remains committed to working in partnership with First Nations, Inuit and Métis people in the spirit of truth, reconciliation and collaboration.</p>
      </div>
    </section>

    <section class="purchase-form container">

      <?php if (!$querySuccess) : ?>
        <div class="text">
          <h2>Purchase Products</h2>
          <h3>Start Your Journey!</h3>
        </div>

        <form method="post" action='#'>
          <div>
            <label for="fname">First Name<span class="red-text">*</span></label>
            <input type="text" name="fname" id="fname" required />
          </div>
          <div>
            <label for="lname">Last Name<span class="red-text">*</span></label>
            <input type="text" name="lname" id="lname" required />
          </div>
          <div>
            <label for="phoneNumber">Phone Number<span class="red-text">*</span></label>
            <input type="tel" name="phoneNumber" id="phoneNumber" required />
          </div>
          <div>
            <label for="email">Email<span class="red-text">*</span></label>
            <input type="email" name="email" id="email" required />
          </div>
          <div>
            <label for="product">Product<span class="red-text">*</span></label>
            <select name="product" id="product">
              <option value="adventure-dog-bandana" selected>Adventure dog bandana</option>
              <option value="boreal-forest-sweatshirt">Boreal forest sweatshirt</option>
              <option value="campfire-red-water-bottle">Campfire red water bottle</option>
              <option value="hunt-fish-mb-cap">Hunt fish manitoba cap</option>
              <option value="hunt-fish-mb-toque">Hunt fish manitoba toque</option>
              <option value="lake-life-bucket-hat">Lake life bucket hat</option>
              <option value="manitoba-flight-pass">Manitoba flight pass</option>
              <option value="manitoba-granite-tee">Manitoba granite tee</option>
              <option value="manitoba-polar-bear-socks">Manitoba polar bear socks</option>
              <option value="manitoba-ski-pass">Manitoba ski pass</option>
              <option value="red-river-adventure-long-sleeve">Red river adventure long sleeve</option>
              <option value="summer-sunset-beach-tote">Summer sunset beach tote</option>
            </select>
          </div>
          <div>
            <label for="quantity">Quantity<span class="red-text">*</span></label>
            <input type="number" name="quantity" id="quantity" required min="1" value="1" />
          </div>
          <div>
            <label for="comments">Comments</label>
            <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
          </div>
          <input type="submit" value="Purchase" />
        </form>
      <?php else : ?>
        <div class="text">
          <h2>We have received your order!</h2>
          <h3>Looking forward to your visit!</h3>

          <p>Name: <?= $_POST['fname'] . $_POST['lname'] ?></p>
          <p>Phone Number: <?= $_POST['phoneNumber'] ?></p>
          <p>Email: <?= $_POST['email'] ?></p>
          <p>Product: <?= $_POST['product'] ?></p>
          <p>Quantity: <?= $_POST['quantity'] ?></p>
          <p>Additional Comments: <?= $_POST['comments'] ?></p>
        </div>
      <?php endif; ?>
    </section>
  </main>

  <!-- Footer -->
  <?php require("footer.php") ?>
</body>

</html>