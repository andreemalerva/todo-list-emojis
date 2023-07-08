import { createPopup } from 'https://unpkg.com/@picmo/popup-picker@latest/dist/index.js?module';

document.addEventListener('DOMContentLoaded', () => {
    const emoji = document.querySelector('#selection-emoji');
    const trigger = document.querySelector('#addEmoji');
    const picker = createPopup({}, {
      referenceElement: trigger,
      triggerElement: trigger,
      position: 'right-end'
    });
  
    trigger.addEventListener('click', (e) => {
        e.preventDefault();
        picker.toggle();
    });
  
    picker.addEventListener('emoji:select', (selection) => {
      emoji.innerHTML = selection.emoji;
    });
  });