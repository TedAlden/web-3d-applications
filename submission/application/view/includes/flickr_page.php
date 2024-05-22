<!-- Flickr webservice http://www.flickr.com/services/feeds/docs/photos_public/ -->
<div style="height: 900px;">
    <h1> Flickr Web Service</h1>
    <h2> Search on Flickr Feed</h2>
    <!-- Text input box -->
    <div class="textInput">
        <input type="text" value="Coca Cola Can" id="txt" />
    </div>
    <!-- Search Button -->
    <div class="btn">
        <button onclick="loadImages()">Search</button>
    </div>
    <!-- Results -->
    <div class="box">
        <h1 id="title"></h1>
        <h2 id="link"></h2>
        <p id="description"></p>
        <p id="modified"></p>
        <p id="generator"></p>
        <div id="images"></div>
    </div>
</div>