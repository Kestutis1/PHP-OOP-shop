console.log("Labas");

// IDEA: Puslapiui papil_pre_kategor.php užsikrovus paslepiam prekės spalvoa ir dydžio formas.
if (document.getElementById("dydis")) {
      document.getElementById("dydis").style.display = "none";
}

if (document.getElementById("spalva")) {
      document.getElementById("spalva").style.display = "none";
}

// IDEA: Paspaudus mygtuką pridėti prekei spalvą ir dydį parodome formas
function par_formas () {
    document.getElementById("dydis").style.display = "block";
    document.getElementById("spalva").style.display = "block";
}

$("#pre_ikelimas").validate({

    errorPlacement: function(error, element) {

        // name attrib of the field
		var n = element.attr("name");

		if (n == "prePavadinimas")
			element.attr("placeholder", "Prekės pavadinimą reikia įvesti");
		else if (n == "preKaina")
			element.attr("placeholder", "Prekės kainą reikia įvesti iš skaičių");
    },
    rules: {
        prePavadinimas: {
            minlength: 2,
            required: true
        },
        preKaina: {
            required: true,
            number: true
        }
    },
    highlight: function(element) {


        $(element).addClass('has_error');
    },
    unhighlight: function(element) {


        $(element).removeClass('has_error');
    },
    submitHandler: function(form) {

    }
});

function removeParam(key, sourceURL) {
    var rtn = sourceURL.split("?")[0],
        param,
        params_arr = [],
        queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
    if (queryString !== "") {
        params_arr = queryString.split("&");
        for (var i = params_arr.length - 1; i >= 0; i -= 1) {
            param = params_arr[i].split("=")[0];
            if (param === key) {
                params_arr.splice(i, 1);
            }
        }
        rtn = rtn + "?" + params_arr.join("&");
    }
    return rtn;
}
// To use it, simply do something like this:

var originalURL = window.location.href;
var alteredURL = removeParam("signup", originalURL);
var alteredURL = removeParam("mailsend", originalURL);
var alteredURL = removeParam("login", originalURL);
var alteredURL = removeParam("sekme", originalURL);
// The var alteredURL will be the output you desire.
console.log(originalURL);
console.log(alteredURL);

// Url pakeitimas nauju gražiu.
history.pushState({
    id: 'Pavyko'
}, 'Pavyko uzsiregistruoti', alteredURL);

//Paslepiam Banerį dėl Slapuko naudojimo taisyklių
function slapukai () {
  document.getElementById("p2").style.display = "none";
}
