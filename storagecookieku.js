window.onload = function() {
      var html = "<!doctype html>\
                   <html>\
                     <body>\
                       <script>\
                         localStorage.setItem('content', 'hello world');\
                        document.write(localStorage.getItem('content'));\
                      <\/script>\
                     </body>\
                   </html>"
      , blob = new Blob([html], {
        type: "text/html"
      })
      , url = window.URL.createObjectURL(blob)
      , a = document.getElementById("bookmark");
      a.href = url;
    }