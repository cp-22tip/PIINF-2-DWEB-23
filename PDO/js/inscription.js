$(function(){

$("#inscription_form").validate(
    {
        rules:{
            nom_per: {
                    required : true,
            minlength : 2
            },
            prenom_per: {
                required : true,
                minlength : 2
            },
            email_per: {
                required : true,
                email: true,
            },
            password:{
                required : true,
                minlength : 2},

            password_conf : {
                required : true,
                equalTo:"#password",
                 }

        },
        messages:{
            nom_per :{
                required: "Veuillez saisir votre nom",
                minlength:"Votre nom doit être composé de 2 caractères au minimum",
            },
            prenom_per :{
                required: "Veuillez saisir votre prénom",
                minlength:"Votre prénom doit être composé de 2 caractères au minimum",
            },
            email_per :{
                required: "Veuillez saisir votre e-mail",
                email:"Votre adresse e-mail doit avoir le format suivant : name@domain.com"
            },
            password :{
                required: "Veuillez saisir votre mot de passe",
                minlength:"Votre mot de passe doit être composé de 2 caractères au minimum"
            },
            password_conf :{
                required: "Veuillez saisir la confirmation de votre mot de passe",
                equalTo:    "Le mot de passe n'est pas le même"
            }

        }
    }
);

});