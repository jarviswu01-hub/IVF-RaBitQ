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
.problem-box { background: #ff6b6b; color: white; padding: 25px; border-radius: 20px; margin: 25px 0; }
.trick-box { background: #feca57; padding: 20px; border-radius: 15px; margin: 20px 0; }
.toy-box { display: flex; justify-content: space-around; flex-wrap: wrap; margin: 25px 0; }
.toy { background: #ff9ff3; padding: 25px; border-radius: 20px; text-align: center; margin: 12px; min-width: 110px; font-size: 1.4em; }
.steps { background: #e0f7fa; padding: 20px; border-radius: 15px; margin: 25px 0; border: 3px dashed #26c6da; }
.step { margin: 18px 0; font-size: 1.2em; padding-left: 50px; position: relative; }
.step::before { content: attr(data-emoji); position: absolute; left: 0; font-size: 1.8em; }
.results-table, .time-table { width: 100%; border-collapse: collapse; margin: 25px 0; font-size: 1.1em; }
.results-table th, .results-table td, .time-table th, .time-table td { border: 3px solid #667eea; padding: 18px; text-align: center; }
.results-table th, .time-table th { background: #667eea; color: white; }
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
<h2>🤔 What's the Magic About?</h2>
<p>You have a GIANT library with <strong>millions of books</strong> 📚✨</p>
<p>Someone says: <em>"I want a book just like this one!"</em></p>
<p>Normal search = slow and boring 😴</p>
<p><strong>IVF-RaBitQ</strong> = magic speed + tiny storage! ⚡💨</p>
<div class="problem-box">
<h2>🧩 The HUGE Problem</h2>
<p>Computers look for similar things everywhere:</p>
<ul>
<li>🔍 Google similar pages</li>
<li>📺 YouTube "watch next" videos</li>
<li>🖼️ TikTok / Instagram recommendations</li>
<li>🤖 ChatGPT finding answers</li>
</ul>
<p><strong>Millions of things → takes too long! ⏳😫</strong></p>
</div>
<h2>💡 Two Super Tricks + GPU Friends!</h2>
<div class="trick-box">
<h3>Trick 1: Giant Toy Boxes! 📦 (This is IVF)</h3>
<p>Put similar toys in the same box!</p>
<div class="toy-box">
<div class="toy">🧸<br>Teddies</div>
<div class="toy">🚗<br>Cars</div>
<div class="toy">🦁<br>Lions</div>
<div class="toy">🍎<br>Fruits</div>
</div>
<p>Want teddy? → Only check the Teddy Box! Fast! ⚡</p>
</div>
<div class="trick-box">
<h3>Trick 2: Super Short Secret Notes! 📝 (This is RaBitQ)</h3>
<p>Long note: "A big fluffy brown teddy with a red bow and soft paws..."</p>
<p>Short magic note: <strong>"brown fluffy +"</strong> (just 1 bit per idea!)</p>
<p>RaBitQ turns long descriptions into tiny yes/no codes — still very accurate! 🪄</p>
</div>
<div class="trick-box">
<h3>Extra Power: GPU = 1000 Tiny Helpers! 🎮👯</h3>
<p>CPU = 1 friend solving puzzle slowly</p>
<p>GPU = 1000 friends working together → lightning fast! ⚡</p>
</div>
<h2>🛤️ How It Really Works — Step by Step Adventure!</h2>
<div class="steps">
<div class="step" data-emoji="1️⃣">Put all books into groups (like toy boxes) using IVF — big similar clusters!</div>
<div class="step" data-emoji="2️⃣">Spin every book with a magic random twist (rotation) — makes magic work better!</div>
<div class="step" data-emoji="3️⃣">Write super short yes/no note for each book (RaBitQ binary code)</div>
<div class="step" data-emoji="4️⃣">When friend asks for similar book:</div>
<div class="step" data-emoji="→">Twist their book the same way</div>
<div class="step" data-emoji="→">Only look in the most similar boxes (nprobe boxes)</div>
<div class="step" data-emoji="→">Compare short notes super fast (bit tricks!)</div>
<div class="step" data-emoji="5️⃣">Return the best matches — quick & accurate! 🎉</div>
</div>
<h2>⚡ Search Time Showdown! How Fast Is Magic vs Old Ways?</h2>
<p>Real tests from big libraries (like Milvus & research) show how much faster IVF-RaBitQ is:</p>
<table class="time-table">
<tr><th>Method</th><th>Speed (QPS - higher = faster!)</th><th>Compared to Old IVF-Flat</th><th>Recall (how good?)</th><th>Memory</th></tr>
<tr><td>Old Full Scan (brute force)</td><td>Very slow (~1×)</td><td>1×</td><td>100% perfect</td><td>Huge</td></tr>
<tr><td>Basic IVF-Flat (no compression)</td><td>~236 QPS</td><td>1× (baseline)</td><td>~95%</td><td>Full size</td></tr>
<tr><td>Old IVF + PQ (common compression)</td><td>~420–611 QPS</td><td>~2–3×</td><td>~79–94%</td><td>~25% size</td></tr>
<tr><td><strong>IVF-RaBitQ (our magic!)</strong></td><td>~648–898 QPS</td><td><strong>3–4× faster</strong> (up to 40× in tuned tests!)</td><td>~94–99%</td><td>~3–4% size (32× smaller!)</td></tr>
<tr><td>HNSW (fancy graph way)</td><td>Fast in RAM, varies</td><td>10–30× sometimes</td><td>Very high~95–99%</td><td>Medium–high</td></tr>
</table>
<p><small>Note: QPS = Queries Per Second (how many searches in 1 second). Higher = faster! Numbers from Milvus 2.6+, LanceDB, RaBitQ paper & benchmarks (2025–2026). Exact speed depends on computer, data size, GPU/CPU.</small></p>
<h2>🎮 Play Time! Magic Library Search Game</h2>
<p>Try asking for toys — watch the magic timer show how fast it finds things!</p>
<input type="text" id="search-box" placeholder="e.g. fluffy teddy, fast car, lion king, gpu helpers, brown bear...">
<button id="search-btn" onclick="simulateSearch()">Search the Magic Library! 🔍✨</button>
<div id="timer" class="timer"></div>
<div id="search-result"></div>
</div>
<script>
let isSearching = false;
function simulateSearch() {
if (isSearching) return;
isSearching = true;
const btn = document.getElementById('search-btn');
btn.disabled = true;
const timerDiv = document.getElementById('timer');
const resultDiv = document.getElementById('search-result');
timerDiv.innerHTML = 'Searching magic boxes... ⏳';
resultDiv.innerHTML = '';
const input = document.getElementById('search-box').value.toLowerCase().trim();
if (!input) {
finishSearch('Oops! Write something fun to search! 🧸🚀', 'slow');
return;
}
// Toy database
const toys = [
{name: "Fluffy Teddy Bear", tags: ["teddy", "bear", "fluffy", "brown", "soft", "toy"], score: 0},
{name: "Red Race Car", tags: ["car", "race", "red", "fast", "zoom"], score: 0},
{name: "Brave Lion King", tags: ["lion", "king", "brave", "roar", "wild"], score: 0},
{name: "Magic GPU Helpers", tags: ["gpu", "helpers", "fast", "many", "friends", "power"], score: 0},
{name: "Short Secret Note Book", tags: ["short", "note", "secret", "description", "rabbitq", "rabitq"], score: 0},
{name: "Toy Box Group", tags: ["box", "group", "ivf", "cluster", "similar"], score: 0}
];
const words = input.split(/\s+/);
toys.forEach(toy => {
toy.score = 0;
words.forEach(word => {
if (toy.tags.some(tag => tag.includes(word) || word.includes(tag))) {
toy.score += 1;
}
});
});
toys.sort((a, b) => b.score - a.score);
let message = '';
let speed = 'medium'; // fast / medium / slow
if (toys[0].score >= 3) {
message = `Lightning fast! Found <strong>${toys[0].name}</strong> — super match! 🎉⚡`;
speed = 'fast';
} else if (toys[0].score >= 1) {
message = `Quick find! <strong>${toys[0].name}</strong> — great match! 😊✨`;
speed = 'medium';
} else {
const fun = [
"Wow — a super rare fluffy friend appeared after a tiny wait! 🧸",
"Zoom! Fast car just raced in! 🚗💨",
"Roar! Lion wants to play! 🦁",
"Many GPU friends helping super fast! 🎮👯",
"Short magic note found — secret unlocked! 📝🪄"
];
message = fun[Math.floor(Math.random() * fun.length)];
speed = 'slow';
}
// Fake timer animation (based on "difficulty")
let baseTime = speed === 'fast' ? 300 : speed === 'medium' ? 800 : 1800;
let elapsed = 0;
const interval = setInterval(() => {
elapsed += 100;
timerDiv.innerHTML = `Thinking with GPU friends... ${elapsed} ms ⏱️`;
if (elapsed >= baseTime) {
clearInterval(interval);
finishSearch(message, speed);
}
}, 100);
}
function finishSearch(msg, spd) {
clearInterval(interval);
const finalTime = spd === 'fast' ? '320 ms' : spd === 'medium' ? '780 ms' : '1,650 ms';
timerDiv.innerHTML = `Search finished in <strong>${finalTime}</strong>! 🚀`;
resultDiv.innerHTML = `
<span class="highlight">${spd === 'fast' ? '⚡' : spd === 'medium' ? '✨' : '⏳'} ${msg}</span><br><br>
<span style="color:#555; font-size:0.95em;">
Step 1: Looking in similar groups... 📦<br>
Step 2: Checking short magic notes... 📝<br>
Step 3: Comparing fast with GPU helpers... 👯<br>
</span>
`;
btn.disabled = false;
isSearching = false;
}
</script>
</body>
</html>
