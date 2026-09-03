<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Vite!</title>

    <!-- This is just an example for local development, no full integration: -->
    <script type="module" src="<?php echo getenv('DDEV_PRIMARY_URL_WITHOUT_PORT'); ?>:5173/@vite/client"></script>
    <script type="module" src="<?php echo getenv('DDEV_PRIMARY_URL_WITHOUT_PORT'); ?>:5173/src/main.js"></script>
    <!-- see https://vitejs.dev/guide/backend-integration.html -->

</head>

<body>

<div
  class="hero min-h-screen"
  style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);"
>
  <div class="hero-overlay"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
      <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
      <p class="mb-5">
        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
        quasi. In deleniti eaque aut repudiandae et a id nisi.
      </p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </div>
</div>
	<div class="collapse bg-base-100 border border-base-300">
	  <input type="radio" name="my-accordion-1" checked="checked" />
	  <div class="collapse-title font-semibold">How do I create an account?</div>
	  <div class="collapse-content text-sm">Click the "Sign Up" button in the top right corner and follow the registration process.</div>
	</div>
	<div class="collapse bg-base-100 border border-base-300">
	  <input type="radio" name="my-accordion-1" />
	  <div class="collapse-title font-semibold">I forgot my password. What should I do?</div>
	  <div class="collapse-content text-sm">Click on "Forgot Password" on the login page and follow the instructions sent to your email.</div>
	</div>
	<div class="collapse bg-base-100 border border-base-300">
	  <input type="radio" name="my-accordion-1" />
	  <div class="collapse-title font-semibold">How do I update my profile information?</div>
	  <div class="collapse-content text-sm">Go to "My Account" settings and select "Edit Profile" to make changes.</div>
	</div>
	
	
	<div class="hero bg-base-200 min-h-screen">
  <div class="hero-content flex-col lg:flex-row">
    <img
      alt="Tailwind CSS hero component"
      src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
      class="max-w-sm rounded-lg shadow-2xl"
    />
    <div>
      <h1 class="text-5xl font-bold">Box Office News!</h1>
      <p class="py-6">
        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
        quasi. In deleniti eaque aut repudiandae et a id nisi.
      </p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </div>
</div>


</body>

</html>