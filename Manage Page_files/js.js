// JavaScript Document
function lof(x) {
  location.href = x;
}
function op(x, y, url) {
  $(x).fadeIn();
  if (y) $(y).fadeIn();
  if (y && url) $(y).load(url);
}
function cl(x) {
  $(x).fadeOut();
}
