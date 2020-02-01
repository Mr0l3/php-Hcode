<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="verifyCap.php" method="POST">
      <div class="g-recaptcha" data-sitekey="6LeKadQUAAAAAAj0HLb9CvMSc4U1Lp3GhYjNItvM"></div>
      <br/>
      <input type="email" name="emailUser" placeholder="Email" required>
      <br/>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
