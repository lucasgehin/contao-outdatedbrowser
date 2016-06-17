
//event listener: DOM ready
function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
        window.onload = func;
    } else {
        window.onload = function() {
            if (oldonload) {
                oldonload();
            }
            func();
        }
    }
}
//call plugin function after DOM ready
addLoadEvent(function(){
    //create element
    var element = document.createElement("div");
    element.id = "outdated";
    document.body.insertBefore(element, document.body.childNodes[0]);

    //outdated
    outdatedBrowser({
        bgColor: '#f25648',
        color: '#ffffff',
        lowerThan: 'transform',
        languagePath: 'system/modules/outdatedbrowser/assets/lang/en.html'
    })
});