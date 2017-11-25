  <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-signin-client_id" content="524484483749-dh4i19sp244upg39iacutg307cntgmpl.apps.googleusercontent.com">
    <title>Flique</title>

    <!-- Bootstrap core CSS -->
  </head>
  <body>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
      <script type="text/javascript">
        
        function onSignIn(googleUser) {
          var profile = googleUser.getBasicProfile();
          <?php $abc = "<script>document.write(profile.getName())</script>"?>   

          
          console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
          console.log('Name: ' + profile.getName());
          console.log('Image URL: ' + profile.getImageUrl());
          console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
          console.log('profile: ' + googleUser);
        }
      </script>
  </body>
<?php echo $abc; ?>
<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>

<script src="https://apis.google.com/js/platform.js" async defer></script>
</html>
