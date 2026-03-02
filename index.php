<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IVF-RaBitQ - GPU-Native Approximate Nearest Neighbor Search</title>
<style>
body { font-family: 'Courier New', monospace; background: #1a1a2e; color: #eee; margin: 0; padding: 20px; }
.container { max-width: 1000px; margin: 0 auto; background: #16213e; border-radius: 15px; padding: 30px; }
h1 { color: #00d9ff; text-align: center; }
h2 { color: #e94560; border-bottom: 2px solid #0f3460; padding-bottom: 10px; }
.code-block { background: #0f3460; padding: 15px; border-radius: 8px; overflow-x: auto; }
pre { margin: 0; color: #a8ff60; }
table { width: 100%; border-collapse: collapse; margin: 20px 0; }
th, td { border: 1px solid #0f3460; padding: 12px; text-align: left; }
th { background: #e94560; }
.highlight { color: #00d9ff; font-weight: bold; }
.nav { position: fixed; top: 20px; right: 20px; background: #e94560; padding: 10px 20px; border-radius: 5px; }
.nav a { color: white; text-decoration: none; }
</style>
</head>
<body>
<div class="container">
<h1>🚀 IVF-RaBitQ</h1>
<p style="text-align: center; color: #888;">GPU-Native Approximate Nearest Neighbor Search with IVF + RaBitQ</p>

<h2>📖 What is IVF-RaBitQ?</h2>
<p>IVF-RaBitQ is a GPU-native ANNS (Approximate Nearest Neighbor Search) solution that combines:</p>
<ul>
<li><strong>IVF</strong> - Inverted File index for clustering</li>
<li><strong>RaBitQ</strong> - Range Binary Quantization for efficient compression</li>
</ul>

<h2>⚡ Performance Results</h2>
<table>
<tr><th>Metric</th><th>IVF-RaBitQ</th><th>vs CAGRA (graph-based)</th><th>vs IVF-PQ</th></tr>
<tr><td>Throughput (QPS)</td><td class="highlight">2.2× higher</td><td>1.3-5.6×</td><td>1.3-31.4×</td></tr>
<tr><td>Index Build Time</td><td class="highlight">7.7× faster</td><td>3.4-13.1×</td><td>Similar</td></tr>
<tr><td>Storage</td><td class="highlight">Much smaller</td><td>Less</td><td>Similar</td></tr>
<tr><td>Recall</td><td>~95%</td><td>Comparable</td><td>Higher</td></tr>
</table>

<h2>🔧 Core Algorithm</h2>

<h3>1. IVF Index Construction</h3>
<div class="code-block">
<pre># Step 1: Cluster vectors using K-means
centroids = kmeans(vectors, n_clusters=1024)

# Step 2: Assign each vector to nearest centroid  
inverted_lists = {}
for vec in vectors:
    cluster_id = find_nearest(vec, centroids)
    inverted_lists[cluster_id].append(vec)</pre>
</div>

<h3>2. RaBitQ Quantization</h3>
<div class="code-block">
<pre># RaBitQ: Range Binary Quantization
# Key insight: No codebook training needed!

def quantize(vector):
    # Normalize and rotate
    rotated = rotate(vector)
    
    # For each dimension, compute 1-bit code
    code = ""
    for dim in rotated:
        if dim > 0: code += "1"
        else: code += "0"
    
    return code  # Super compact!

def decode(code):
    # Reconstruct from binary codes
    return unrotate(code_to_vector(code))</pre>
</div>

<h3>3. GPU Search Pipeline</h3>
<div class="code-block">
<pre># GPU-optimized search
def search(query, n_probe=32):
    # Step 1: Find top-n clusters (GPU GEMM)
    cluster_dists = gemm(query, centroids)
    top_clusters = argtopk(cluster_dists, n_probe)
    
    # Step 2: RaBitQ filtering (1-bit codes)
    for cluster in top_clusters:
        codes = get_codes(cluster)
        filtered = bit_filter(query, codes)
        
        # Step 3: Refinement (if needed)
        candidates = refine(filtered, original_vectors)
    
    return topk(candidates, k)</pre>
</div>

<h2>🎯 Why It's Fast</h2>
<table>
<tr><th>Optimization</th><th>Technique</th><th>Benefit</th></tr>
<tr><td>GPU-native quantization</td><td>Parallel encoding</td><td>1M vectors/sec</td></tr>
<tr><td>Two-stage distance</td><td>Filter + Refine</td><td>Reduce compute</td></tr>
<tr><td>Fused search kernel</td><td>Single GPU kernel</td><td>Less memory traffic</td></tr>
<tr><td>Interleaved layout</td><td>Coalesced access</td><td>Cache efficiency</td></tr>
</table>

<h2>📚 References</h2>
<ul>
<li><a href="https://arxiv.org/abs/2602.23999" style="color: #00d9ff;">Paper: IVF-RaBitQ</a></li>
<li><a href="https://github.com/VectorDB-NTU/cuvs_rabitq" style="color: #00d9ff;">GitHub: cuVS implementation</a></li>
</ul>

<p style="text-align: center; color: #666; margin-top: 40px;">
<em>Made simple from research by Jifan Shi et al. (NTU & NVIDIA)</em>
</p>
</div>
</body>
</html>
