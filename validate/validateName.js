function validateName(name) {

    var alphabet = /[^a-z]/gi;
    name.value = name.value.replace(alphabet, "");
}