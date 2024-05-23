import './bootstrap';

import * as bootstrap from 'bootstrap';

document.querySelector('.menu-toggle').addEventListener("click",function(){
    document.querySelector('.body-wrapper').classList.toggle('nav-off');
});
