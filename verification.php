<!DOCTYPE html>
<html>
  <head>
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

  </head>
  <body>
    <form >
      <h1>Firebase Phone verification In PHP</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
      <input type="text" id="verificationCode" placeholder="Enter verification code">
      
      </div>
     
      <button type="button" onclick="codeverify();">Verify code</button>
    
    </form>


    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
    appId: "1:99446038979:web:6876f093329352b3c71d76",
    apiKey: "AIzaSyDqoyvnqM44fvu4Gvlfc_Dj1Di2VztJxK4",
    authDomain: "phone-auth-76a5e.firebaseapp.com",
    projectId: "phone-auth-76a5e",
    storageBucket: "phone-auth-76a5e.appspot.com",
    messagingSenderId: "99446038979",
    measurementId: "G-CCJ2B0YHR3"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
     firebase.analytics();
</script>
    <script src="firebase.js" type="text/javascript"></script>
  </body>
</html>