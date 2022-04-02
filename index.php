<!DOCTYPE html>
<html>  
  <head>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script> 
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  </head>   

  <body>
    <a-scene embedded arjs>
      <a-entity scale=".1 .1 .1"> 
        <a-entity gltf-model="\Asssets\octo.glb"  scale="0.1 0.1 0.1" position="0 0 0" crossOrigin="anonymous">
        </a-entity>
        <a-marker-camera preset='hiro'></a-marker-camera>
        </a-scene>
      </body>
    </html>