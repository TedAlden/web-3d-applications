/**
 * adapted from example code 'benskitchen.com'
 */

// Model switching

function cokeScene() {
    document.getElementById('SceneSwitch').setAttribute('whichChoice', 0);
}

function spriteScene() {
    document.getElementById('SceneSwitch').setAttribute('whichChoice', 1);
}

function pepperScene() {
    document.getElementById('SceneSwitch').setAttribute('whichChoice', 2);
}

// Animations

var spinning = false;

function spin() {
	spinning = !spinning;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation() {
	spinning = false;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel() {
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}

// Render

function wireframe() {
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function defaultRender() {

}

// Lights

var lightOn = true;

function headlight() {
	lightOn = !lightOn;
	document.getElementById('model__Headlight').setAttribute('headlight', lightOn.toString());
}

// Cameras

function cameraTop() {
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom() {
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}

function cameraLogo() {
	document.getElementById('model__CameraLogo').setAttribute('bind', 'true');
}

function cameraLabel() {
	document.getElementById('model__CameraLabel').setAttribute('bind', 'true');
}

function cameraPerspective() {
	document.getElementById('model__CameraPerspective').setAttribute('bind', 'true');
}