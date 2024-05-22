var counter = 0;

function changeLook() {
    counter += 1;
    switch (counter) {
        case 1:
            document.getElementById('bodyColor').style.backgroundColor = 'black';
            document.getElementById('headerColor').style.backgroundColor = '#c82b3c';
            document.getElementById('footerColor').style.backgroundColor = '#c82b3c';
            document.getElementById('main_3d_image').classList.remove("coke");
            document.getElementById('main_3d_image').classList.remove("sprite");
            document.getElementById('main_3d_image').classList.remove("pepper");
            document.getElementById('main_3d_image').classList.add("coke");
            break;
        case 2:
            document.getElementById('bodyColor').style.backgroundColor = '#04318d';
            document.getElementById('headerColor').style.backgroundColor = '#02a440';
            document.getElementById('footerColor').style.backgroundColor = '#02a440';
            document.getElementById('main_3d_image').classList.remove("coke");
            document.getElementById('main_3d_image').classList.remove("sprite");
            document.getElementById('main_3d_image').classList.remove("pepper");
            document.getElementById('main_3d_image').classList.add("sprite");
            break;
        case 3:
            counter = 0;
            document.getElementById('bodyColor').style.backgroundColor = '#8b2533';
            document.getElementById('headerColor').style.backgroundColor = '#450021';
            document.getElementById('footerColor').style.backgroundColor = '#450021';
            document.getElementById('main_3d_image').classList.remove("coke");
            document.getElementById('main_3d_image').classList.remove("sprite");
            document.getElementById('main_3d_image').classList.remove("pepper");
            document.getElementById('main_3d_image').classList.add("pepper");
            break;
    }
}

function changeBack() {
    counter = 0;
    document.getElementById('bodyColor').style.backgroundColor = 'rgba(182, 231, 243, 1.0)';
    document.getElementById('headerColor').style.backgroundColor = '#760003';
    document.getElementById('footerColor').style.backgroundColor = '#760003';
    document.getElementById('main_3d_image').classList.remove("coke");
    document.getElementById('main_3d_image').classList.remove("sprite");
    document.getElementById('main_3d_image').classList.remove("pepper");
    document.getElementById('main_3d_image').classList.add("coke");
}