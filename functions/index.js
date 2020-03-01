const functions = require('firebase-functions');
const admin = require('firebase-admin');
admin.initializeApp();

const firestore = admin.firestore();

exports.createUser = functions.auth.user().onCreate(function(user, context) {
    documentRef = firestore.collection('users').doc(user.uid);
    console.log(user);
    return documentRef.create({awards: "", email: user.email, facebook: "", instagram: "", longbio: "", madewebsite: false, name: "", phone: "", shortbio: "", twitter: "", volunteering_experience: "", work_experience: ""});
});

exports.deleteUser = functions.auth.user().onDelete(function(user, context){
    return firestore.collection('users').doc(user.uid).delete();
});
