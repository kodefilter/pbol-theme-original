var min = 8;
            var max = 18;
            function increaseFontSize() {

                var p = document.getElementsByTagName('p');
                for (i = 0; i < p.length; i++) {

                    if (p[i].style.fontSize) {
                        var s = parseInt(p[i].style.fontSize.replace("px", ""));
                    } else {

                        var s = 12;
                    }
                    if (s !== max) {

                        s += 1;
                    }
                    p[i].style.fontSize = s + "px";

                }
                
                var li = document.getElementsByTagName('li');
                for (i = 0; i < li.length; i++) {

                    if (li[i].style.fontSize) {
                        var s = parseInt(li[i].style.fontSize.replace("px", ""));
                    } else {

                        var s = 12;
                    }
                    if (s !== max) {

                        s += 1;
                    }
                    li[i].style.fontSize = s + "px";

                }
            }
            function decreaseFontSize() {
                var p = document.getElementsByTagName('p');
                for (i = 0; i < p.length; i++) {

                    if (p[i].style.fontSize) {
                        var s = parseInt(p[i].style.fontSize.replace("px", ""));
                    } else {

                        var s = 12;
                    }
                    if (s !== min) {

                        s -= 1;
                    }
                    p[i].style.fontSize = s + "px";

                }
                
                var li = document.getElementsByTagName('li');
                for (i = 0; i < li.length; i++) {

                    if (li[i].style.fontSize) {
                        var s = parseInt(li[i].style.fontSize.replace("px", ""));
                    } else {

                        var s = 12;
                    }
                    if (s !== min) {

                        s -= 1;
                    }
                    li[i].style.fontSize = s + "px";

                }
            }