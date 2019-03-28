var coinMachineActivator = document.getElementById("activate-coin-machine");

coinMachineActivator.onclick = function() {
  coinMachineActivator.parentNode.removeChild(coinMachineActivator);
  var cssLink = document.createElement("link");
  cssLink.setAttribute("rel", "stylesheet");
  cssLink.setAttribute("type", "text/css");
  cssLink.setAttribute("href", "https://cdn.jsdelivr.net/gh/davidhartsough/COIN-Machine/dist/coin-machine.css");
  document.head.appendChild(cssLink);
  var script = document.createElement('script');
  script.src = "https://cdn.jsdelivr.net/gh/davidhartsough/COIN-Machine/dist/coin-machine.js";
  document.head.appendChild(script);
};
