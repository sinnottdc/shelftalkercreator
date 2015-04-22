
function wikiclean() {
   

for (i=0; i<10; i++) {
var str = $('#textarea').val();
str = str.replace(/\[\d\]/, "");

str = str.replace(/\s+/g, ' ');

str = str.replace(/\/(.*);\s/, '');
$("#textarea").val(str);
}
}

