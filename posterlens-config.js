datas[0] = {
    "autoRotate": 1,
    "autoRotateSpeed": 0.1,
    "worlds": [
      {
        "panorama": "resources/pano-v4.jpg",
        "name": "Hall",
        "innerPanorama": {
          "offset": [
            100,
            0,
            0
          ]
        },
        "hotspots": [
          {
            "type": "text-3d",
            "text": "Because neightbour matters !! ",
            "pos": [
              179.79961621727148,
              104.26249934492665,
              -164.9049734537105
            ],
            "scale": 0.11566298682885942,
            "size": 200,
            "name": "bigtext",
            "fontFamily": "posterlens/assets/fonts/Century_Gothic_Regular.js",
            "rot": [
              0,
              5.454604129445008,
              0
            ],
            "alwaysLookatCamera": true
          },
          {
            "name": "mujer",
            "type": "poster3d",
            "pos": [
              98.0352515947434,
              -6.794522387754494,
              70.37183901602869
            ],
            "image": "resources/mujer-animada.png",
            "modal": "resources/pdf.pdf",
            "rot": [
              0,
              4.089801957752406,
              0
            ],
            "scale": 5,
            "alwaysLookatCamera": true,
            "animatedMap": "3",
            "animatedMapSpeed": 1
          },
        //   {
        //     "name": "shadow",
        //     "type": "poster3d",
        //     "pos": [
        //       140,
        //       -126,
        //       163
        //     ],
        //     "image": "posterlens/assets/level2.png",
        //     "rot": [
        //       -1.9000000000000006,
        //       3.234515266638742,
        //       0
        //     ],
        //     "scale": 10,
        //     "alwaysLookatCamera": false,
        //     "animatedMap": "4",
        //     "animatedMapSpeed": 9
        //   },
          {
            "name": "mountains",
            "type": "poster3d",
            "pos": [
              173.83752515556233,
              47.95517935325857,
              325.1960599892847
            ],
            "image": "resources/mountains.png",
            "rot": [
              0,
              3.6325062310461935,
              0
            ],
            "scale": 41.77248169415655
          },
          {
            "name": "mountains small",
            "type": "poster3d",
            "pos": [
              440.4703488774625,
              115.62346658033391,
              22.023517443873125
            ],
            "image": "resources/mountains.png",
            "rot": [
              0,
              4.662430584662747,
              0
            ],
            "scale": 82.1,
            "alwaysLookatCamera": true
          },
          {
            "name": "door environment",
            "type": "poster3d",
            "pos": [
              122.76077111742909,
              37.8512377612073,
              218.92337515941523
            ],
            "image": "resources/environment.jpg",
            "sprite": true,
            "rot": [
              0,
              3.6526499654878397,
              0
            ],
            "scale": 214.3588810000002,
            "animated": "always",
            "hoverText": "Click to know all projects",
            "link": "Environment Pano"
          },
          {
            "name": "Text environment",
            "type": "text-2d-sprite",
            "pos": [
              147.70266899898874,
              -7.179990854117508,
              208.21973476940775
            ],
            "image": "https://images-na.ssl-images-amazon.com/images/I/91ovrqFkzkL._RI_SX200_.jpg",
            "text": "Because neighbours share the same home",
            "rot": [
              0.02,
              -2.08,
              0
            ],
            "scale": 50,
            "alwaysLookatCamera": false,
            "sprite": true
          },
          {
            "name": "casita",
            "type": "poster3d",
            "pos": [
              140.36927300682882,
              2.3011356230627675,
              31.065330911347363
            ],
            "image": "resources/casita.png",
            "rot": [
              0,
              4.494588089848271,
              0
            ],
            "scale": 10
          },
          {
            "name": "arboles",
            "type": "poster3d",
            "pos": [
              154.53025159626478,
              -9.499810548950704,
              -31.666035163169013
            ],
            "image": "resources/natura.png",
            "rot": [
              0,
              4.914508914534183,
              0
            ],
            "scale": 10,
            "alpha": "resources/natura-mask.jpg"
          },
          {
            "name": "text-3d-environment",
            "type": "text-3d",
            "pos": [
              95.43524186314056,
              -53.92091165267443,
              45.33173988499177
            ],
            "image": "https://images-na.ssl-images-amazon.com/images/I/91ovrqFkzkL._RI_SX200_.jpg",
            "fontFamily": "posterlens/assets/fonts/Century_Gothic_Regular.js",
            "text": "Environment",
            "rot": [
              -0.6,
              4.268940643964951,
              -0.54
            ],
            "scale": 0.1
          }
        ]
      },
      {
        "panorama": "resources/360pano.jpg",
        "name": "Environment Pano",
        "innerPanorama": {
          "offset": [
            100,
            0,
            0
          ]
        },
        "hotspots": [
            {
                "name": "door back hall",
                "type": "poster3d",
                "pos": [
                  -322.76077111742909,
                  155.8512377612073,
                  -300.92337515941523
                ],
                "image": "resources/environment.jpg",
                "sprite": true,
                "rot": [
                  0,
                  3.6526499654878397,
                  0
                ],
                "scale": 214.3588810000002,
                "animated": "always",
                "hoverText": "Back",
                "link": "Hall"
              },
        ]
      }
    ]
  }