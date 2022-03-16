document.getElementById('editable').addEventListener('blur', function (event) {
        window.location = 'data:text/html;base64,' + btoa(document.documentElement.outerHTML);
    });