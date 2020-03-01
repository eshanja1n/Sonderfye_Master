  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyABWVc-5Sm2rryuHIndM1GuavBr1JFtaDc",
    authDomain: "sonderfyewebsite.firebaseapp.com",
    databaseURL: "https://sonderfyewebsite.firebaseio.com",
    projectId: "sonderfyewebsite",
    storageBucket: "sonderfyewebsite.appspot.com",
    messagingSenderId: "173993316854",
    appId: "1:173993316854:web:b76966729380d8f4"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

firebase.auth().setPersistence(firebase.auth.Auth.Persistence.SESSION);
