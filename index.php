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
            if (0) // this works
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
                //console.log(newParams.image);
                window.pl.createNewObjectFromParams(window.pl.viewer.panorama, newParams);
                // console.log(`angle:  ${i}º : ${x} ${y}`);
            }

            // animation to show items when they appear on screen
            window.OpacityTween = function(object) {
                object.material.opacity = 0;
                const t = new TWEEN.Tween( object.material ).to( { opacity: 1 }, 500);
                object.opacityTween = t;
                return t;
            }
            window.PopupTween = function(object) {
                object.originalPositionY = parseFloat(object.position.y);
                object.position.y = -100;
                window.animPos = { y : object.position.y };
                const t = new TWEEN.Tween( window.animPos ).to( { y: object.originalPositionY }, 500).onUpdate(()=> object.position.y = window.animPos.y ).easing( TWEEN.Easing.Elastic.Out );
                object.popupTween = t;
                return t;
            }

            var enviromental = {
                'casita': [25, 100] ,
                'mujer': [25, 100],
                'natura': [25, 100],
            };
            // this doesnt recongineze objects becasue they are not still created. Should be done when created.
            Object.keys(enviromental).forEach( k => {
                const [min, max] = enviromental[k];
                const object = pl.getObjectByName(k);
                
                if (!object) return;
                // init setup for animation (hide object)
                object.originalPositionY = object.position.y;
                object.position.y = -200;
                const t = new TWEEN.Tween( object.position ).to( { y: object.originalPositionY }, 500).easing( TWEEN.Easing.Elastic.Out );;
                object.popupTween = t;
                object.popupAnimationFn = () => {
                    const angle = window.pl.viewer.camera.direction;

                    if ( angle < max && angle > min) {
                        object.popupTween.start();
                        window.pl.viewer.addUpdateCallback( object.popupAnimationFn );
                    }
                }
                window.pl.viewer.addUpdateCallback( object.popupAnimationFn );
            })
            

            window.pl.viewer.addUpdateCallback( function() {
                //if (window.pl.controlIsPressed)

                // update useful variable.
                const newDirection = window.pl.getCameraAngle('deg');
                if (newDirection === window.pl.viewer.camera.direction) 
                return;
               

                window.pl.viewer.camera.direction = newDirection;
            });

        });
    </script>
    <div id="posterlens-container" style='max-width: 1242px; height: 700px; margin:auto'></div>


</body>

</html>