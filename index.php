<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Darts 3D 4 Free</title>
    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="shortcut icon" href="TemplateData/favicon.ico" />
    <script src="TemplateData/UnityProgress.js"></script>
  </head>
  <body class="template">
    <div class="template-wrap clear">
      <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="600px" width="960px"></canvas>
      <br>
      <div class="logo"></div>
      <div class="fullscreen"><img src="TemplateData/fullscreen.png" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div>
      <div class="title">Darts 3D 4 Free</div>
    </div>
    <script type='text/javascript'>
    var Module = {
    TOTAL_MEMORY: 268435456,
    errorhandler: null, compatibilitycheck: null,
    backgroundColor: "#222C36", splashStyle: "Light",
    dataUrl: "Release/Darts.data", codeUrl: "Release/Darts.js",
    asmUrl: "Release/Darts.asm.js", memUrl: "Release/Darts.mem",
  };
</script>

<script src="https://unpkg.com/@vkontakte/vk-bridge/dist/browser.min.js"></script>

<script>
function AdInit () {vkBridge.send('VKWebAppInit');}

function showAd(){bridge.send("VKWebAppCheckNativeAds", {"ad_format": "interstitial"});

                  bridge.send("VKWebAppShowNativeAds", {ad_format:"interstitial"})
                  .then(data => console.log(data.result))
                  .catch(error => console.log(error));
                 }

</script>

<script src="Release/UnityLoader.js"></script>

  </body>
</html>
