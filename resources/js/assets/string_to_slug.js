/**
 * Converts a given string into a URL-friendly slug and sets it as the value of a specified HTML input element. (Version 1.1)
 *
 * @param {string} str The input string to be converted into a slug.
 * @param {string} querySelector A CSS selector string used to target the HTML element whose value will be set to the generated slug.
 */
window.string_to_slug = function (str, querySelector) {
    str = str.replace(/^\s+|\s+$/g, '');
    str = str.toLowerCase();

    var from = "àáäâèéëêìíïîòóöôùúüûñç./_,:;";
    var to = "aaaaeeeeiiiioooouuuunc------";

    var newStr = "";
    for (var i = 0, l = str.length; i < l; i++) {
        var char = str.charAt(i);
        var index = from.indexOf(char);
        if (index > -1) {
            newStr += to.charAt(index);
        } else {
            newStr += char;
        }
    }

    newStr = newStr.replace(/\s+/g, '-')
        .replace(/[^a-z0-9-]/g, '')
        .replace(/-+/g, '-');

    document.querySelector(querySelector).value = newStr;
}
