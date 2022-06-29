// USER FUNCTIONS

function editProfileUser() {
    document.getElementById("name").removeAttribute("disabled");
    document.getElementById("warea").removeAttribute("disabled");
    document.getElementById("spec").removeAttribute("disabled");
    document.getElementById("city").removeAttribute("disabled");
    document.getElementById("phone").removeAttribute("disabled");
    document.getElementById("genderBetter").removeAttribute("disabled");
    document.getElementById("genderKitchen").removeAttribute("disabled");

    document.getElementById("btn-save").removeAttribute("disabled");
}

function saveProfileUser() {
    alert("Your changes in profile have been saved!");
}

function editBio() {
    document.getElementById("bio").removeAttribute("disabled");
    document.getElementById("btn-save-dwn").removeAttribute("disabled");
}

function saveBio() {
    alert("Your changes in BIO have been saved!");
}





// COMPANY FUNCTIONS

function editProfileComp() {
    document.getElementById("name").removeAttribute("disabled");
    document.getElementById("crn").removeAttribute("disabled");
    document.getElementById("address").removeAttribute("disabled");
    document.getElementById("phone").removeAttribute("disabled");
    document.getElementById("type").removeAttribute("disabled");

    document.getElementById("btn-save").removeAttribute("disabled");
}

function saveProfileComp() {
    alert("Your changes in Company profile have been saved!");
}

function editDesc() {
    document.getElementById("bio").removeAttribute("disabled");

    document.getElementById("btn-save-dwn").removeAttribute("disabled");
}

function saveDesc() {
    alert("Your changes in company description have been saved!");
}