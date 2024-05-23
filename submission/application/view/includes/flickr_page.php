<!-- Flickr webservice http://www.flickr.com/services/feeds/docs/photos_public/ -->
<div class="card text-left">
    <div class="card-header description-header">
        Flickr Search Service
    </div>
    <div class="card-body">
        <div>
            <h2> Search on Flickr Feed</h2>
            <!-- Text input box -->
            <div class="row">
                <div class="col-sm-9">
                    <div class="textInput">
                        <input type="text" value="Coca Cola Can" id="txt" />
                    </div>
                </div>
                <!-- Search Button -->
                <div class="col-sm-3">
                    <a href="#" class="btn btn-primary" onclick="loadImages();">Search</a>
                </div>
            </div>
            <!-- Results -->
            <div class="box">
                <hr>
                <h3 id="title"></h1>
                <h4 id="link"></h2>
                <p id="description"></p>
                <p id="modified"></p>
                <p id="generator"></p>
                <hr>
                <div id="images"></div>
            </div>
        </div>
    </div>
</div>