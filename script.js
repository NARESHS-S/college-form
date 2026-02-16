const joinYear = document.getElementById("join_year");
const passYear = document.getElementById("pass_year");


joinYear.innerHTML = '<option value="" selected>Select Year</option>';
passYear.innerHTML = '<option value="" selected>Select Year</option>';


for (let year = 2000; year <= 2030; year++) {
    joinYear.innerHTML += `<option value="${year}">${year}</option>`;
    passYear.innerHTML += `<option value="${year}">${year}</option>`;
}


function validateForm() {
    if (joinYear.value === "" || passYear.value === "") {
        alert("Please select both joining and passing year");
        return false;
    }

    if (parseInt(passYear.value) <= parseInt(joinYear.value)) {
        alert("Year of Passing must be greater than Year of Joining");
        return false;
    }

    return true;
}
