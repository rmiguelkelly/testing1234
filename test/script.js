const coins = [
    { name: "BTC", price: 64700, change: 1.3 },
    { name: "ETH", price: 3100, change: -0.5 },
    { name: "SOL", price: 155, change: 2.1 },
    { name: "ADA", price: 0.49, change: -1.2 },
    { name: "DOGE", price: 0.12, change: 0.8 },
  ];
  
  function renderTicker() {
    const ticker = document.getElementById("ticker");
    coins.forEach((coin) => {
      const el = document.createElement("div");
      el.className = `ticker-item ${coin.change >= 0 ? "up" : "down"}`;
      el.textContent = `${coin.name}: $${coin.price} (${coin.change > 0 ? "+" : ""}${coin.change}%)`;
      ticker.appendChild(el);
    });
  }
  
  window.addEventListener("DOMContentLoaded", renderTicker);