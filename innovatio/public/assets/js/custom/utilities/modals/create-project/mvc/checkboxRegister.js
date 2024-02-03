
function validateForm() {
    var checkBox = document.getElementById("confirm_message");

    if (checkBox.checked == false) {
        alert("Please confirm your agreement to join the event.");
        return false;
    }
    return true;
}
