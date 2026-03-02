<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVF-RaBitQ - A Fun Guide for Kids! 🚀</title>
    <style>
        body {
            font-family: 'Comic Sans MS', 'Chalkboard SE', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        h1 {
            text-align: center;
            color: #667eea;
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        h2 {
            color: #764ba2;
            border-bottom: 3px dashed #667eea;
            padding-bottom: 10px;
        }
        .problem-box {
            background: #ff6b6b;
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin: 20px 0;
        }
        .solution-box {
            background: #4ecdc4;
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin: 20px 0;
        }
        .trick-box {
            background: #feca57;
            padding: 15px;
            border-radius: 10px;
            margin: 15px 0;
        }
        .toy-box {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 20px 0;
        }
        .toy {
            background: #ff9ff3;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            margin: 10px;
            min-width: 100px;
        }
        .results-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .results-table th, .results-table td {
            border: 2px solid #667eea;
            padding: 15px;
            text-align: center;
        }
        .results-table th {
            background: #667eea;
            color: white;
        }
        .results-table td {
            background: #f0f0f0;
        }
        .highlight {
            background: #a8e6cf;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .emoji {
            font-size: 2em;
        }
        .nav-buttons {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
        .nav-btn {
            background: #667eea;
            color: white;
            border: none;
            padding: 15px 25px;
            border-radius: 50px;
            cursor: pointer;
            font-size: 1.2em;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            transition: transform 0.3s;
        }
        .nav-btn:hover {
            transform: scale(1.1);
        }
        .search-demo {
            background: #eee;
            padding: 20px;
            border-radius: 15px;
            margin: 20px 0;
        }
        .search-box {
            width: 70%;
            padding: 15px;
            font-size: 1.2em;
            border: 3px solid #667eea;
            border-radius: 50px;
            outline: none;
        }
        .search-btn {
            padding: 15px 30px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1.2em;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 IVF-RaBitQ</h1>
        <p style="text-align: center; font-size: 1.3em;">A Fun Guide for Kids!</p>
        
        <h2>🤔 What is This?</h2>
        <p>Imagine you have a <strong>magic library</strong> with millions of books 📚</p>
        <p>And someone asks: <em>"Find a book SIMILAR to this one!"</em></p>
        <p><strong>How do you find it FAST?</strong> ⚡</p>
        <p>That's exactly what <strong>IVF-RaBitQ</strong> does!</p>
        
        <div class="problem-box">
            <h2>🧩 The Big Problem</h2>
            <p>Computers today search through HUGE amounts of stuff:</p>
            <ul>
                <li>🔍 Google finding similar websites</li>
                <li>📺 YouTube recommending videos</li>
                <li>🤖 AI chatbots finding answers</li>
            </ul>
            <p><strong>Searching millions of things takes FOREVER! 😫</strong></p>
        </div>
        
        <h2>💡 The Solution: Two Amazing Tricks!</h2>
        
        <div class="trick-box">
            <h3>Trick #1: Sort into Boxes! 📦</h3>
            <p>Think about your toys!</p>
            <div class="toy-box">
                <div class="toy">🧸<br>Bears</div>
                <div class="toy">🚗<br>Cars</div>
                <div class="toy">📚<br>Books</div>
            </div>
            <p>When you want a teddy bear → just look in the Teddy Bear box!</p>
            <p>This is called <strong>IVF</strong> - it groups similar things together!</p>
        </div>
        
        <div class="trick-box">
            <h3>Trick #2: Short Descriptions! 📝</h3>
            <p>Instead of describing EVERY detail:</p>
            <p>❌ Long: <em>"A big fluffy brown teddy bear with soft cotton and black button eyes"</em></p>
            <p>✅ Short: <strong>"Brown fluffy bear"</strong></p>
            <p>Computers can search faster with short descriptions!</p>
            <p>This is called <strong>RaBitQ</strong> - smart compression!</p>
        </div>
        
        <h2>🎮 Why Use GPUs?</h2>
        <p><strong>GPU = Many Tiny Helpers!</strong> 👯</p>
        <div class="trick-box">
            <p>🖥️ <strong>CPU</strong> = 1 person solving a puzzle 🙋</p>
            <p>🎮 <strong>GPU</strong> = 1000 people solving puzzles together 🙋‍♀️🙋‍♂️</p>
        </div>
        <p>GPUs can search MUCH faster because many helpers work at once!</p>
        
        <h2>📊 Cool Results!</h2>
        <table class="results-table">
            <tr>
                <th>What We Measure</th>
                <th>IVF-RaBitQ</th>
                <th>Old Way</th>
            </tr>
            <tr>
                <td>Speed ⚡</td>
                <td><strong>2.2x faster!</strong></td>
                <td>Normal</td>
            </tr>
            <tr>
                <td>Build Time 🏗️</td>
                <td><strong>7.7x faster!</strong></td>
                <td>Normal</td>
            </tr>
            <tr>
                <td>Storage 💾</td>
                <td><strong>Much smaller!</strong></td>
                <td>Normal</td>
            </tr>
        </table>
        
        <h2>🎓 Remember!</h2>
        <ol>
            <li><strong>Group similar things</strong> → Like sorting toys into boxes</li>
            <li><strong>Use short descriptions</strong> → Like writing a summary</li>
            <li><strong>Get many friends to help</strong> → Like GPU helpers</li>
        </ol>
        
        <h2>🌟 Why Is This Important?</h2>
        <ul>
            <li>🔍 Faster Google searches</li>
            <li>🎬 Better YouTube recommendations</li>
            <li>🤖 Smarter AI chatbots</li>
            <li>💰 Costs less money!</li>
            <li>🌱 Uses less energy!</li>
        </ul>
        
        <div class="search-demo">
            <h3>🔍 Try It! Search Simulation</h3>
            <input type="text" class="search-box" placeholder="What are you looking for?">
            <button class="search-btn" onclick="simulateSearch()">Search! 🔍</button>
            <p id="search-result"></p>
        </div>
        
        <p style="text-align: center; font-size: 1.5em; color: #667eea;">
            <strong>Now YOU understand how computers search fast!</strong> 🎉
        </p>
        
        <p style="text-align: center; color: #888;">
            <em>Made simple from a real science paper by smart people at NTU and NVIDIA!</em>
        </p>
    </div>
    
    <script>
        function simulateSearch() {
            const queries = [
                "Finding teddy bear in box (IVF)",
                "Using short description (RaBitQ)",
                "Many friends helping (GPU)"
            ];
            const result = queries[Math.floor(Math.random() * queries.length)];
            document.getElementById('search-result').innerHTML = 
                '<span class="highlight">⚡ Found it! ' + result + '</span>';
        }
    </script>
</body>
</html>
