(function($) {

    $.fn.obelaizer = function() {
        var specialChars = "¿_?_¡_!_®_._,".split("_");
        this.each(function() {
            var text = $(this).text(),
                words = text.split(" "),
                html = "";
            for (var i = 0; i < words.length; i++) {
                var word = words[i];
                if (word.length > 2) {
                    var validCharCounter = 1;
                    // for (var j = 0; j < word.length; j++) {
                    for (var j = 0; j < word.length; j++) {
                        var letter = word[j];
                        if (specialChars.indexOf(letter) < 0) {
                            if (validCharCounter == 3) html += "<span class='obelaizer-letter'>" + letter + "</span>";
                            else html += replaceChars(letter);
                            validCharCounter++;
                        } else html += replaceChars(letter);
                    };
                } else html += replaceChars(word);
                html += " ";
            };

            function replaceChars(str) {
                var newStr = str.replace("¿", "<span class='invert-char'>?</span>").replace("¡", "<span class='invert-char'>!</span>");
                return newStr;
            }

            $(this).html(html);
        });
        return this;
    };
}(jQuery));

(function() {
    var container, canvas, context;
    var maxWidth, maxHeight;

    var mouse = {
        x: 10,
        y: 10
    };

    var cuadros = [],
        vertices = [];

    var cuadradosX = 4,
        cuadradosY = 2;
    var PI2 = Math.PI * 2;
    var range = 15,
        speed = 30;
    setSquares();

    function grid() {
        container = document.getElementById("elastic-grid");
        canvas = document.getElementById("canvas");
        context = canvas.getContext("2d");
        maxWidth = container.offsetWidth;
        maxHeight = maxWidth / 2;

        canvas.width = maxWidth;
        canvas.height = maxHeight;
        setSizes();
        getVertices();

        window.addEventListener("mousemove", windowOnMouseMove, false);
        window.addEventListener("resize", setSizes, false);
        animate();
    }

    function getVertices() {
        vertices = [];
        var ancho = maxWidth / cuadradosX;
        var alto = maxHeight / cuadradosY;
        for (var i = 0; i <= cuadradosY; i++) {
            y = i * alto;

            for (var j = 0; j <= cuadradosX; j++) {
                var movible = true,
                    movibleX = true,
                    movibleY = true;
                x = j * ancho;
                if ((x == 0 && y == 0) || (x == maxWidth && y == maxHeight) ||
                    (x == maxWidth && y == 0) || (x == maxWidth && y == 0)) {
                    movible = false;
                }
                if (x == 0 || x == maxWidth) movibleX = false;
                if (y == 0 || y == maxHeight) movibleY = false;
                vertices.push({
                    x: x,
                    y: y,
                    x0: x,
                    y0: y,
                    movible: movible,
                    movibleX: movibleX,
                    movibleY: movibleY
                });
            };
        };
        calcularCuadros();
    }

    function calcularCuadros() {
        cuadros = [];
        var fila = 0;
        var verticeY = 0;
        for (var i = 0; i < cuadradosY; i++) {
            verticeY = (fila * (cuadradosX + 1));
            for (var j = 0; j < cuadradosX; j++) {
                var verticesCuadrado = [j + verticeY, verticeY + j + 1, (verticeY + j + 1) + cuadradosX, (verticeY + j + 2) + cuadradosX, colors[Math.floor(Math.random() * colors.length)]];
                cuadros.push(verticesCuadrado);
            };
            fila++;
        };

    }

    function animate() {
        requestAnimationFrame(animate);
        render()
    }

    function render() {
        context.beginPath();
        context.clearRect(0, 0, maxWidth, maxHeight);
        context.closePath();

        for (var i = 0; i < vertices.length; i++) {
            p = vertices[i];
            if (p.movible) {
                dx = mouse.x - p.x;
                dy = mouse.y - p.y;
                distance = Math.sqrt(dx * dx + dy * dy);
                if (p.movibleX) p.x = ((p.x - (dx / distance) * (range / distance) * speed) - ((p.x - p.x0)));
                if (p.movibleY) p.y = ((p.y - (dy / distance) * (range / distance) * speed) - ((p.y - p.y0)) / 4);
            }
        }
        for (var j = 0; j < cuadros.length; j++) {
            var cuadro = cuadros[j];
            context.beginPath();
            context.moveTo(vertices[cuadro[0]].x, vertices[cuadro[0]].y);
            context.lineTo(vertices[cuadro[1]].x, vertices[cuadro[1]].y);
            context.lineTo(vertices[cuadro[3]].x, vertices[cuadro[3]].y);
            context.lineTo(vertices[cuadro[2]].x, vertices[cuadro[2]].y);
            context.lineTo(vertices[cuadro[0]].x, vertices[cuadro[0]].y);
            context.fillStyle = colors[j] ? colors[j] : colors[4];
            context.fill();
            context.closePath();
        };
    }

    function windowOnMouseMove(event) {
        mouse.x = event.pageX - container.offsetLeft;
        mouse.y = event.pageY - container.offsetTop;
    }

    function setSquares() {
        anchoV = window.innerWidth
        if (anchoV <= 990) {
            cuadradosX = 1;
            cuadradosY = 8;
        } else {
            cuadradosX = 4;
            cuadradosY = 2;
        }
    }

    function setSizes() {
        maxWidth = container.offsetWidth;
        // maxHeight = container.offsetHeight;
        maxHeight = maxWidth / 2;
        canvas.width = maxWidth;
        canvas.height = maxHeight;
        setSquares();
        getVertices();
        $('.grid').css("height", maxWidth / 4);
    }
    if (elasticGrid) grid();
})();

var App = (function() {

    function ubicacion() {
        wmx = $('.maxwidht').width();
        $('#map-canvas').width(wmx);

        var ubicacion = $('.row.ubicacion').height();
        $('.header-ubicacion .header-img img').height(ubicacion);
    }

    function eventosPrincipal() {
        $(".obelaizer").obelaizer();
        $(".grid").hover(function() {
            $(this).transition({ scale: 0.95 });
        }, function() {
            $(this).transition({ scale: 1 });
        });
        $(".grid").each(function(index, el) {
            $(this).delay(Math.random() * 900).animate({
                opacity: 1,
                top: 0
            }, 900, 'easeOutQuart');
        });
        $("#canvas").animate({
            opacity: 1,
            top: 0
        }, 900, 'easeOutQuart');
    }

    $(window).resize(function() {
        console.log("ok")
        ubicacion();
    });

    return {
        init: function() {
            eventosPrincipal();
            ubicacion();
        }
    }
})();