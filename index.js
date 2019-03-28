var coinMachineActivator = document.getElementById("activate-coin-machine");

coinMachineActivator.onclick = function() {
  coinMachineActivator.parentNode.removeChild(coinMachineActivator);
  var cssLink = document.createElement("link");
  cssLink.setAttribute("rel", "stylesheet");
  cssLink.setAttribute("type", "text/css");
  cssLink.setAttribute("href", "https://raw.githubusercontent.com/davidhartsough/COIN-Machine/master/dist/coin-machine.css");
  document.head.appendChild(cssLink);
  var script = document.createElement('script');
  script.src = "https://raw.githubusercontent.com/davidhartsough/COIN-Machine/master/dist/coin-machine.js";
  document.head.appendChild(script);
};
