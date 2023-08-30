var tabs = (function () {

    // More hackery, list the tab divs 
    var tabs = ["Infrastructure", "Safety","Cleanliness","Staff Points","Maintenance","Food Management","Information Technology"],
        domTabs = [],
        commonStuff,
        obj,
        cldrn,
        child,
        currentPrefix,
        show,
        i,
        j;

    // Recursively iterate through node children and rename form elements
    function renameNodes(node) {
        var i;
        if (node.length) {
            for (i = 0; i < node.length; i += 1) {
                renameNodes(node[i]);
            }
        } else {
            // rename any form-related elements
            if (typeof node.form !== 'undefined') {
                node.id = currentPrefix + '_' + node.id;
                node.name = currentPrefix + '_' + node.name;

            // Assume that form elements do not have child form elements
            } else if (node.children) {
                renameNodes(node.children);
            }
        }
    }

    // Clone the common stuff dom element and prepend the tabId to the elements
    function getCommonStuff(tabId) {
        var commonClone = commonStuff.cloneNode(true);
        // hack for ie6/7
        if (!!document.all) {
            commonClone.innerHTML = commonStuff.innerHTML;
        }

        currentPrefix = tabId;
        renameNodes(commonClone);
        return commonClone;
    }

    show = function showTab(tab) {
        var i;

        for (i = 0; i < domTabs.length; i += 1) {
            if (tabs[i] === tab) {
                domTabs[i].style.display = "block";
            } else {
                domTabs[i].style.display = "none";
            }
        }
    };

    // Let's keep a reference to the dom nodes so we don't have to fish
    for (i = 0; i < tabs.length; i += 1) {
        domTabs.push(document.getElementById(tabs[i]));
    }

    commonStuff = document.getElementById("common_stuff");

    // remove the common stuff from the form
    commonStuff.parentNode.removeChild(commonStuff);

    for (i = 0; i < domTabs.length; i += 1) {
        obj = domTabs[i];

        // Find the correct div
        cldrn = obj.childNodes;
        for (j = 0; j < cldrn.length; j += 1) {
            child = cldrn[j];
            if (child.className === "common_area") {
                // Copy the common content over to the tab
                child.appendChild(getCommonStuff(tabs[i]));
                break;
            }
        }
    }

    // show the first tab
    show(tabs[0]);

    return {
        show: show // return the show function
    };

}());
function autoInc(){
    document.getElementById("auditNo").stepUp(1);
}