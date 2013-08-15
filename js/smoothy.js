        function fadeout(element) {
            var op = 1;  // initial opacity
            var timer = setInterval(function () {
                if (op <= 0.1){
                    clearInterval(timer);
                    element.style.display = 'none';
                }
                element.style.opacity = op;
                element.style.filter = 'alpha(opacity=' + op * 100 + ")";
                op -= op * 0.1;
            }, 50);
        }

        function fadein(element) {
            var op = 0;  // initial opacity
            var timer = setInterval(function () {
                if (op >= 1){
                    clearInterval(timer);
                    element.style.display = 'block';
                }
                element.style.opacity = op;
                element.style.filter = 'alpha(opacity=' + op * 100 + ")";
                op += 0.1;
            }, 50);
        }
