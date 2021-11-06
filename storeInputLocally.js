// replace the value of the quantity element with the saved value
document.getElementById("quantity").value = getSavedValue("quantity");

// save the element's value to localStorage as (ID, VALUE)
function saveValue(element) {
    var id = element.id;
    var value = element.value;
    localStorage.setItem(id, value);
}

function getSavedValue(id) {
    if (!localStorage.getItem(id)) {
        return ""; // didn't find anything
    }
    return localStorage.getItem(id);
}