for (var imageslazy = document.querySelectorAll(".post-body .separator img,.post-body .tr-caption-container img"), i = 0; i < imageslazy.length; i++) imageslazy[i].setAttribute("onclick", "return false");

function wrap(o, t, e) {
  for (var i = document.querySelectorAll(t), c = 0; c < i.length; c++) {
    var a = o + i[c].outerHTML + e;
    i[c].outerHTML = a
  }
}
wrap("<div class='zoomclick'>", ".post-body .separator a", "</div>");
wrap("<div class='zoomclick'>", ".post-body .tr-caption-container a", "</div>");
for (var containerimg = document.getElementsByClassName("zoomclick"), i = 0; i < containerimg.length; i++) containerimg[i].onclick = function() {
  this.classList.toggle("active");
  var o = document.body;
  o.classList.toggle("flow")
};