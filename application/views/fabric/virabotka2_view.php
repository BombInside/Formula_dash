
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>morris.js</title>
  <meta name="description" content="">
  <meta name="author" content="Olly Smith">

  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/pygments.css">
  <link rel="stylesheet" href="css/morris.css">
  <script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="lines.html">Line &amp; Area Charts</a></li>
              <li><a href="bars.html">Bar Charts</a></li>
              <li><a href="donuts.html">Donut Charts</a></li>
            </ul>
          </div>
        </div>
      </div>
      <a class="github-ribbon" href="https://github.com/oesmith/morris.js"><img src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub"></a>
    </div>
    <div class="container">
      <div class="row docrow">
  <div class="span12 hero">
    <h1>morris.js</h1>
    <p class="tagline">
      good-looking charts shouldn't be difficult
    </p>
    <p>
      <a href="https://github.com/morrisjs/morris.js/archive/0.5.1.zip" class="btn btn-large btn-primary">Download v0.5.1</a>
      <br>
      <a href="#getting_started">or use our CDN</a>
    </p>
    <ul class="inline buttons">
      <li>
        <iframe src="http://ghbtns.com/github-btn.html?user=morrisjs&repo=morris.js&type=watch&count=true"
            allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
      </li>
      <li>
        <iframe src="http://ghbtns.com/github-btn.html?user=morrisjs&repo=morris.js&type=fork&count=true"
            allowtransparency="true" frameborder="0" scrolling="0" width="95" height="20"></iframe>
      </li>
      <li class="follow-button">
        <a href="https://twitter.com/olly_smith" class="twitter-follow-button" data-show-count="false">Follow @olly_smith</a>
      </li>
      <li class="share-button">
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://morrisjs.github.io/morris.js/" data-text="morris.js: good looking charts shouldn't be difficult" data-via="olly_smith">Tweet</a>
      </li>
    </ul>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
</div>

<hr>

<div class="row">
  <div class="span6">
    <div class="graph-container">
      <div class="caption">Jaguar 'E' Type vehicles in the UK</div>
      <div id="hero-graph" class="graph"></div>
    </div>
  </div>
  <div class="span6">
    <div class="graph-container">
      <div class="caption">iPhone CPU benchmarks</div>
      <div id="hero-bar" class="graph"></div>
    </div>
  </div>
</div>
<div class="row">
  <div class="span6">
    <div class="graph-container">
      <div class="caption">Quarterly Apple iOS device unit sales</div>
      <div id="hero-area" class="graph"></div>
    </div>
  </div>
  <div class="span6">
    <div class="graph-container">
      <div class="caption">Donut flavours</div>
      <div id="hero-donut" class="graph"></div>
    </div>
  </div>
</div>

<hr>

<div class="row">
  <div class="span3">
    <ul class="nav nav-list well">
      <li class="nav-header">Home</li>
      <li><a href="#getting_started">Getting started</a></li>
      <li><a href="#your_first_chart">Your first chart</a></li>
      <li><a href="#license">License</a></li>
    </ul>
  </div>

  <div class="span9" id="samples">

    
    <h2 id="getting_started">Getting started</h2>

<p>Add <strong>morris.js</strong> and its dependencies (<a href="http://jquery.com">jQuery</a> &amp; <a href="http://raphaeljs.com">Raphaël</a>) to your page.</p>
<div class='highlight'><pre><code class='html'><span class='lineno'>1</span> <span class='nt'>&lt;link</span> <span class='na'>rel=</span><span class='s'>&quot;stylesheet&quot;</span> <span class='na'>href=</span><span class='s'>&quot;http://cdn.oesmith.co.uk/morris-0.5.1.css&quot;</span><span class='nt'>&gt;</span>
<span class='lineno'>2</span> <span class='nt'>&lt;script </span><span class='na'>src=</span><span class='s'>&quot;//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js&quot;</span><span class='nt'>&gt;&lt;/script&gt;</span>
<span class='lineno'>3</span> <span class='nt'>&lt;script </span><span class='na'>src=</span><span class='s'>&quot;//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js&quot;</span><span class='nt'>&gt;&lt;/script&gt;</span>
<span class='lineno'>4</span> <span class='nt'>&lt;script </span><span class='na'>src=</span><span class='s'>&quot;http://cdn.oesmith.co.uk/morris-0.5.1.min.js&quot;</span><span class='nt'>&gt;&lt;/script&gt;</span>
</code></pre></div>
<p>If you don’t want to use the CDN-hosted assets, then you can extract them from the <a href="https://github.com/oesmith/morris.js/archive/0.5.1.zip">zip bundle</a> and upload them to your own site.</p>

    
    <h2 id="your_first_chart">Your first chart</h2>

<p>Start by adding a <code>&lt;div&gt;</code> to your page that will contain your chart. Make sure it has an ID so you can refer to it in your Javascript later.</p>
<div class='highlight'><pre><code class='html'><span class='nt'>&lt;div</span> <span class='na'>id=</span><span class='s'>&quot;myfirstchart&quot;</span> <span class='na'>style=</span><span class='s'>&quot;height: 250px;&quot;</span><span class='nt'>&gt;&lt;/div&gt;</span>
</code></pre></div>
<p><em>Note: in order to display something, you’ll need to have given the div some dimensions. Here I’ve used inline CSS just for illustration.</em></p>

<p>Next add a <code>&lt;script&gt;</code> block to the end of your page, containing the following javascript code:</p>
<div class='highlight'><pre><code class='javascript'><span class='k'>new</span> <span class='nx'>Morris</span><span class='p'>.</span><span class='nx'>Line</span><span class='p'>({</span>
  <span class='c1'>// ID of the element in which to draw the chart.</span>
  <span class='nx'>element</span><span class='o'>:</span> <span class='s1'>&#39;myfirstchart&#39;</span><span class='p'>,</span>
  <span class='c1'>// Chart data records -- each entry in this array corresponds to a point on</span>
  <span class='c1'>// the chart.</span>
  <span class='nx'>data</span><span class='o'>:</span> <span class='p'>[</span>
    <span class='p'>{</span> <span class='nx'>year</span><span class='o'>:</span> <span class='s1'>&#39;2008&#39;</span><span class='p'>,</span> <span class='nx'>value</span><span class='o'>:</span> <span class='mi'>20</span> <span class='p'>},</span>
    <span class='p'>{</span> <span class='nx'>year</span><span class='o'>:</span> <span class='s1'>&#39;2009&#39;</span><span class='p'>,</span> <span class='nx'>value</span><span class='o'>:</span> <span class='mi'>10</span> <span class='p'>},</span>
    <span class='p'>{</span> <span class='nx'>year</span><span class='o'>:</span> <span class='s1'>&#39;2010&#39;</span><span class='p'>,</span> <span class='nx'>value</span><span class='o'>:</span> <span class='mi'>5</span> <span class='p'>},</span>
    <span class='p'>{</span> <span class='nx'>year</span><span class='o'>:</span> <span class='s1'>&#39;2011&#39;</span><span class='p'>,</span> <span class='nx'>value</span><span class='o'>:</span> <span class='mi'>5</span> <span class='p'>},</span>
    <span class='p'>{</span> <span class='nx'>year</span><span class='o'>:</span> <span class='s1'>&#39;2012&#39;</span><span class='p'>,</span> <span class='nx'>value</span><span class='o'>:</span> <span class='mi'>20</span> <span class='p'>}</span>
  <span class='p'>],</span>
  <span class='c1'>// The name of the data record attribute that contains x-values.</span>
  <span class='nx'>xkey</span><span class='o'>:</span> <span class='s1'>&#39;year&#39;</span><span class='p'>,</span>
  <span class='c1'>// A list of names of data record attributes that contain y-values.</span>
  <span class='nx'>ykeys</span><span class='o'>:</span> <span class='p'>[</span><span class='s1'>&#39;value&#39;</span><span class='p'>],</span>
  <span class='c1'>// Labels for the ykeys -- will be displayed when you hover over the</span>
  <span class='c1'>// chart.</span>
  <span class='nx'>labels</span><span class='o'>:</span> <span class='p'>[</span><span class='s1'>&#39;Value&#39;</span><span class='p'>]</span>
<span class='p'>});</span>
</code></pre></div>
<p>Assuming everything’s working correctly, you should see the following chart on your page:</p>
<div class='graph-container'>
  <div class='graph' id='examplefirst'> </div>
</div>

    
    <h2 id="what_next">What Next?</h2>

<p>Check out the rest of the documentation:</p>

<ul>
<li><a href="lines.html">Line and area charts</a></li>

<li><a href="bars.html">Bar charts</a></li>

<li><a href="donuts.html">Donut charts</a></li>
</ul>

<p>Also, check out Ryan Bates’ excellent RailsCast <a href="http://railscasts.com/episodes/223-charts-graphs-revised">#223 Graphs and Charts</a> (note: requires subscription).</p>

    
    <h2 id="license">License</h2>

<p>Simplified BSD License:</p>

<pre><code>Copyright (c) 2013, Olly Smith
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this
list of conditions and the following disclaimer.
2. Redistributions in binary form must reproduce the above copyright notice,
this list of conditions and the following disclaimer in the documentation
and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS &quot;AS IS&quot; AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</code></pre>

  </div>
</div>


      <hr>

      <footer>
        <p>&copy; Olly Smith 2013</p>
      </footer>
    </div> <!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

<script src="js/libs/bootstrap/transition.js"></script>
<script src="js/libs/bootstrap/collapse.js"></script>

<script src="js/libs/raphael-2.0.2.min.js"></script>
<script src="js/morris.js"></script>
<!-- <script src="http://static.jsbin.com/js/embed.js"></script> -->

<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script>
  var _gaq=[['_setAccount','UA-15524929-3'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
