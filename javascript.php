<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>

<!-- Firestore -->
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-firestore.js"></script>

<!-- Auth -->
<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-auth.js"></script>


<!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-analytics.js"></script>

<script>
	// Your web app's Firebase configuration
	// For Firebase JS SDK v7.20.0 and later, measurementId is optional
	var firebaseConfig = {
		  apiKey: "AIzaSyD0Z1ommjx_N3W8TzuHynPetv4Nw7QQ_XI",
  authDomain: "bingmap-dhphau.firebaseapp.com",
  projectId: "bingmap-dhphau",
  storageBucket: "bingmap-dhphau.appspot.com",
  messagingSenderId: "1015835534853",
  appId: "1:1015835534853:web:229e7b7299166dcaac9e6c",
  measurementId: "G-NRJ7H0KQGJ"
	};
	// Initialize Firebase
	firebase.initializeApp(firebaseConfig);
	firebase.analytics();
	var db = firebase.firestore();
</script>