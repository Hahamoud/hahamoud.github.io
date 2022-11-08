class CardFlipper {
    constructor() {
        this.card = document.querySelector('card');
    }

    listen() {
        this.card.addEventListener('click', function() {
            this.classList.toggle('is-flipped');
        });
    }
}

export { CardFlipper };