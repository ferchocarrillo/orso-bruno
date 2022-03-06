<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<style>
    body{
        margin: 0;
        background-color: #1d1e22;
      }
      #parallax {
        position: relative;
        width: 100%;
        height: 100vh;
        background-image: url('https://github.com/ferchocarrillo/orso-bruno/blob/main/public/imagen/ej1.png'), url(https://raw.githubusercontent.com/oscicen/oscicen.github.io/master/img/depth-2.png), url(https://raw.githubusercontent.com/oscicen/oscicen.github.io/master/img/depth-1.png);
        background-repeat: no-repeat;
        background-position: center;
        background-position: 50% 50%;
      }
      h1 {
        position: absolute;
        top: 47%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        font-family: "Arial";
        text-transform: uppercase;
        opacity: .2;
        font-size: 70px;
      }
</style>

</head>
<body>
    <div id="parallax"><h1>Parallax</h1></div>



    <script>
        (function() {
            // Add event listener
            document.addEventListener("mousemove", parallax);
            const elem = document.querySelector("#parallax");
            // Magic happens here
            function parallax(e) {
                let _w = window.innerWidth/2;
                let _h = window.innerHeight/2;
                let _mouseX = e.clientX;
                let _mouseY = e.clientY;
                let _depth1 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
                let _depth2 = `${50 - (_mouseX - _w) * 0.02}% ${50 - (_mouseY - _h) * 0.02}%`;
                let _depth3 = `${50 - (_mouseX - _w) * 0.06}% ${50 - (_mouseY - _h) * 0.06}%`;
                let x = `${_depth3}, ${_depth2}, ${_depth1}`;
                console.log(x);
                elem.style.backgroundPosition = x;
            }

        })();
    </script>
</body>
</html>
