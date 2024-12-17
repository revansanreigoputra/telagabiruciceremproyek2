import './bootstrap';
import 'preline';
import jQuery from 'jquery';
window.$ = jQuery;

document.addEventListener('livewire:navigated', () => { 
    window.HSStaticMethods.autoInit();
})