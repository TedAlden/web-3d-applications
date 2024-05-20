// function swap(selected) {
// 	document.getElementById('home').style.display = 'none';
// 	document.getElementById('coke').style.display = 'none';
// 	document.getElementById('sprite').style.display = 'none';
// 	document.getElementById('pepper').style.display = 'none';
// 	document.getElementById(selected).style.display = 'block';
// }

$(document).ready(function() {
    
    selectPage();
    selectModel();

    function selectPage() {

        $('#home').show();
        $('#about').hide();
        $('#models').hide();
        $('#interaction').hide();
        $('#cokeDescription').hide();
        $('#spriteDescription').hide();
        $('#pepperDescription').hide();


        $('#navHome').click(function(){
            $('#home').show();
            $('#about').hide();
            $('#models').hide();
            $('#interaction').hide();
            $('#cokeDescription').hide();
            $('#spriteDescription').hide();
            $('#pepperDescription').hide();
            $('#navHome').removeClass("active");
            $('#navAbout').removeClass("active");
            $('#navModels').removeClass("active");
            $('#navHome').addClass("active");
        });

        $('#navAbout').click(function(){
            $('#home').hide();
            $('#about').show();
            $('#models').hide();
            $('#interaction').hide();
            $('#cokeDescription').hide();
            $('#spriteDescription').hide();
            $('#pepperDescription').hide();
            $('#navHome').removeClass("active");
            $('#navAbout').removeClass("active");
            $('#navModels').removeClass("active");
            $('#navAbout').addClass("active");
        });

        $('#navModels').click(function(){
            $('#home').hide();
            $('#about').hide();
            $('#models').show();
            $('#interaction').show(); 
            $('#cokeDescription').show();
            $('#spriteDescription').hide();
            $('#pepperDescription').hide();
            $('#navHome').removeClass("active");
            $('#navAbout').removeClass("active");
            $('#navModels').removeClass("active");
            $('#navModels').addClass("active");
        });
    }

    function selectModel() {

        $('#navCoke').click(function(){
            $('#coke').show();
            $('#sprite').hide();
            $('#pepper').hide();
            $('#interaction').show(); 
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
            $('#cokeDescription').hide();
            $('#spriteDescription').hide(); 
            $('#pepperDescription').show();
            $('#navCoke').removeClass("active");
            $('#navSprite').removeClass("active");
            $('#navPepper').removeClass("active");
            $('#navPepper').addClass("active");
        });
    }

});