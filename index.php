<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IVF-RaBitQ - Super Fun Magic Library Adventure! 🚀🐰</title>
<style>
body { font-family: 'Comic Sans MS', 'Chalkboard SE', cursive; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; margin: 0; padding: 20px; color: #333; }
.container { max-width: 900px; margin: 0 auto; background: white; border-radius: 25px; padding: 35px; box-shadow: 0 15px 40px rgba(0,0,0,0.4); }
h1 { text-align: center; color: #667eea; font-size: 3em; margin: 0 0 10px; }
h2 { color: #764ba2; border-bottom: 4px dashed #667eea; padding-bottom: 12px; margin-top: 40px; }
.time-table { width: 100%; border-collapse: collapse; margin: 25px 0; font-size: 1.1em; }
.time-table th, .time-table td { border: 3px solid #667eea; padding: 18px; text-align: center; }
.time-table th { background: #667eea; color: white; }
.highlight { background: #a8e6cf; padding: 8px 14px; border-radius: 10px; font-weight: bold; }
#search-result { min-height: 120px; margin-top: 20px; font-size: 1.3em; }
input, button { padding: 12px 20px; font-size: 1.2em; border-radius: 12px; border: 2px solid #764ba2; margin: 10px 5px; }
button { background: #764ba2; color: white; cursor: pointer; }
button:hover { background: #5e3a8c; }
button:disabled { background: #aaa; cursor: not-allowed; }
.timer { font-size: 1.4em; color: #ff6b6b; font-weight: bold; margin: 10px 0; }
</style>
</head>
<body>
<div class="container">
<h1>🚀 IVF-RaBitQ 🐰</h1>
<p style="text-align: center; font-size: 1.5em; color: #555;">The Magic Library That Finds Similar Books SUPER FAST!</p>
<h2>⚡ Search Time Showdown! How Fast Is Magic vs Old Ways?</h2>
<table class="time-table">
<tr><th>Method</th><th>Speed (higher QPS = faster)</th><th>Compared to old way</th><th>Accuracy</th></tr>
<tr><td>Old full scan</td><td>Very slow (~1×)</td><td>1×</td><td>100%</td></tr>
<tr><td>Basic IVF-Flat</td><td>~200–250 QPS</td><td>1×</td><td>~95%</td></tr>
<tr><td>IVF + old PQ</td><td>~400–600 QPS</td><td>2–3×</td><td>80–94%</td></tr>
<tr><td><strong>IVF-RaBitQ (magic!)</strong></td><td>~650–900+ QPS</td><td><strong>3–4× faster</strong> (up to 40× in best cases)</td><td>94–99%</td></tr>
</table>
<h2>🎮 Try the Magic Search!</h2>
<input type="text" id="search-box" placeholder="e.g. fluffy teddy, fast car, gpu helpers...">
<button id="search-btn">Search! 🔍✨</button>
<div id="timer" class="timer"></div>
<div id="search-result"></div>
</div>
<script>
const btn = document.getElementById('search-btn');
const timerDiv = document.getElementById('timer');
const resultDiv = document.getElementById('search-result');
btn.addEventListener('click', simulateSearch);
function simulateSearch() {
if (btn.disabled) return;
btn.disabled = true;
btn.textContent = "Searching...";
timerDiv.textContent = "Thinking with GPU friends... ⏳";
resultDiv.innerHTML = "";
const input = document.getElementById('search-box').value.toLowerCase().trim();
if (!input) {
finish("Oops! Please type something fun! 🧸", "slow", 1800);
return;
}
// Simple toy matching logic
const toys = [
{name: "Fluffy Teddy Bear", tags: ["teddy", "bear", "fluffy", "brown"]},
{name: "Red Race Car", tags: ["car", "race", "fast", "red"]},
{name: "Brave Lion", tags: ["lion", "roar", "king"]},
{name: "GPU SuperHelpers", tags: ["gpu", "fast", "helpers", "many"]},
{name: "Magic Short Note", tags: ["short", "note", "rabbitq", "rabitq"]}
];
let score = 0;
const words = input.split(/\s+/);
let bestMatch = "a mystery friend";
toys.forEach(toy => {
let toyScore = 0;
words.forEach(w => {
if (toy.tags.some(t => t.includes(w) || w.includes(t))) toyScore++;
});
if (toyScore > score) {
score = toyScore;
bestMatch = toy.name;
}
});
let message = "";
let speedClass = "medium";
if (score >= 2) {
message = `Super fast match! Found <strong>${bestMatch}</strong>! 🎉⚡`;
speedClass = "fast";
} else if (score >= 1) {
message = `Nice! Found <strong>${bestMatch}</strong> — good match! ✨`;
speedClass = "medium";
} else {
message = "Wow — a rare surprise appeared! 🌟 (try better keywords next time)";
speedClass = "slow";
}
// Fake timer
const times = { fast: 450, medium: 950, slow: 1800 };
const fakeMs = times[speedClass];
setTimeout(() => {
finish(message, speedClass, fakeMs);
}, fakeMs);
}
function finish(msg, speedClass, ms) {
const emoji = speedClass === "fast" ? "⚡" : speedClass === "medium" ? "✨" : "⏳";
timerDiv.innerHTML = `Done in <strong>${ms} ms</strong>! 🚀`;
resultDiv.innerHTML = `<span class="highlight">${emoji} ${msg}</span>`;
btn.disabled = false;
btn.textContent = "Search! 🔍✨";
}
</script>
</body>
</html>
