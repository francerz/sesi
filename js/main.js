function findChild(el, selector) {
    for (var i = 0, child; child = el.children[i]; i++) {
        if (child.matches(selector)) {
            return child;
        }
    }
}
function findChildren(el, selector) {
    var children = [];
    for (var i = 0, child; child = el.children[i]; i++) {
        if (child.matches(selector)) {
            children.push(child);
        }
    }
    return children;
}
window.addEventListener('resize', function (ev) {
    updateLayout();
});
window.addEventListener('load', function(ev) {
    parseLayout();
    updateLayout();
});
window.addEventListener('click', function (ev) {
    var visibleMenus = document.querySelectorAll('.menu.visible');
    visibleMenus.forEach(el => {
        el.classList.remove('visible');
    });
});

function parseLayout() {
    var xInputs = document.querySelectorAll('.fixed-input');
    xInputs.forEach(el => {
        parseXInput(el);
    });
}
function parseXInput(el) {
    var backspaceTimeout, backspaceInterval;

    var rgxName = /.*\bname:([A-Za-z0-9_\-]+)\b.*/;
    var newName = rgxName.exec(el.className);
    var input = document.createElement('input');
    input.className = 'real-input';
    input.type = 'hidden';
    input.name = newName[1];
    el.insertBefore(input, el.firstChild);

    for (var i = 0, child; child = el.children[i]; i++) {
        child.maxLength = 1;
        child.addEventListener('focus', function(e) {
            if (this.previousElementSibling) {
                var prevNode = this;
                while (prevNode.previousElementSibling) {
                    if (prevNode.previousElementSibling.value.trim() != "") {
                        break;
                    }
                    prevNode = prevNode.previousElementSibling;
                }
                prevNode.focus();
                prevNode.select();
            }
        });
        child.addEventListener('keyup',function(e) {
            console.log(e.key);
            this.value = this.value.toUpperCase();
            if (e.key == "Tab" || e.key == "Control" || e.key == "Shift" || e.key == "CapsLock") {
                e.stopImmediatePropagation();
                e.preventDefault();
                return;
            }
            if (e.key == "Backspace") {
                this.value = "";
                if (this.previousElementSibling) {
                    this.previousElementSibling.focus();
                    this.previousElementSibling.select();
                }
                return;
            }
            if (e.key == "Delete") {
                this.value = "";
                return;
            }
            if (e.key == "Left" || e.key == "ArrowLeft") {
                if (this.previousElementSibling) {
                    this.previousElementSibling.focus();
                    this.previousElementSibling.select();
                }
                return;
            }
            if (e.key == "Right" || e.key == "ArrowRight") {
                if (this.value.trim() == "") {
                    e.preventDefault();
                    return false;
                }
            }
            if (this.nextElementSibling) {
                this.nextElementSibling.focus();
            }
            input.value = "";
            var node = this;
            while (node.previousElementSibling) {
                input.value = node.value + input.value;
                node = node.previousElementSibling;
            }
        });
    }
}

function updateLayout() {
    var navViews = document.querySelectorAll('.nav-view');
    navViews.forEach(el => {
        if (el.classList.contains('nv-top')) {
            navViewHorzSizeChanged.call(el);
        }
    });
}

function navViewHorzSizeChanged () {
    var moreItem = findChild(this, '.more');
    if (this.offsetWidth < this.scrollWidth) {
        if (!moreItem) {
            moreItem = document.createElement('a');
            moreItem.className = "more";

            moreItem['menu'] = document.createElement('div');
            moreItem.menu.className = 'menu';
            moreItem.append(moreItem.menu);

            moreItem.addEventListener('click', navViewMoreItemClicked);

            this.appendChild(moreItem);
        }
        var prevItems = findChildren(this, '.item, .header, .separator');
        prevItems.reverse();
        for (var i = 0, item; item = prevItems[i]; i++) {
            if (this.offsetWidth >= this.scrollWidth) {
                break;
            }
            // this.removeChild(item);
            if (moreItem.menu.children.length == 0) {
                moreItem.menu.append(item);
            } else {
                moreItem.menu.insertBefore(item, moreItem.menu.firstChild);
            }
        }
    } else if (moreItem && moreItem.menu.children.length > 0) {
        var menu = moreItem.menu;
        var item = menu.firstChild;

        this.insertBefore(item, moreItem);
        if (this.offsetWidth < this.scrollWidth) {
            this.removeChild(item);
            menu.insertBefore(item, menu.firstChild);
        }

        // No more elements on overflow
        if (menu.children.length == 0) {
            this.removeChild(moreItem);
        }
    }
}

function navViewMoreItemClicked(e) {
    e.stopImmediatePropagation();
    this.menu.classList.toggle('visible');
}