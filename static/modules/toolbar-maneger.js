class ToolbarManager {


    constructor(toolbarId, wrapperId) {
        this.navbar = document.getElementById(toolbarId)
        this.wrapper = document.getElementById(wrapperId)
        this.prevScrollpos = this.getContentScrollAmount()
        this.activate = true
    }

    listen() {
        this.prevScrollpos = this.getContentScrollAmount()
        this.wrapper.onscroll = () => this.checkScrolling()
    }

    checkScrolling() {
        let currentScrollPos = this.getContentScrollAmount();
        //if (this.prevScrollpos > currentScrollPos) {
        if (50 > currentScrollPos) {
            this.navbar.classList.remove('raph-navbar-hide');
            this.navbar.classList.add('raph-navbar-show');
        } else {
            this.navbar.classList.remove('raph-navbar-show');
            this.navbar.classList.add('raph-navbar-hide');
        }
        this.prevScrollpos = currentScrollPos;
    }

    getContentScrollAmount() {
        return this.wrapper.scrollTop
    }
}

export { ToolbarManager };