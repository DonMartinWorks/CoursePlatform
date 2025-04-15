/**
 * Converts a given string into a URL-friendly slug and sets it as the value of a specified HTML input element. (Version 1.0)
 *
 * @param {string} str The input string to be converted into a slug.
 * @param {string} querySelector A CSS selector string used to target the HTML element whose value will be set to the generated slug.
 */
window.string_to_slug = function (str, querySelector) {
    str = str.replace(/^\s+|\s+$/g, '');
    str = str.toLowerCase();
    var from = "àáäâèéëêìíïîùúüûñç./_,:;";
    var to = "aaaaeeeeiiiioooouuuunc------";

    for (var i = 0, l = from.length; i < l; i++) {
        str = str.replace(new RegExp(from.charAt(i)))
    }

    str = str.replace(/[^a-z0-9 -]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-');

    document.querySelector(querySelector).value = str;
}
