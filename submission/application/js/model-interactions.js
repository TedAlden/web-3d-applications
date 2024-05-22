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
	document.getElementById('model__RotationTimerCoke').setAttribute('enabled', spinning.toString());
	// document.getElementById('model__RotationTimerSprite').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerPepper').setAttribute('enabled', spinning.toString());
}

function stopRotation() {
	spinning = false;
	document.getElementById('model__RotationTimerCoke').setAttribute('enabled', spinning.toString());
	// document.getElementById('model__RotationTimerSprite').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerPepper').setAttribute('enabled', spinning.toString());
}

function animateModel() {
    if (!spinning) {
        document.getElementById('model__RotationTimerCoke').setAttribute('enabled', 'true');
		// document.getElementById('model__RotationTimerSprite').setAttribute('enabled', 'true');
		document.getElementById('model__RotationTimerPepper').setAttribute('enabled', 'true');
	} else {
        document.getElementById('model__RotationTimerCoke').setAttribute('enabled', 'false');
		// document.getElementById('model__RotationTimerSprite').setAttribute('enabled', 'false');
		document.getElementById('model__RotationTimerPepper').setAttribute('enabled', 'false');
	}
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

function headlight() {
	let headlightOn = document.getElementById('model__Headlight').getAttribute('headlight') == 'true';
	document.getElementById('model__Headlight').setAttribute('headlight', (!headlightOn).toString());
}

function omnilight1() {
	let omnilightOn = document.getElementById('model__Omni001').getAttribute('on') == 'true';
	document.getElementById('model__Omni001').setAttribute('on', (!omnilightOn).toString());
}

function omnilight2() {
	let omnilightOn = document.getElementById('model__Omni002').getAttribute('on') == 'true';
	document.getElementById('model__Omni002').setAttribute('on', (!omnilightOn).toString());
}

function omnilight3() {
	let omnilightOn = document.getElementById('model__Omni003').getAttribute('on') == 'true';
	document.getElementById('model__Omni003').setAttribute('on', (!omnilightOn).toString());
}

function omnilight4() {
	let omnilightOn = document.getElementById('model__Omni004').getAttribute('on') == 'true';
	document.getElementById('model__Omni004').setAttribute('on', (!omnilightOn).toString());
}

function omnilight5() {
	let omnilightOn = document.getElementById('model__Omni005').getAttribute('on') == 'true';
	document.getElementById('model__Omni005').setAttribute('on', (!omnilightOn).toString());
}

function omnilight6() {
	let omnilightOn = document.getElementById('model__Omni006').getAttribute('on') == 'true';
	document.getElementById('model__Omni006').setAttribute('on', (!omnilightOn).toString());
}

function defaultLights() {
	document.getElementById('model__Headlight').setAttribute('headlight', 'true');
	document.getElementById('model__Omni001').setAttribute('on', 'true');
	document.getElementById('model__Omni002').setAttribute('on', 'true');
	document.getElementById('model__Omni003').setAttribute('on', 'true');
	document.getElementById('model__Omni004').setAttribute('on', 'true');
	document.getElementById('model__Omni005').setAttribute('on', 'true');
	document.getElementById('model__Omni006').setAttribute('on', 'true');
	$("#checkboxHeadlight").prop("checked", true);
	$("#checkboxOmnilight1").prop("checked", true);
	$("#checkboxOmnilight2").prop("checked", true);
	$("#checkboxOmnilight3").prop("checked", true);
	$("#checkboxOmnilight4").prop("checked", true);
	$("#checkboxOmnilight5").prop("checked", true);
	$("#checkboxOmnilight6").prop("checked", true);
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