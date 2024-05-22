$(document).ready(function() {
    
    selectPage();
    selectModel();
    selectControls();

    function selectPage() {

        $('#home').show();
        $('#about').hide();
        $('#models').hide();
        $('#flickr').hide();
        $('#interaction').hide();
        $('#x3dModelTitle_coke').hide();
        $('#x3dModelTitle_sprite').hide();
        $('#x3dModelTitle_pepper').hide();
        $('#cokeDescription').hide();
        $('#spriteDescription').hide();
        $('#pepperDescription').hide();


        $('#navHome').click(function(){
            $('#home').show();
            $('#about').hide();
            $('#models').hide();
            $('#flickr').hide();
            $('#interaction').hide();
            $('#cokeDescription').hide();
            $('#spriteDescription').hide();
            $('#pepperDescription').hide();
            $('#navHome').removeClass("active");
            $('#navAbout').removeClass("active");
            $('#navModels').removeClass("active");
            $('#navFlickr').removeClass("active");
            $('#navHome').addClass("active");
        });

        $('#navAbout').click(function(){
            $('#home').hide();
            $('#about').show();
            $('#models').hide();
            $('#flickr').hide();
            $('#interaction').hide();
            $('#cokeDescription').hide();
            $('#spriteDescription').hide();
            $('#pepperDescription').hide();
            $('#navHome').removeClass("active");
            $('#navAbout').removeClass("active");
            $('#navModels').removeClass("active");
            $('#navFlickr').removeClass("active");
            $('#navAbout').addClass("active");
        });

        $('#navModels').click(function(){
            $('#home').hide();
            $('#about').hide();
            $('#models').show();
            $('#flickr').hide();
            $('#interaction').show();
            $('#x3dModelTitle_coke').show();
            $('#x3dModelTitle_sprite').hide();
            $('#x3dModelTitle_pepper').hide();
            $("#x3dCreationMethod_coke").show();
		    $("#x3dCreationMethod_sprite").hide();
		    $("#x3dCreationMethod_pepper").hide(); 
            $('#cokeDescription').show();
            $('#spriteDescription').hide();
            $('#pepperDescription').hide();
            $('#navHome').removeClass("active");
            $('#navAbout').removeClass("active");
            $('#navModels').removeClass("active");
            $('#navFlickr').removeClass("active");
            $('#navModels').addClass("active");
        });

        $('#navFlickr').click(function(){
            $('#home').hide();
            $('#about').hide();
            $('#models').hide();
            $('#flickr').show();
            $('#interaction').hide();
            $('#cokeDescription').hide();
            $('#spriteDescription').hide();
            $('#pepperDescription').hide();
            $('#navHome').removeClass("active");
            $('#navAbout').removeClass("active");
            $('#navModels').removeClass("active");
            $('#navAbout').removeClass("active");
            $('#navFlickr').addClass("active");
        });
    }

    function selectModel() {

        $('#navCoke').click(function(){
            $('#coke').show();
            $('#sprite').hide();
            $('#pepper').hide();
            $('#interaction').show();
            $('#x3dModelTitle_coke').show();
            $('#x3dModelTitle_sprite').hide();
            $('#x3dModelTitle_pepper').hide();
            $("#x3dCreationMethod_coke").show();
            $("#x3dCreationMethod_sprite").hide();
            $("#x3dCreationMethod_pepper").hide(); 
            $('#cokeDescription').show();
            $('#spriteDescription').hide(); 
            $('#pepperDescription').hide();
            $('#navCoke').removeClass("active");
            $('#navSprite').removeClass("active");
            $('#navPepper').removeClass("active");
            $('#navCoke').addClass("active");
        });

        $('#navSprite').click(function(){
            $('#coke').hide();
            $('#sprite').show();
            $('#pepper').hide();
            $('#interaction').show();
            $('#x3dModelTitle_coke').hide();
            $('#x3dModelTitle_sprite').show();
            $('#x3dModelTitle_pepper').hide();
            $("#x3dCreationMethod_coke").hide();
            $("#x3dCreationMethod_sprite").show();
            $("#x3dCreationMethod_pepper").hide(); 
            $('#cokeDescription').hide();
            $('#spriteDescription').show();
            $('#pepperDescription').hide();
            $('#navCoke').removeClass("active");
            $('#navSprite').removeClass("active");
            $('#navPepper').removeClass("active");
            $('#navSprite').addClass("active");
        });

        $('#navPepper').click(function(){
            $('#coke').hide();
            $('#sprite').hide();
            $('#pepper').show();
            $('#interaction').show();
            $('#x3dModelTitle_coke').hide();
            $('#x3dModelTitle_sprite').hide();
            $('#x3dModelTitle_pepper').show();
            $("#x3dCreationMethod_coke").hide();
            $("#x3dCreationMethod_sprite").hide();
            $("#x3dCreationMethod_pepper").show(); 
            $('#cokeDescription').hide();
            $('#spriteDescription').hide(); 
            $('#pepperDescription').show();
            $('#navCoke').removeClass("active");
            $('#navSprite').removeClass("active");
            $('#navPepper').removeClass("active");
            $('#navPepper').addClass("active");
        });
    }

    function selectControls() {

        $('#control-camera').show();
        $('#control-animation').hide();
        $('#control-rendering').hide();
        $('#control-lighting').hide();
        $('#nav-camera').removeClass("active");
        $('#nav-animation').removeClass("active");
        $('#nav-rendering').removeClass("active");
        $('#nav-lighting').removeClass("active");
        $('#nav-camera').addClass("active");

        $('#nav-camera').click(function(){
            $('#control-camera').show();
            $('#control-animation').hide();
            $('#control-rendering').hide();
            $('#control-lighting').hide();
            $('#nav-camera').removeClass("active");
            $('#nav-animation').removeClass("active");
            $('#nav-rendering').removeClass("active");
            $('#nav-lighting').removeClass("active");
            $('#nav-camera').addClass("active");
        });

        $('#nav-animation').click(function(){
            $('#control-camera').hide();
            $('#control-animation').show();
            $('#control-rendering').hide();
            $('#control-lighting').hide();
            $('#nav-camera').removeClass("active");
            $('#nav-animation').removeClass("active");
            $('#nav-rendering').removeClass("active");
            $('#nav-lighting').removeClass("active");
            $('#nav-animation').addClass("active");
        });

        $('#nav-rendering').click(function(){
            $('#control-camera').hide();
            $('#control-animation').hide();
            $('#control-rendering').show();
            $('#control-lighting').hide();
            $('#nav-camera').removeClass("active");
            $('#nav-animation').removeClass("active");
            $('#nav-rendering').removeClass("active");
            $('#nav-lighting').removeClass("active");
            $('#nav-rendering').addClass("active");
        });

        $('#nav-lighting').click(function(){
            $('#control-camera').hide();
            $('#control-animation').hide();
            $('#control-rendering').hide();
            $('#control-lighting').show();
            $('#nav-camera').removeClass("active");
            $('#nav-animation').removeClass("active");
            $('#nav-rendering').removeClass("active");
            $('#nav-lighting').removeClass("active");
            $('#nav-lighting').addClass("active");
        });
    }

});