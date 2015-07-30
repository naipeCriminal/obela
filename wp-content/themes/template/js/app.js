(function($) {

    $.fn.obelaizer = function() {
        var specialChars = ["¿", "¿", "¡", "!", "®"];
        this.each(function() {
            var text = $(this).text(),
                words = text.split(" "),
                html = "";
            for (var i = 0; i < words.length; i++) {
                var word = words[i];
                if (word.length > 2) {
                    var validCharCounter = 1;
                    for (var j = 0; j < word.length; j++) {
                        var letter = word[j];
                        if (specialChars.indexOf(letter) < 0) {
                            if (validCharCounter % 3 == 0) html += "<span class='obelaizer-letter'>" + letter + "</span>";
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

$(document).on("ready", function() {

    var container, canvas, context;
    var maxWidth, maxHeight;

    var mouse = {
        x: 10,
        y: 10
    };
    var colors = ["#6C6B17", "#A10B30", "#D1372B", "#DD9604"];

    var cuadros = [],
        vertices = [];

    var cuadradosX = 4,
        cuadradosY = 2;
    var PI2 = Math.PI * 2;
    var range = 20,
        speed = 100;
    cuadrosCalcular()

    function grid() {
        container = document.getElementById("cien");
        canvas = document.getElementById("canvas");
        context = canvas.getContext("2d");
        maxWidth = container.offsetWidth;
        maxHeight = container.offsetHeight;

        canvas.width = maxWidth;
        canvas.height = maxHeight;
        getVertices();


        window.addEventListener("mousemove", windowOnMouseMove, false);
        window.addEventListener("resize", onWindowResize, false);
    }

    function getVertices() {
        vertices = [];
        var ancho = maxWidth / cuadradosX;
        var alto = maxHeight / cuadradosY
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
        var time = new Date().getTime() * 0.000006;
        context.beginPath();
        context.clearRect(0, 0, maxWidth, maxHeight);
        context.closePath();

        for (var i = 0; i < vertices.length; i++) {
            p = vertices[i];
            if (p.movible) {
                dx = mouse.x - p.x;
                dy = mouse.y - p.y;
                distance = Math.sqrt(dx * dx + dy * dy);
                if (p.movibleX) p.x = ((p.x - (dx / distance) * (range / distance) * speed) - ((p.x - p.x0)) / 3) + (Math.sin(time * i));
                if (p.movibleY) p.y = ((p.y - (dy / distance) * (range / distance) * speed) - ((p.y - p.y0)) / 3) + (Math.cos(time * i));
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
            context.fillStyle = cuadro[4];
            context.fill();
            context.closePath();
        };
    }

    function windowOnMouseMove(event) {
        mouse.x = event.pageX - container.offsetLeft;
        mouse.y = event.pageY - container.offsetTop;
    }

    function cuadrosCalcular() {
        anchoV = window.innerWidth
        if (anchoV <= 990) {
            cuadradosX = 2;
            cuadradosY = 4;
        } else {
            cuadradosX = 4;
            cuadradosY = 2;
        }
    }

    function onWindowResize() {
        maxWidth = container.offsetWidth;
        maxHeight = container.offsetHeight;
        canvas.width = maxWidth;
        canvas.height = maxHeight;
        getVertices();
        cuadrosCalcular()
    }
    grid();
    animate();
})

var App = (function() {

    function ubicacion() {
        wmx = $('.maxwidht').width();
        $('#map-canvas').width(wmx);

        hubicacion = $('.row.ubicacion').height();
        $('.header-ubicacion .header-img img').height(hubicacion);
    }

    function eventosPrincipal() {
        $(".obelaizer").obelaizer();
        wimgreceta = $('.imgreceta').width();
    }

    function hovermasreceta() {
        whovermasrecetahomehover = $('.masreceta .imgreceta').width();
        $('.masreceta .imgreceta').css('marginLeft', -2 / (whovermasrecetahomehover))
        console.log('fuck')

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