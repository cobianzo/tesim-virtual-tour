<html>
<head>

    <script src="posterlens/panolens/three.min.js"></script>
    <script src="posterlens/panolens/panolens.js"></script>
    <script src="posterlens/posterlens.js"></script>
    <link rel='stylesheet' id='posterlens-css'  href='posterlens/posterlens.css?ver=5.5' type='text/css' media='all' />


</head>

<body>

    <script>
     var datas = [];
    </script>
    <script type="text/javascript" src="./posterlens-config.js"></script> 
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.pl = document.querySelector('#posterlens-container').posterlens( datas[0] );

            // get Scene by name:
            const params = {
                type: 'poster3d',
                pos: Object.values(pl.viewer.camera.getWorldDirection(new THREE.Vector3()).multiplyScalar(300)), // this normalizes but not to unitary, but to 300 long
                animated: 'hover'
            }
            posterIndex = 1;
            for (var i=0; i< 360; i=i+10) {
                posterIndex = (posterIndex++ % 3) + 1;
                radius = 400;
                radians = THREE.Math.degToRad(i);
                var x = (radius *  Math.cos(radians));
                var y = (radius *  Math.sin(radians));
                const newParams = { ... params };
                
                newParams.name =  `poster_` + Math.floor(Math.random() * 10000),
                newParams.pos  = [x, 50, y];
                newParams.image = 'resources/poster'+posterIndex+'.jpg';
                newParams.hoverText = newParams.image;
                newParams.modal = 'resources/pdf.pdf';
                console.log(newParams.image);
                window.pl.createNewObjectFromParams(window.pl.viewer.panorama, newParams);
                // console.log(`angle:  ${i}º : ${x} ${y}`);
            }

            // Check whether control button is pressed
            document.addEventListener( 'keydown' ,function(event) {
                if (event.which == "17") window.pl.cntrlIsPressed = true;
            });
            document.addEventListener( 'keyup' ,function(event) {
                    window.pl.cntrlIsPressed = false;
            });

            window.OpacityTween = function(object) {
                object.material.opacity = 0;
                const t = new TWEEN.Tween( object.material ).to( { opacity: 1 }, 500);
                object.opacityTween = t;
                return t;
            }
            var enviromental = [
                'casita',
                'mujer',
                'natura',
            ];
            window.pl.viewer.addUpdateCallback( function() {
                //if (window.pl.cntrlIsPressed)

                const newDirection = window.pl.getCameraAngle('deg');
                if (newDirection === window.pl.viewer.camera.direction) 
                return;
                
                if (!pl.TweenAplied) {
                    enviromental.forEach( nam => {
                        const ob = pl.getObjectByName(nam);
                        if (!ob) return;
                        OpacityTween(ob);
                        pl.TweenAplied = true;
                     } );
                }

                if (!pl.enviromentalTweenPlayed && newDirection < 100 && newDirection > 25) {
                    // activate things.
                    pl.enviromentalTweenPlayed = true;
                    enviromental.forEach( o => {
                        const ob = pl.getObjectByName(o);
                        ob.opacityTween.start();
                    });
                }

                window.pl.viewer.camera.direction = newDirection;
            });

        });
    </script>
    <div id="posterlens-container" style='max-width: 1242px; height: 700px; margin:auto'></div>


</body>

</html>